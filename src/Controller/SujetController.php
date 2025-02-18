<?php

namespace App\Controller;

use App\Entity\Sujet;
use App\Form\SujetFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SujetController extends AbstractController{
    #[Route('/sujet', name: 'app_sujet')]
    public function index(): Response
    {
        $sujet = new Sujet();
        $form = $this->createForm(SujetFormType::class, $sujet);
        return $this->render('sujet/index.html.twig', [
            'controller_name' => 'SujetController',
            'form' => $form,
        ]);
    }
}
