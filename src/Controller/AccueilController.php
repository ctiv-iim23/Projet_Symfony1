<?php

namespace App\Controller;

use App\Entity\AccueilEntity;
use App\Form\AccueilFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(EntityManagerInterface $entityManager, Request $request)
    {

        $accueil = new accueil_entity();
        $form = $this->createForm(AccueilFormType::class, $accueil);

        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()){
            $accueil = $form->getData();

            $entityManager->persist($accueil);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }
        
        $categoriesRepository = $this->getDoctrine()
        ->getRepository(AccueilEntity::class)
        ->findAll();

        return $this->render('accueil/index.html.twig', [
            'accueil' => $AccueilEntityRepository,
            'formulaireAccueil' => $form->createView()
        ]);
    }
}