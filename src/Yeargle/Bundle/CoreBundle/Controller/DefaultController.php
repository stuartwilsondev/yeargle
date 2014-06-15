<?php

namespace Yeargle\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Yeargle\Bundle\CoreBundle\Resources\form\type\MainSearch;
use Symfony\Component\Intl\Intl;
use Yeargle\Bundle\CoreBundle\Entity\Searches;
use DateTime;

class DefaultController extends Controller
{
    const GOOGLE_URL = 'http://www.google.com';

    public function indexAction(Request $request)
    {
        $searchForm = $this->createForm(
            new MainSearch()
        );

        $searchForm->handleRequest($request);

        if ($searchForm->isValid()) {
            $userAgent = $request->headers->get('User-Agent');
            $clientIp = $request->getClientIp();
            $preferredLanguage = $request->getPreferredLanguage();
            $acceptedLanguages = $request->getLanguages();
            $languageName = Intl::getLanguageBundle()->getLanguageName($preferredLanguage);

            $data = $searchForm->getData();

            $searchRecord = new Searches();
            $searchRecord->setSearchDate(new DateTime());
            $searchRecord->setClientIpAddress($clientIp);
            $searchRecord->setAcceptedLanguages($acceptedLanguages);
            $searchRecord->setPreferredLanguage($languageName);
            $searchRecord->setUserAgent($userAgent);
            $searchRecord->setSearchText($data['search_element_text']);
            $searchRecord->setSerializedData($data);

            $em = $this->get('doctrine')->getManager();
            $em->persist($searchRecord);
            $em->flush();

            //redirect off to google

            $queryParams = array(
                'q' => $data['search_element_text'],
            );

            return $this->redirect(sprintf("%s#%s&tbs=qdr:y",self::GOOGLE_URL,http_build_query($queryParams)));

        }else{
            //get last 10 searches
            $lastTenSearches = $this->getDoctrine()
                ->getRepository('YeargleCoreBundle:Searches')
                ->getLastTenSearches();

            if (!$lastTenSearches) {
                //
                $lastTenSearches = array();
            }

            return $this->render('YeargleCoreBundle:Default:index.html.twig', array(
                'searchForm' => $searchForm->createView(),
                'lastTenSearches' => $lastTenSearches
            ));

        }



    }
}
