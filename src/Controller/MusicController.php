<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class MusicController extends AbstractController
{
    #[Route("/home/{name}", name: "getMusic")]
    public function getMusic()
    {
        $music=
        [
            [
            "name"=> "James Hetfield",
            "age"=> "Tiene la edad de mi padre",
            "origin"=> "California",
            "instrument"=> "Cantante y Guitarra líder",
            "pic"=> "https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2019/09/28/15696883449821.jpg"
            ],
            [
            "name"=> "Kirk Hammett",
            "age"=> "Un año más viejo que Hetfield",
            "origin"=> "California",
            "instrument"=> "Guitarra líder",
            "pic"=> "https://cuarteldelmetal.com/wp-content/uploads/2020/12/hammett.jpg"
            ],
            [
                "name"=> "Lars Ulrich",
                "age"=> "Sorprendentemente menor que Kirk",
                "origin"=> "Dinamarca",
                "instrument"=> "Bateria",
                "pic"=> "https://www.elindependiente.com/wp-content/uploads/2017/03/Lars_Ulrich_live_in_London_2008-09-15-656x368.jpg"
            ],
            [
                    "name"=> "Robert Trujillo",
                    "age"=> "Tiene casi la edad de mi madre xD",
                    "origin"=> "California",
                    "instrument"=> "Bajo eléctrico",
                    "pic"=> "https://indiehoy.com/wp-content/uploads/2023/03/robert-trujillo.jpg"
            ]
            ];
    return $this->render("Music/music.html.twig",["music"=> $music]);

    }
}