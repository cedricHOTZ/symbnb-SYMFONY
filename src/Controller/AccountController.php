<?php

namespace App\Controller;

use App\Entity\PasswordUpdate;
use App\Entity\User;
use App\Form\AccountType;
use App\Form\PasswordUpdateType;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AccountController extends AbstractController
{
    /**
     * Connexion et gérer le formulaire de connexion
     * @Route("/login", name="account_login")
     */
    public function login(AuthenticationUtils $utils)
    {
        //message d'erreur
        $error = $utils->getLastAuthenticationError();

        //Permet de garder l'email quand il y a une erreur
        $username = $utils->getLastUsername();

        return $this->render('account/login.html.twig',[
          'hasError' => $error !== null,
          'username' => $username
        ]);
    }
   /**
    * Déconnexion
    *@Route("/logout",name="account_logout")
    */
    public function logout(){

    }

    /**
     * Permet d'afficher le formulaire d'inscription
     * @Route("account/register", name="account_register")
     */
    public function register(Request $request,ObjectManager $manager,UserPasswordEncoderInterface $encoder){
        $user = new User();

        $form = $this->createForm(RegistrationType::class,$user);
     
        //envoie des données en bdd
        $form->handleRequest($request);

        //verif du formulaire
        if($form->isSubmitted() && $form->isValid()){
         
            //hashage du mot de passe
            $hash = $encoder->encodePassword($user,$user->getHash());
            $user->setHash($hash);

          $manager->persist($user);
          $manager->flush();

          $this->addFlash(
              'success',
              "Votre compte a bien été créé"
          );
          return $this->redirectToRoute('account_login');
        }
        return $this->render('account/registration.html.twig',[
            'form' => $form->createView()

    ]);
  }
  /**
   * Permet d'afficher et de traiter le formulaire de modification de profil
   * @Route("/account/profile" ,name="account_profile")
   * @IsGranted("ROLE_USER")
   */

  public function profile(Request $request,ObjectManager $manager){

      $user = $this->getUser();

      $form = $this->createForm(AccountType::class, $user);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
          
          $manager->flush();
         
          $this->addFlash(
              'success',
              "Votre profile à bien été modifié"
          );
      }

   return $this->render('account/profile.html.twig',[
       'form' => $form->createView()
   ]);
  }
/**
 * Permet de modifier le mot de passe
 * @Route("/account/password-update",name="account_password")
 * @IsGranted("ROLE_USER")
 */
  public function updatePassword(Request $request, ObjectManager $manager,UserPasswordEncoderInterface $encoder){
      $passwordUpdate = new PasswordUpdate();

      $user = $this->getUser();
      $form = $this->createForm(PasswordUpdateType::class,$passwordUpdate);

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
          //Vérifier  que le oldpassword  du form  soit le meme que le password de la bdd
          if(!password_verify($passwordUpdate->getOldpassword(), $user->getHash())){
          //gérer l'erreur
          $form->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe"));

      }else{
          $newPassword = $passwordUpdate->getNewPassword();
          $hash = $encoder->encodePassword($user,$newPassword);

          $user->setHash($hash);

          $manager->persist($user);
          $manager->flush();

          $this->addFlash(
              'success',
              "Votre mot de passe a bien été modifié"
          );

          return $this->redirectToRoute(('homepage'));
          }
          
      }
      return $this->render('account/password.html.twig',[
          'form' => $form->createView()
      ]);

      }
    
  /**
   * Permet d'afficher le profil de l'utilisateur connecté
   * @Route("/account",name="account_index")
   * @IsGranted("ROLE_USER")
   */

  public function myAccount(){
     return $this->render('user/index.html.twig',[
         'user' => $this->getUser()
     ]);
  }
/**
 * Permet d'afficher la liste des réservations faites par l'utilisateur
 * @Route("/account/bookings", name="account_bookings")
 */
  public function bookings(){
     return  $this->render('account/bookings.html.twig');
  }
} 
