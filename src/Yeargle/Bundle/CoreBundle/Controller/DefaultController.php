<?php

namespace Yeargle\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YeargleCoreBundle:Default:index.html.twig');
    }
}
