<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list")
     */
    public function homepage(): Response
    {
       return  $this->render('blog.html.twig',[
           'dia' => date('D')
       ]);
        /*return new Response (
            '<html><body><h1>Welcome!</h1></body></html>'
        );*/
    }
}