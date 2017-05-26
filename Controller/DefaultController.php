<?php

namespace Vadrygar\OrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        var_dump('toto');
        die('prout');
        return $this->render('VadrygarOrmBundle:Default:index.html.twig');
    }
}
