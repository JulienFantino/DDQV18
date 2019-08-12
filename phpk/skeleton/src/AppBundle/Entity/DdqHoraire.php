<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DdqHoraire
 *
 * @ORM\Table(name="ddq_horaire", indexes={@ORM\Index(name="IDX_1EFC24682E1CF54C", columns={"id_ddq_reglement"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqHorraireRepository")
 */
class DdqHoraire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_horaire_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nbjours", type="string", length=8, nullable=false)
     */
    private $nbjours;

    /**
     * @var string
     *
     * @ORM\Column(name="nbheures", type="string", length=8, nullable=false)
     */
    private $nbheures;

    /**
     * @var string|null
     *
     * @ORM\Column(name="details", type="string", length=32, nullable=true)
     */
    private $details;

    /**
     * @var \AppBundle\Entity\DdqReglement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqReglement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_reglement", referencedColumnName="id")
     * })
     */
    private $idDdqReglement;


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
     * Set nbjours.
     *
     * @param string $nbjours
     *
     * @return DdqHoraire
     */
    public function setNbjours($nbjours)
    {
        $this->nbjours = $nbjours;

        return $this;
    }

    /**
     * Get nbjours.
     *
     * @return string
     */
    public function getNbjours()
    {
        return $this->nbjours;
    }

    /**
     * Set nbheures.
     *
     * @param string $nbheures
     *
     * @return DdqHoraire
     */
    public function setNbheures($nbheures)
    {
        $this->nbheures = $nbheures;

        return $this;
    }

    /**
     * Get nbheures.
     *
     * @return string
     */
    public function getNbheures()
    {
        return $this->nbheures;
    }

    /**
     * Set details.
     *
     * @param string|null $details
     *
     * @return DdqHoraire
     */
    public function setDetails($details = null)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details.
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set idDdqReglement.
     *
     * @param \AppBundle\Entity\DdqReglement|null $idDdqReglement
     *
     * @return DdqHoraire
     */
    public function setIdDdqReglement(\AppBundle\Entity\DdqReglement $idDdqReglement = null)
    {
        $this->idDdqReglement = $idDdqReglement;

        return $this;
    }

    /**
     * Get idDdqReglement.
     *
     * @return \AppBundle\Entity\DdqReglement|null
     */
    public function getIdDdqReglement()
    {
        return $this->idDdqReglement;
    }
}
