<?php

namespace Yeargle\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Searches
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Yeargle\Bundle\CoreBundle\Entity\SearchesRepository")
 */
class Searches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * The Search Text
     *
     * @ORM\Column(type="text", nullable=false)
     */
    private $searchText;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $searchDate;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $searchLocale;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $userAgent;

    /**
     *
     * @ORM\Column(type="string", length=32, nullable=false)
     */
    private $clientIpAddress;

    /**
     * @ORM\Column(type="string", length=32, nullable=false)
     */
    private $preferredLanguage;

    /**
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $acceptedLanguages;

    /**
     * The full submission data
     *
     * @ORM\Column(type="text", nullable=false)
     */
    private $serializedData;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $searchDate
     */
    public function setSearchDate($searchDate)
    {
        $this->searchDate = $searchDate;
    }

    /**
     * @return mixed
     */
    public function getSearchDate()
    {
        return $this->searchDate;
    }

    /**
     * @param mixed $searchLocale
     */
    public function setSearchLocale($searchLocale)
    {
        $this->searchLocale = $searchLocale;
    }

    /**
     * @return mixed
     */
    public function getSearchLocale()
    {
        return $this->searchLocale;
    }

    /**
     * @param mixed $searchText
     */
    public function setSearchText($searchText)
    {
        //$this->searchText = strip_tags($searchText);
        $this->searchText = $searchText;
    }

    /**
     * @return mixed
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param mixed $acceptedLanguages
     */
    public function setAcceptedLanguages(array $acceptedLanguages)
    {
        $this->acceptedLanguages = serialize($acceptedLanguages);
    }

    /**
     * @return mixed
     */
    public function getAcceptedLanguages()
    {
        return unserialize($this->acceptedLanguages);
    }

    /**
     * @param mixed $clientIpAddress
     */
    public function setClientIpAddress($clientIpAddress)
    {
        $this->clientIpAddress = $clientIpAddress;
    }

    /**
     * @return mixed
     */
    public function getClientIpAddress()
    {
        return $this->clientIpAddress;
    }

    /**
     * @param mixed $preferredLanguage
     */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->preferredLanguage = $preferredLanguage;
    }

    /**
     * @return mixed
     */
    public function getPreferredLanguage()
    {
        return $this->preferredLanguage;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param mixed $serializedData
     */
    public function setSerializedData($serializedData)
    {
        $this->serializedData = serialize($serializedData);
    }

    /**
     * @return mixed
     */
    public function getSerializedData()
    {
        return unserialize($this->serializedData);
    }






}
