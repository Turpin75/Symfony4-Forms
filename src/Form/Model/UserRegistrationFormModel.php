<?php


namespace App\Form\Model;


use App\Validator\UniqueUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

class UserRegistrationFormModel
{
    /**
     * @Assert\NotBlank(message="Please entrer an email")
     * @Assert\Email()
     * @UniqueUser()
     */
    public $email;
    /**
     * @Assert\NotBlank(message="Choose a password!")
     * @Assert\Length(min=5, minMessage="You need a password longer than that!")
     */
    public  $plainPassword;
    /**
     * @Assert\IsTrue(message="You must agree to our terms.")
     */
    public $agreeTerms;
}
