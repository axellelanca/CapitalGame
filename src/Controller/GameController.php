<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Country;

class GameController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('game/home.html.twig');
    }

    /**
     * @Route("/pays", name="pays")
     */
    public function pays(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Country::class);
        $countries = $repo->findAll();

        return $this->render('game/pays.html.twig', [
            'countries' => $countries
        ]);
    }

    /**
     *  @Route("/detail/{id}", name="detailPage")
     */
    public function detail($id): Response
    {
        $repo = $this->getdoctrine()->getRepository(Country::class);
        $country = $repo->find($id);

        return $this->render('game/detail.html.twig', [
            'country' => $country
        ]);
    }

        /**
     * @Route("/quiz", name="quiz")
     */
    public function quiz(): Response
    {
        return $this->render('game/quiz.html.twig', [
            'controller_name' => 'GameController',
        ]);
    }
}
