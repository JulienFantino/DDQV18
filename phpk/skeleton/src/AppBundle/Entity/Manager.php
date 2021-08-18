<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * manager
 *
 * @ORM\Table(name="manager")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\managerRepository")
 */
class Manager
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
     * @var string
     *
     * @ORM\Column(name="nomIusm", type="string", length=255)
     */
    private $nomIusm;

    /**
     * @var \AppBundle\Entity\Agent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agent", referencedColumnName="id")
     * })
     */
    private $idAgent;

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
     * Set nomIusm.
     *
     * @param string $nomIusm
     *
     * @return manager
     */
    public function setNomIusm($nomIusm)
    {
        $this->nomIusm = $nomIusm;

        return $this;
    }

    /**
     * Get nomIusm.
     *
     * @return string
     */
    public function getNomIusm()
    {
        return $this->nomIusm;
    }

    /**
     * @return Agent
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * @param Agent $idAgent
     */
    public function setIdAgent(Agent $idAgent)
    {
        $this->idAgent = $idAgent;
    }


}
