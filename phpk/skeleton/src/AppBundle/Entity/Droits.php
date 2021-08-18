<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\droitsRepository")
 */
class Droits
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     * @var \AppBundle\Entity\Entite
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entite", referencedColumnName="id")
     * })
     */
    private $idEntite;
    /**
     * @var \AppBundle\Entity\Manager
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Manager")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Manager", referencedColumnName="id")
     * })
     */
    private $idManager;

    /**
     * @return Manager
     */
    public function getIdManager()
    {
        return $this->idManager;
    }

    /**
     * @param Manager $idManager
     */
    public function setIdManager(Manager $idManager)
    {
        $this->idManager = $idManager;
    }

    /**
     * @return Entite
     */
    public function getIdEntite()
    {
        return $this->idEntite;
    }

    /**
     * @param Entite $idEntite
     */
    public function setIdEntite(Entite $idEntite)
    {
        $this->idEntite = $idEntite;
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set actif.
     *
     * @param bool $actif
     *
     * @return droits
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif.
     *
     * @return bool
     */
    public function getActif()
    {
        return $this->actif;
    }


    //Ajout ID_MANAGER+ID_ENTITE RELATIONS ONE TO MANY
}
