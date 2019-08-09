<?php

namespace AppBundle\Entity;

/**
 * DdqContratRepartition
 *
 * @ORM\Table(name="ddq_contrat_repartition", indexes={@ORM\Index(name="IDX_F777E6D8A303A0ED", columns={"id_ddq_repartition"}), @ORM\Index(name="IDX_F777E6D8DD124DBA", columns={"id_ddq_contrat"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqContratRepartitionRepository")
 */
class DdqContratRepartition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_contrat_repartition_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \AppBundle\Entity\DdqContrat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DdqContrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ddq_contrat", referencedColumnName="id")
     * })
     */
    private $idDdqContrat;


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
     * @return DdqContratRepartition
     */
    public function setIdDdqRepartition(\AppBundle\Entity\DdqRepartition $idDdqRepartition = null)
    {
        $this->idDdqRepartition = $idDdqRepartition;

        return $this;
    }

    /**
     * Get idDdqContrat.
     *
     * @return \AppBundle\Entity\DdqContrat|null
     */
    public function getIdDdqContrat()
    {
        return $this->idDdqContrat;
    }

    /**
     * Set idDdqContrat.
     *
     * @param \AppBundle\Entity\DdqContrat|null $idDdqContrat
     *
     * @return DdqContratRepartition
     */
    public function setIdDdqContrat(\AppBundle\Entity\DdqContrat $idDdqContrat = null)
    {
        $this->idDdqContrat = $idDdqContrat;

        return $this;
    }
}
