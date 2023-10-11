<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\Mime\Message;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
// use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

         // Crée le formulaire
        $builder

        ->add('nom', TextType::class, [
            'constraints' => [
                new Length([
                    'min' => 3,
                    'minMessage' => 'Le nom doit avoir au moins {{ limit }} caractères.',
                ]),
            ],
        ])

        ->add('prenom', TextType::class, [
            'constraints' => [
                new Length([
                    'min' => 3,
                    'minMessage' => 'Le prenom doit avoir au moins {{ limit }} caractères.',
                ]),
            ],
        ])

            ->add('date_de_naissance', null, [
                'widget' => 'single_text',
                'invalid_message' => 'Veuillez indiquer votre date de naissance',
                
            ])

            ->add('email')

            ->add('adresse', TextType::class, [
                'constraints' => [
                    
                ],
            ])

            ->add('login', TextType::class, [
                'constraints' => [
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Le login doit avoir au moins {{ limit }} caractères',
                        
                    ]),
                ],
            ])

            ->add('Conditions_utilisations', CheckboxType::class, [ // Ajoute un champ de type case à cocher nommé 'conditions '
                'mapped' => false, // Ne mappe pas ce champ directement à une propriété de l'entité User
                'constraints' => [ // Ajoute des contraintes de validation
                    new IsTrue([  // Vérifie si la case à cocher est cochée
                        'message' => 'Vous devez accepter nos conditions d\'utilisation', // Message d'erreur en cas d'échec
                    ]),
                ],
            ])

            ->add('password', PasswordType::class, [ // Ajoute un champ de type mot de passe nommé 'password'
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],// Attribut HTML pour l'autocomplétion du champ de mot de passe
                'constraints' => [
                    new Length([  // Vérifie la longueur du mot de passe
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au moins 6 caractères', //message erreur
                        'max' => 4096,
                    ]),
                    new Regex([
                        'pattern' => '/^(?=.*[A-Z])(?=.*\d)/',
                        'message' => 'Votre mot de passe doit contenir au moins une lettre majuscule et au moins un chiffre.',
                    ]),
                ],
            ]);
    }

    
    //  configure les options du formulaire : lorsque le formulaire est soumis, Symfony créera un nouvel objet User et y attribuera les données saisies dans le formulaire.
    public function configureOptions(OptionsResolver $resolver): void
    {
        // définir les options par défaut pour ce formulaire en passant un tableau d'options à la méthode setDefaults de l'objet $resolver.
        $resolver->setDefaults([

            // Spécifie que les données du formulaire seront liées à la classe User
            // Cette option spécifie quelle classe sera utilisée pour créer un objet à partir des données du formulaire.
            
            'data_class' => User::class, 
        ]);
    }
}
