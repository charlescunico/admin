<?php

namespace App\Controller;

use App\Entity\Boat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class BoatController extends AbstractController
{
    /**
     * @Route("/boat", name="boat")
     */
    public function index()
    {
        return $this->render('boat/index.html.twig', [
            'controller_name' => 'BoatController',
        ]);
    }

    /**
     * @Route("/boat/create", name="create_boat")
     */
    public function create(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $boat = new Boat();
        $boat->setName('Serenity');
        $boat->setLength(50);
        $boat->setYear(2016);
        $boat->setColor('blue');

        $entityManager->persist($boat);
        $entityManager->flush();

        return new Response('Saved new boat with id ' . $boat->getId());
    }

    /**
     * @Route("/boat/{id}", name="boat_show")
     */
    public function show($id): Response
    {
        $boat = $this->getDoctrine()
            ->getRepository(Boat::class)
            ->find($id);

        if (!$boat) {
            throw $this->createNotFoundException(
                'No boat found for id ' . $id
            );
        }

        return new Response('Check out this great boat: ' . $boat->getName());
    }
}
