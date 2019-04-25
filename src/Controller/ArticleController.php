<?php
// src/Controller/ArticleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /** URL to get to controller
    * @Route("/articles")
    */
    public function number()
    {
        $number = random_int(0, 100);

        // renders the articles template
        return $this->render('articles.html.twig', [
            'number' => $number,
        ]);
    }
}