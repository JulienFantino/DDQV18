<?php

namespace AppBundle\Entity;

/**
 * DdqHoraireRepartition
 *
 * @ORM\Table(name="ddq_horaire_repartition", indexes={@ORM\Index(name="IDX_AA6330096EEE99F", columns={"id_ddq_horaire"}), @ORM\Index(name="IDX_AA633009A303A0ED", columns={"id_ddq_repartition"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqHorraireRepartitionRepository")
 */
class DdqHoraireRepartition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_horaire_repartition_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\DdqHoraire
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqHoraire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_horaire", referencedColumnName="id")
     * })
     */
    private $idDdqHoraire;

    /**
     * @var \AppBundle\Entity\DdqRepartition
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqRepartition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_repartition", referencedColumnName="id")
     * })
     */
    private $idDdqRepartition;


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
     * Get idDdqHoraire.
     *
     * @return \AppBundle\Entity\DdqHoraire|null
     */
    public function getIdDdqHoraire()
    {
        return $this->idDdqHoraire;
    }

    /**
     * Set idDdqHoraire.
     *
     * @param \AppBundle\Entity\DdqHoraire|null $idDdqHoraire
     *
     * @return DdqHoraireRepartition
     */
    public function setIdDdqHoraire(\AppBundle\Entity\DdqHoraire $idDdqHoraire = null)
    {
        $this->idDdqHoraire = $idDdqHoraire;

        return $this;
    }

    /**
     * Get idDdqRepartition.
     *
     * @return \AppBundle\Entity\DdqRepartition|null
     */
    public function getIdDdqRepartition()
    {
        return $this->idDdqRepartition;
    }

    /**
     * Set idDdqRepartition.
     *
     * @param \AppBundle\Entity\DdqRepartition|null $idDdqRepartition
     *
     * @return DdqHoraireRepartition
     */
    public function setIdDdqRepartition(\AppBundle\Entity\DdqRepartition $idDdqRepartition = null)
    {
        $this->idDdqRepartition = $idDdqRepartition;

        return $this;
    }
}
