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
      dump($response);
      exit;

      return $this->json(json_decode($response->getBody()));
  }
}
