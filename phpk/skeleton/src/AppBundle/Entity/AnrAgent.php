<?php

namespace AppBundle\Entity;

/**
 * AnrAgent
 *
 * @ORM\Table(name="anr_agent")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnrAgentRepository")
 */
class AnrAgent
{
    /**
     * @var string
     *
     * @ORM\Column(name="idagent", type="string", length=32, options={"comment"="PK_Agent"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idagent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomcomplet", type="string", length=128, nullable=true)
     */
    private $nomcomplet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel", type="string", length=16, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numabrege", type="string", length=6, nullable=true)
     */
    private $numabrege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etablissement", type="string", length=2, nullable=true)
     */
    private $etablissement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleemploi", type="string", length=128, nullable=true)
     */
    private $libelleemploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeemploi", type="string", length=16, nullable=true)
     */
    private $codeemploi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=64, nullable=true)
     */
    private $role;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numemploye", type="string", length=16, nullable=true)
     */
    private $numemploye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeemploye", type="string", length=4, nullable=true)
     */
    private $typeemploye;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=128, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idresponsable", type="string", length=64, nullable=true)
     */
    private $idresponsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomresponsable", type="string", length=128, nullable=true)
     */
    private $nomresponsable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", length=16, nullable=true)
     */
    private $mobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeorganisme", type="string", length=16, nullable=true)
     */
    private $codeorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codecaisse", type="string", length=4, nullable=true)
     */
    private $codecaisse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomorganisme", type="string", length=64, nullable=true)
     */
    private $nomorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact", type="string", length=64, nullable=true)
     */
    private $contact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civilite", type="string", length=2, nullable=true)
     */
    private $civilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idsite", type="string", length=64, nullable=true)
     */
    private $idsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomsite", type="string", length=64, nullable=true)
     */
    private $nomsite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="identite", type="string", length=32, nullable=true)
     */
    private $identite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomentite", type="string", length=128, nullable=true)
     */
    private $nomentite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomentabrege", type="string", length=32, nullable=true)
     */
    private $nomentabrege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sigleent", type="string", length=64, nullable=true)
     */
    private $sigleent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listerouge", type="string", nullable=true)
     */
    private $listerouge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeagent", type="string", length=4, nullable=true)
     */
    private $typeagent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finvaliditeentree", type="string", length=32, nullable=true)
     */
    private $finvaliditeentree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abslongueduree", type="string", nullable=true)
     */
    private $abslongueduree;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entreeinvalidee", type="string", nullable=true)
     */
    private $entreeinvalidee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idorganisme", type="string", length=64, nullable=true)
     */
    private $idorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="typeorganisme", type="string", length=4, nullable=true)
     */
    private $typeorganisme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listerougephoto", type="string", nullable=true)
     */
    private $listerougephoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listeorange", type="string", nullable=true)
     */
    private $listeorange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listejaune", type="string", nullable=true)
     */
    private $listejaune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parking", type="string", length=16, nullable=true)
     */
    private $parking;

    /**
     * @var string|null
     *
     * @ORM\Column(name="publication", type="string", nullable=true)
     */
    private $publication;

    /**
     * Get idagent.
     *
     * @return string
     */
    public function getIdagent()
    {
        return $this->idagent;
    }

    /**
     * Set idagent
     *
     * @param string $idagent
     * @return AnrAgent
     */
    public function setIdagent($idagent)
    {
        $this->idagent = $idagent;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return AnrAgent
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nomcomplet.
     *
     * @return string|null
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set nomcomplet.
     *
     * @param string|null $nomcomplet
     *
     * @return AnrAgent
     */
    public function setNomcomplet($nomcomplet = null)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return string|null
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return AnrAgent
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get numabrege.
     *
     * @return string|null
     */
    public function getNumabrege()
    {
        return $this->numabrege;
    }

    /**
     * Set numabrege.
     *
     * @param string|null $numabrege
     *
     * @return AnrAgent
     */
    public function setNumabrege($numabrege = null)
    {
        $this->numabrege = $numabrege;

        return $this;
    }

    /**
     * Get etablissement.
     *
     * @return string|null
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set etablissement.
     *
     * @param string|null $etablissement
     *
     * @return AnrAgent
     */
    public function setEtablissement($etablissement = null)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get libelleemploi.
     *
     * @return string|null
     */
    public function getLibelleemploi()
    {
        return $this->libelleemploi;
    }

    /**
     * Set libelleemploi.
     *
     * @param string|null $libelleemploi
     *
     * @return AnrAgent
     */
    public function setLibelleemploi($libelleemploi = null)
    {
        $this->libelleemploi = $libelleemploi;

        return $this;
    }

    /**
     * Get codeemploi.
     *
     * @return string|null
     */
    public function getCodeemploi()
    {
        return $this->codeemploi;
    }

    /**
     * Set codeemploi.
     *
     * @param string|null $codeemploi
     *
     * @return AnrAgent
     */
    public function setCodeemploi($codeemploi = null)
    {
        $this->codeemploi = $codeemploi;

        return $this;
    }

    /**
     * Get role.
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role.
     *
     * @param string|null $role
     *
     * @return AnrAgent
     */
    public function setRole($role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get numemploye.
     *
     * @return string|null
     */
    public function getNumemploye()
    {
        return $this->numemploye;
    }

    /**
     * Set numemploye.
     *
     * @param string|null $numemploye
     *
     * @return AnrAgent
     */
    public function setNumemploye($numemploye = null)
    {
        $this->numemploye = $numemploye;

        return $this;
    }

    /**
     * Get typeemploye.
     *
     * @return string|null
     */
    public function getTypeemploye()
    {
        return $this->typeemploye;
    }

    /**
     * Set typeemploye.
     *
     * @param string|null $typeemploye
     *
     * @return AnrAgent
     */
    public function setTypeemploye($typeemploye = null)
    {
        $this->typeemploye = $typeemploye;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string|null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom.
     *
     * @param string|null $prenom
     *
     * @return AnrAgent
     */
    public function setPrenom($prenom = null)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string|null
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mail.
     *
     * @param string|null $mail
     *
     * @return AnrAgent
     */
    public function setMail($mail = null)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get idresponsable.
     *
     * @return string|null
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }

    /**
     * Set idresponsable.
     *
     * @param string|null $idresponsable
     *
     * @return AnrAgent
     */
    public function setIdresponsable($idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }

    /**
     * Get nomresponsable.
     *
     * @return string|null
     */
    public function getNomresponsable()
    {
        return $this->nomresponsable;
    }

    /**
     * Set nomresponsable.
     *
     * @param string|null $nomresponsable
     *
     * @return AnrAgent
     */
    public function setNomresponsable($nomresponsable = null)
    {
        $this->nomresponsable = $nomresponsable;

        return $this;
    }

    /**
     * Get mobile.
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set mobile.
     *
     * @param string|null $mobile
     *
     * @return AnrAgent
     */
    public function setMobile($mobile = null)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get codeorganisme.
     *
     * @return string|null
     */
    public function getCodeorganisme()
    {
        return $this->codeorganisme;
    }

    /**
     * Set codeorganisme.
     *
     * @param string|null $codeorganisme
     *
     * @return AnrAgent
     */
    public function setCodeorganisme($codeorganisme = null)
    {
        $this->codeorganisme = $codeorganisme;

        return $this;
    }

    /**
     * Get codecaisse.
     *
     * @return string|null
     */
    public function getCodecaisse()
    {
        return $this->codecaisse;
    }

    /**
     * Set codecaisse.
     *
     * @param string|null $codecaisse
     *
     * @return AnrAgent
     */
    public function setCodecaisse($codecaisse = null)
    {
        $this->codecaisse = $codecaisse;

        return $this;
    }

    /**
     * Get nomorganisme.
     *
     * @return string|null
     */
    public function getNomorganisme()
    {
        return $this->nomorganisme;
    }

    /**
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return AnrAgent
     */
    public function setNomorganisme($nomorganisme = null)
    {
        $this->nomorganisme = $nomorganisme;

        return $this;
    }

    /**
     * Get contact.
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact.
     *
     * @param string|null $contact
     *
     * @return AnrAgent
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get civilite.
     *
     * @return string|null
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set civilite.
     *
     * @param string|null $civilite
     *
     * @return AnrAgent
     */
    public function setCivilite($civilite = null)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get idsite.
     *
     * @return string|null
     */
    public function getIdsite()
    {
        return $this->idsite;
    }

    /**
     * Set idsite.
     *
     * @param string|null $idsite
     *
     * @return AnrAgent
     */
    public function setIdsite($idsite = null)
    {
        $this->idsite = $idsite;

        return $this;
    }

    /**
     * Get nomsite.
     *
     * @return string|null
     */
    public function getNomsite()
    {
        return $this->nomsite;
    }

    /**
     * Set nomsite.
     *
     * @param string|null $nomsite
     *
     * @return AnrAgent
     */
    public function setNomsite($nomsite = null)
    {
        $this->nomsite = $nomsite;

        return $this;
    }

    /**
     * Get identite.
     *
     * @return string|null
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * Set identite.
     *
     * @param string|null $identite
     *
     * @return AnrAgent
     */
    public function setIdentite($identite = null)
    {
        $this->identite = $identite;

        return $this;
    }

    /**
     * Get nomentite.
     *
     * @return string|null
     */
    public function getNomentite()
    {
        return $this->nomentite;
    }

    /**
     * Set nomentite.
     *
     * @param string|null $nomentite
     *
     * @return AnrAgent
     */
    public function setNomentite($nomentite = null)
    {
        $this->nomentite = $nomentite;

        return $this;
    }

    /**
     * Get nomentabrege.
     *
     * @return string|null
     */
    public function getNomentabrege()
    {
        return $this->nomentabrege;
    }

    /**
     * Set nomentabrege.
     *
     * @param string|null $nomentabrege
     *
     * @return AnrAgent
     */
    public function setNomentabrege($nomentabrege = null)
    {
        $this->nomentabrege = $nomentabrege;

        return $this;
    }

    /**
     * Get sigleent.
     *
     * @return string|null
     */
    public function getSigleent()
    {
        return $this->sigleent;
    }

    /**
     * Set sigleent.
     *
     * @param string|null $sigleent
     *
     * @return AnrAgent
     */
    public function setSigleent($sigleent = null)
    {
        $this->sigleent = $sigleent;

        return $this;
    }

    /**
     * Get listerouge.
     *
     * @return string|null
     */
    public function getListerouge()
    {
        return $this->listerouge;
    }

    /**
     * Set listerouge.
     *
     * @param string|null $listerouge
     *
     * @return AnrAgent
     */
    public function setListerouge($listerouge = null)
    {
        $this->listerouge = $listerouge;

        return $this;
    }

    /**
     * Get typeagent.
     *
     * @return string|null
     */
    public function getTypeagent()
    {
        return $this->typeagent;
    }

    /**
     * Set typeagent.
     *
     * @param string|null $typeagent
     *
     * @return AnrAgent
     */
    public function setTypeagent($typeagent = null)
    {
        $this->typeagent = $typeagent;

        return $this;
    }

    /**
     * Get finvaliditeentree.
     *
     * @return string|null
     */
    public function getFinvaliditeentree()
    {
        return $this->finvaliditeentree;
    }

    /**
     * Set finvaliditeentree.
     *
     * @param string|null $finvaliditeentree
     *
     * @return AnrAgent
     */
    public function setFinvaliditeentree($finvaliditeentree = null)
    {
        $this->finvaliditeentree = $finvaliditeentree;

        return $this;
    }

    /**
     * Get abslongueduree.
     *
     * @return string|null
     */
    public function getAbslongueduree()
    {
        return $this->abslongueduree;
    }

    /**
     * Set abslongueduree.
     *
     * @param string|null $abslongueduree
     *
     * @return AnrAgent
     */
    public function setAbslongueduree($abslongueduree = null)
    {
        $this->abslongueduree = $abslongueduree;

        return $this;
    }

    /**
     * Get entreeinvalidee.
     *
     * @return string|null
     */
    public function getEntreeinvalidee()
    {
        return $this->entreeinvalidee;
    }

    /**
     * Set entreeinvalidee.
     *
     * @param string|null $entreeinvalidee
     *
     * @return AnrAgent
     */
    public function setEntreeinvalidee($entreeinvalidee = null)
    {
        $this->entreeinvalidee = $entreeinvalidee;

        return $this;
    }

    /**
     * Get idorganisme.
     *
     * @return string|null
     */
    public function getIdorganisme()
    {
        return $this->idorganisme;
    }

    /**
     * Set idorganisme.
     *
     * @param string|null $idorganisme
     *
     * @return AnrAgent
     */
    public function setIdorganisme($idorganisme = null)
    {
        $this->idorganisme = $idorganisme;

        return $this;
    }

    /**
     * Get typeorganisme.
     *
     * @return string|null
     */
    public function getTypeorganisme()
    {
        return $this->typeorganisme;
    }

    /**
     * Set typeorganisme.
     *
     * @param string|null $typeorganisme
     *
     * @return AnrAgent
     */
    public function setTypeorganisme($typeorganisme = null)
    {
        $this->typeorganisme = $typeorganisme;

        return $this;
    }

    /**
     * Get listerougephoto.
     *
     * @return string|null
     */
    public function getListerougephoto()
    {
        return $this->listerougephoto;
    }

    /**
     * Set listerougephoto.
     *
     * @param string|null $listerougephoto
     *
     * @return AnrAgent
     */
    public function setListerougephoto($listerougephoto = null)
    {
        $this->listerougephoto = $listerougephoto;

        return $this;
    }

    /**
     * Get listeorange.
     *
     * @return string|null
     */
    public function getListeorange()
    {
        return $this->listeorange;
    }

    /**
     * Set listeorange.
     *
     * @param string|null $listeorange
     *
     * @return AnrAgent
     */
    public function setListeorange($listeorange = null)
    {
        $this->listeorange = $listeorange;

        return $this;
    }

    /**
     * Get listejaune.
     *
     * @return string|null
     */
    public function getListejaune()
    {
        return $this->listejaune;
    }

    /**
     * Set listejaune.
     *
     * @param string|null $listejaune
     *
     * @return AnrAgent
     */
    public function setListejaune($listejaune = null)
    {
        $this->listejaune = $listejaune;

        return $this;
    }

    /**
     * Get parking.
     *
     * @return string|null
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set parking.
     *
     * @param string|null $parking
     *
     * @return AnrAgent
     */
    public function setParking($parking = null)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get publication.
     *
     * @return string|null
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set publication.
     *
     * @param string|null $publication
     *
     * @return AnrAgent
     */
    public function setPublication($publication = null)
    {
        $this->publication = $publication;

        return $this;
    }
}
