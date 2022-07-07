<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
    #[Route('/web', name: 'app_web')]
    public function index(): Response
    {
      
        return $this->render('web/index.html.twig', [
            'title' =>'Smyfony Web Application',
            'array' => [
                'card_title' => 'Lorem İpsum',
                'card_img' => 'https://images.ctfassets.net/hrltx12pl8hq/GjdgAxyI2eo6kr0xgvZFX/5b7ca56695b5acc2b2757eaf2ddec7a3/water-splash-clr-shutterstock_258421805.jpg?fit=fill&w=480&h=270',
                'card_content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in"            ]
        ]);
    }
}
