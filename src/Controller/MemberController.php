<?php
namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Member;
use App\Form\UserType;

class MemberController extends AbstractController
{


#[Route("/member", name: "member")]
public function newMember(Request $request, EntityManagerInterface $entityManager)

{
    $member= new Member();
    $form = $this->createForm(UserType::class, $member);

    $form->handleRequest($request);

    if($form->isSubmitted()&&$form->isValid())
    {
        $entityManager->persist($member);
            $entityManager->flush();

            return $this->redirectToRoute('member_success');
        }

        return $this->render('users/createuser.html.twig', [
            'userForm' => $form->createView()
        ]);
    }

    #[Route("/member/success", name: "member_success")]
    public function memberSuccess()
    {
        return new Response('¡Ya eres un nuevo miembro!');
    }
}

