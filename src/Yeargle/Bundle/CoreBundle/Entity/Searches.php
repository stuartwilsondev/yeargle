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
     * @ORM\Column(type="string", nullable=false)
     */
    private $searchText;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $searchDate;

    /**
     * Needs to be long enough to accommodate each of the full timezone names
     *
     * @ORM\Column(type="string", length=32, nullable=false)
     */
    private $searchLocale;

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
        $this->searchText = $searchText;
    }

    /**
     * @return mixed
     */
    public function getSearchText()
    {
        return $this->searchText;
    }




}
