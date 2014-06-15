<?php

namespace Yeargle\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Yeargle\Bundle\CoreBundle\Resources\form\type\MainSearch;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $searchForm = $this->createForm(
            new MainSearch()
        );

        $searchForm->handleRequest($request);

        if ($searchForm->isValid()) {

        }

        return $this->render('YeargleCoreBundle:Default:index.html.twig', array(
            'searchForm' => $searchForm->createView()
        ));


    }
}
