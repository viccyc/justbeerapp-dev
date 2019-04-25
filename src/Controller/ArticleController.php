<?php
// src/Controller/ArticleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}