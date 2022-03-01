<?php

namespace App\Controller\Admin;

use App\Entity\Task;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class TaskCrudController extends AbstractCrudController
{
    private $security;

    public static function getEntityFqcn(): string
    {
        return Task::class;
    }


    public function configureFields(string $pageName): iterable
    {

        $user = $this->security->getUser();

        yield IdField::new('id')
            ->onlyOnIndex();
        yield TextField::new('title');
        yield TextareaField::new('content')
            ->onlyOnForms();
        if ($this->getUser() == $user) {
            yield BooleanField::new('is_done')
                ->renderAsSwitch(false);
        }
        yield DateField::new('createdAt')
            ->hideOnForm();
    }
}
