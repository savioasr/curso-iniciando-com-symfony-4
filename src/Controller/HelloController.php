<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
    * @Route("hello")
    */
    public function world()
    {
        return new Response(
            "Hello World!"
        );
    }

    /**
    * @Route("message")
    */
    public function message()
    {
        return $this->render("message/message.html.twig", [
            "message" => "Oi"
        ]);
    }
}