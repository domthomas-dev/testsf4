<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 14/05/2018
 * Time: 20:50
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PagesController{

  public function index()
  {
    return new Response('Salut les gens');
  }
}