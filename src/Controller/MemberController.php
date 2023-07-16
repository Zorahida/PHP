<?php
namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Member;

class MemberController extends AbstractController
{


#[Route("/member", name:"member")]
public function newMember(EntityManagerInterface $doctrine)
    {
        $member = new Member();

        $member->setName("");
        $member->setAge(18);
        $member->setOrigin("");
        $member->setInstrument("");
        $member->setPic("");

        $doctrine->persist($member);
        $doctrine->flush();

        return new Response('Ya eres un nuevo miembro!');
    }
}