<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;

class HttpController extends Controller {

/**
 * @Route("/getarticles")
 */

  public function getArticles() {
      // Create a client with a base URI
      $client = new \GuzzleHttp\Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);
      // Send a request to https://justbeerapp.com/api/v8/articles
      $response = $client->request('GET', 'todos/1');

    //   $vars = get_object_vars ( $body );
    //   foreach($vars as $key=>$value) {
    //     var_dump($key, $value);
    //   }
      return $this->json($response->getBody());
  }
}
