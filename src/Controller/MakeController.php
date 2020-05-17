<?php
// this controller was auto-generated via Symfony in the command line
// php bin/console make:controller MakeController
// nothing has been changed -- this is what the command stubs out, including an index Twig template

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MakeController extends AbstractController
{
    /**
     * @Route("/make", name="make")
     */
    public function index()
    {
        return $this->render('make/index.html.twig', [
            'controller_name' => 'MakeController',
        ]);
    }
}
