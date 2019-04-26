<?php
// src/Controller/ArticleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// Composer's autoloader for Guzzle use
require '../vendor/autoload.php';

class ArticleController extends AbstractController
{
    /** URL to get to controller
    * @Route("/articles")
    */
    public function renderArticles()
    {
        // renders the articles template
        return $this->render('articles.html.twig');
    }
}