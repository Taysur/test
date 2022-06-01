<?php

namespace App\Controller\Admin;

use App\Entity\Propr;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ProprCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Propr::class;
    }

    
     
    public function configureFields(string $pageName): iterable
    {
        return [
          
            TextField::new('titre'),
            ImageField::new('image')->setBasePath('uploads/images/prop/')->setUploadDir('public/uploads/images/prop'),
            
            TextField::new('type'),
            TextField::new('description'),
            IntegerField::new('prix'),
            IntegerField::new('surface'),
            IntegerField::new('chambre'),
            IntegerField::new('salle'),
            IntegerField::new('wc'),
            IntegerField::new('parking'),
            IntegerField::new('jardin'),
            IntegerField::new('garage'),


     
           
           

        ];
    }









}
