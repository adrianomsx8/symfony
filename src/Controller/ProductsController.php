<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProductRepository;

class ProductsController extends AbstractController
{
    /**
     * @Route("/products", name="products_list")
     */
    public function homepage(ProductRepository $repo): Response
    {
       $bikes = $repo->findBy([]);

       return  $this->render('homepage.html.twig',[
           'bikes' =>  $bikes 
       ]);
        /*return new Response (
            '<html><body><h1>Welcome!</h1></body></html>'
        );*/
    }
}