<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabController extends AbstractController
{
    #[Route('/tab/{nb?5<\d+>}', name: 'tab')]
    public function index($nb): Response
    {
        $notes =[];
        for ($i = 0 ; $i<$nb ; $i++){
            $notes[] = rand(0,20);
        }
        return $this->render('tab/index.html.twig', [
            'notes' => $notes,
        ]);
    }

    #[Route('/users', name: 'tab.users')]
    public function users(): Response
    {
        $users =[
            ['firstname' => 'aymen' ,   'name'=> 'selleaouti', 'age' => 39],
            ['firstname' => 'gratien' , 'name'=> 'manou',  'age' => 2],
            ['firstname' => 'joe' ,     'name'=> 'adjanor', 'age' => 2],
        ];

        return $this->render('tab/users.html.twig',[
            'users'=>$users
        ]);

    }
}
