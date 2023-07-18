<?php

namespace App\Controller;

use App\Entity\Discografía;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Music;


class MusicController extends AbstractController
{
    #[Route("/music{name}", name:"getMusic")]
    public function getMusic(EntityManagerInterface $doctrine, $name)
    {

        $repository = $doctrine->getRepository(Music::class);
        $music = $repository ->find($name);

        return $this->render("Music/music.html.twig", ["music" => $music]);

    }

    #[Route("/home", name: "home")]
    public function home(): Response
    {
        $music =
        [
            [
            "name"=> "James Hetfield",
            "age"=> "Tiene la edad de mi padre",
            "origin"=> "Es de California",
            "instrument"=> "Cantante y Guitarra líder",
            "pic"=> "https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2019/09/28/15696883449821.jpg"
            ],
            [
            "name"=> "Kirk Hammett",
            "age"=> "Un año más viejo que Hetfield",
            "origin"=> "Es de California",
            "instrument"=> "Guitarra líder",
            "pic"=> "https://cuarteldelmetal.com/wp-content/uploads/2020/12/hammett.jpg"
            ],
            [
                "name"=> "Lars Ulrich",
                "age"=> "Sorprendentemente menor que Kirk",
                "origin"=> "Es de Dinamarca",
                "instrument"=> "Bateria",
                "pic"=> "https://www.elindependiente.com/wp-content/uploads/2017/03/Lars_Ulrich_live_in_London_2008-09-15-656x368.jpg"
            ],
            [
                    "name"=> "Robert Trujillo",
                    "age"=> "Tiene casi la edad de mi madre xD",
                    "origin"=> "Es de California",
                    "instrument"=> "Bajo eléctrico",
                    "pic"=> "https://indiehoy.com/wp-content/uploads/2023/03/robert-trujillo.jpg"
            ]
            ];

    return $this->render("Music/homeMusic.html.twig",["music"=> $music]);
        }
    
        #[Route("/musics", name: "listMusics")]
    public function listMusics(EntityManagerInterface $doctrine)
    {

        $repository = $doctrine->getRepository(Music::class);

        $musics = $repository->findAll();

        return $this->render("Music/listMusics.html.twig", ["musics" => $musics]);
    }

   
 #[Route("/member", name:"member")]
    public function newMember(EntityManagerInterface $doctrine)
        {
            $musician = new Music();
    
            $musician->setName("");
            $musician->setAge(18);
            $musician->setOrigin("");
            $musician->setInstrument("");
            $musician->setPic("");
    
            $discografia1 = new Discografía();

            $discografia1->setTitle("Master of Puppets");
            $discografia1->setImg("https://img.europapress.es/fotoweb/fotonoticia_20160305095544_1200.jpg");

            $musician->addDiscografA($discografia1);

            $doctrine->persist($musician);
            $doctrine->flush();
            $doctrine->persist($discografia1);
            $doctrine->flush();

    
            //return new Response('Ya eres un nuevo miembro!');
            return $this->render('Music/member.html.twig', ['member' => $musician]);
        }   
 }