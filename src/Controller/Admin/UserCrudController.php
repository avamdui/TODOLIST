<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')
            ->onlyOnIndex();
        yield EmailField::new('email');
        yield Field::new('username')
            ->onlyOnForms();
        yield Field::new('password')
            ->onlyOnForms();
        yield BooleanField::new('is_verified')
            ->renderAsSwitch(false);
        yield DateField::new('createdAt')
            ->onlyOnForms();


        $roles = ['ROLE_ADMIN', 'ROLE_USER'];
        yield ChoiceField::new('roles')
            ->setChoices(array_combine($roles, $roles))
            ->allowMultipleChoices()
            ->renderExpanded();

        // $choices = ['Utilisateur' => 'ROLES_USER', 'Administrateur' => 'ROLE_ADMIN'];
        // return [
        // IdField::new('id')->hideOnForm(),
        // TextField::new('username'),
        // EmailField::new('email'),
        // TextField::new('password')->hideOnForm(),
        //ArrayField::new('roles')->setHelp('Available roles: ROLE_ADMIN, ROLE_USER'),
        //ChoiceField::new('roles')->onlyOnForms()->setChoices($choices),
        // BooleanField::new('is_verified')
        // ];
    }
}
