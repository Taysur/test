<?php

namespace App\Controller\Admin;

use App\Entity\Propr;
use App\Entity\Demande;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Test');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
   yield MenuItem::linkToCrud('propriété', 'fas fa-list', Propr::class);   
   yield MenuItem::linkToCrud('demande', 'fas fa-list', Demande::class);   
       // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
