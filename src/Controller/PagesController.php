<?php
/**
 * Created by PhpStorm.
 * User: developpeur
 * Date: 14/05/2018
 * Time: 20:50
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PagesController{

  /**
   * @Route("/")
   * @param Environment $twig
   * @return Response
   */
  public function index(Environment $twig)
  {

    return new Response($twig->render('pages/welcome.html.twig'));
  }
}