<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;

class HttpController {

/**
 * @Route("/getarticles")
 */

  public function getArticles() {
      // Create a client with a base URI
      $client = new \GuzzleHttp\Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);
      // Send a request to https://justbeerapp.com/api/v8/articles
      $response = $client->request('GET', 'todos/1');
      // $jsonResponse = $this->json($response);
      $body = $response->getBody();
      // Implicitly cast the body to a string and echo it
      echo $body;
      // return $body;
      exit;

      // return $this->json($response);
      // return $this->json(json_decode($response->getBody()));
  }
}
