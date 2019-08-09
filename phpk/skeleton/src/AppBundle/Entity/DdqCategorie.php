<?php

namespace AppBundle\Entity;

/**
 * DdqCategorie
 *
 * @ORM\Table(name="ddq_categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DdqCategorieRepository")
 */
class DdqCategorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ddq_categorie_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=32, nullable=false)
     */
    private $libelle;


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
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return DdqCategorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}
