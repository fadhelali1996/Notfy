<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotfyController extends AbstractController
{
    /**
     * @Route("/{notfy}", name="app_notfy")
     */
    public function index($notfy=null): Response
    {

         if($notfy != null){
            $this>$this->addFlash(
                $notfy,
                $notfy
             );

         }
       
        return $this->render('notfy/index.html.twig', [
            'notfy' => $notfy,
        ]);
    }
}
