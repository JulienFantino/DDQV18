<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent", indexes={@ORM\Index(name="IDX_268B9C9D5D3AF914", columns={"id_organisme"}), @ORM\Index(name="IDX_268B9C9DDD124DBA", columns={"id_ddq_contrat"}), @ORM\Index(name="IDX_268B9C9D3C1EADCA", columns={"id_entite"}), @ORM\Index(name="IDX_268B9C9DE26315E6", columns={"id_site"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgentRepository")
 */
class Agent
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, options={"comment"="PK_Agent"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="agent_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomium", type="string", length=128, nullable=false)
     */
    private $nomium;

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
     * @ORM\Column(name="nomsite", type="string", length=64, nullable=true)
     */
    private $nomsite;

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
     * @var string|null
     *
     * @ORM\Column(name="exceptionddq", type="string", length=16, nullable=true)
     */
    private $exceptionddq;

    /**
     * @var bool
     *
     * @ORM\Column(name="compteactif", type="boolean", nullable=false)
     */
    private $compteactif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statutparking", type="string", length=16, nullable=true)
     */
    private $statutparking;

    /**
     * @var \AppBundle\Entity\Organisme
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Organisme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisme", referencedColumnName="id")
     * })
     */
    private $idOrganisme;

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
     * @var \AppBundle\Entity\Entite
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entite", referencedColumnName="id")
     * })
     */
    private $idEntite;

    /**
     * @var \AppBundle\Entity\Site
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_site", referencedColumnName="id")
     * })
     */
    private $idSite;
    /**
     * @var bool|null
     *
     * @ORM\Column(name="placeparking", type="boolean", nullable=true)
     */
    private $placeparking;


    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomium.
     *
     * @param string $nomium
     *
     * @return Agent
     */
    public function setNomium($nomium)
    {
        $this->nomium = $nomium;

        return $this;
    }

    /**
     * Get nomium.
     *
     * @return string
     */
    public function getNomium()
    {
        return $this->nomium;
    }

    /**
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Agent
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

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
     * Set nomcomplet.
     *
     * @param string|null $nomcomplet
     *
     * @return Agent
     */
    public function setNomcomplet($nomcomplet = null)
    {
        $this->nomcomplet = $nomcomplet;

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
     * Set tel.
     *
     * @param string|null $tel
     *
     * @return Agent
     */
    public function setTel($tel = null)
    {
        $this->tel = $tel;

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
     * Set numabrege.
     *
     * @param string|null $numabrege
     *
     * @return Agent
     */
    public function setNumabrege($numabrege = null)
    {
        $this->numabrege = $numabrege;

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
     * Set etablissement.
     *
     * @param string|null $etablissement
     *
     * @return Agent
     */
    public function setEtablissement($etablissement = null)
    {
        $this->etablissement = $etablissement;

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
     * Set libelleemploi.
     *
     * @param string|null $libelleemploi
     *
     * @return Agent
     */
    public function setLibelleemploi($libelleemploi = null)
    {
        $this->libelleemploi = $libelleemploi;

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
     * Set codeemploi.
     *
     * @param string|null $codeemploi
     *
     * @return Agent
     */
    public function setCodeemploi($codeemploi = null)
    {
        $this->codeemploi = $codeemploi;

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
     * Set role.
     *
     * @param string|null $role
     *
     * @return Agent
     */
    public function setRole($role = null)
    {
        $this->role = $role;

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
     * Set numemploye.
     *
     * @param string|null $numemploye
     *
     * @return Agent
     */
    public function setNumemploye($numemploye = null)
    {
        $this->numemploye = $numemploye;

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
     * Set typeemploye.
     *
     * @param string|null $typeemploye
     *
     * @return Agent
     */
    public function setTypeemploye($typeemploye = null)
    {
        $this->typeemploye = $typeemploye;

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
     * Set prenom.
     *
     * @param string|null $prenom
     *
     * @return Agent
     */
    public function setPrenom($prenom = null)
    {
        $this->prenom = $prenom;

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
     * Set mail.
     *
     * @param string|null $mail
     *
     * @return Agent
     */
    public function setMail($mail = null)
    {
        $this->mail = $mail;

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
     * Set idresponsable.
     *
     * @param string|null $idresponsable
     *
     * @return Agent
     */
    public function setIdresponsable($idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

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
     * Set nomresponsable.
     *
     * @param string|null $nomresponsable
     *
     * @return Agent
     */
    public function setNomresponsable($nomresponsable = null)
    {
        $this->nomresponsable = $nomresponsable;

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
     * Set mobile.
     *
     * @param string|null $mobile
     *
     * @return Agent
     */
    public function setMobile($mobile = null)
    {
        $this->mobile = $mobile;

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
     * Set codeorganisme.
     *
     * @param string|null $codeorganisme
     *
     * @return Agent
     */
    public function setCodeorganisme($codeorganisme = null)
    {
        $this->codeorganisme = $codeorganisme;

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
     * Set codecaisse.
     *
     * @param string|null $codecaisse
     *
     * @return Agent
     */
    public function setCodecaisse($codecaisse = null)
    {
        $this->codecaisse = $codecaisse;

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
     * Set nomorganisme.
     *
     * @param string|null $nomorganisme
     *
     * @return Agent
     */
    public function setNomorganisme($nomorganisme = null)
    {
        $this->nomorganisme = $nomorganisme;

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
     * Set contact.
     *
     * @param string|null $contact
     *
     * @return Agent
     */
    public function setContact($contact = null)
    {
        $this->contact = $contact;

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
     * Set civilite.
     *
     * @param string|null $civilite
     *
     * @return Agent
     */
    public function setCivilite($civilite = null)
    {
        $this->civilite = $civilite;

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
     * Set nomsite.
     *
     * @param string|null $nomsite
     *
     * @return Agent
     */
    public function setNomsite($nomsite = null)
    {
        $this->nomsite = $nomsite;

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
     * Set nomentite.
     *
     * @param string|null $nomentite
     *
     * @return Agent
     */
    public function setNomentite($nomentite = null)
    {
        $this->nomentite = $nomentite;

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
     * Set nomentabrege.
     *
     * @param string|null $nomentabrege
     *
     * @return Agent
     */
    public function setNomentabrege($nomentabrege = null)
    {
        $this->nomentabrege = $nomentabrege;

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
     * Set sigleent.
     *
     * @param string|null $sigleent
     *
     * @return Agent
     */
    public function setSigleent($sigleent = null)
    {
        $this->sigleent = $sigleent;

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
     * Set listerouge.
     *
     * @param string|null $listerouge
     *
     * @return Agent
     */
    public function setListerouge($listerouge = null)
    {
        $this->listerouge = $listerouge;

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
     * Set typeagent.
     *
     * @param string|null $typeagent
     *
     * @return Agent
     */
    public function setTypeagent($typeagent = null)
    {
        $this->typeagent = $typeagent;

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
     * Set finvaliditeentree.
     *
     * @param string|null $finvaliditeentree
     *
     * @return Agent
     */
    public function setFinvaliditeentree($finvaliditeentree = null)
    {
        $this->finvaliditeentree = $finvaliditeentree;

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
     * Set abslongueduree.
     *
     * @param string|null $abslongueduree
     *
     * @return Agent
     */
    public function setAbslongueduree($abslongueduree = null)
    {
        $this->abslongueduree = $abslongueduree;

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
     * Set entreeinvalidee.
     *
     * @param string|null $entreeinvalidee
     *
     * @return Agent
     */
    public function setEntreeinvalidee($entreeinvalidee = null)
    {
        $this->entreeinvalidee = $entreeinvalidee;

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
     * Set typeorganisme.
     *
     * @param string|null $typeorganisme
     *
     * @return Agent
     */
    public function setTypeorganisme($typeorganisme = null)
    {
        $this->typeorganisme = $typeorganisme;

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
     * Set listerougephoto.
     *
     * @param string|null $listerougephoto
     *
     * @return Agent
     */
    public function setListerougephoto($listerougephoto = null)
    {
        $this->listerougephoto = $listerougephoto;

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
     * Set listeorange.
     *
     * @param string|null $listeorange
     *
     * @return Agent
     */
    public function setListeorange($listeorange = null)
    {
        $this->listeorange = $listeorange;

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
     * Set listejaune.
     *
     * @param string|null $listejaune
     *
     * @return Agent
     */
    public function setListejaune($listejaune = null)
    {
        $this->listejaune = $listejaune;

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
     * Set parking.
     *
     * @param string|null $parking
     *
     * @return Agent
     */
    public function setParking($parking = null)
    {
        $this->parking = $parking;

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
     * Set publication.
     *
     * @param string|null $publication
     *
     * @return Agent
     */
    public function setPublication($publication = null)
    {
        $this->publication = $publication;

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
     * Set exceptionddq.
     *
     * @param string|null $exceptionddq
     *
     * @return Agent
     */
    public function setExceptionddq($exceptionddq = null)
    {
        $this->exceptionddq = $exceptionddq;

        return $this;
    }

    /**
     * Get exceptionddq.
     *
     * @return string|null
     */
    public function getExceptionddq()
    {
        return $this->exceptionddq;
    }

    /**
     * Set compteactif.
     *
     * @param bool $compteactif
     *
     * @return Agent
     */
    public function setCompteactif($compteactif)
    {
        $this->compteactif = $compteactif;

        return $this;
    }

    /**
     * Get compteactif.
     *
     * @return bool
     */
    public function getCompteactif()
    {
        return $this->compteactif;
    }

    /**
     * Set statutparking.
     *
     * @param string|null $statutparking
     *
     * @return Agent
     */
    public function setStatutparking($statutparking = null)
    {
        $this->statutparking = $statutparking;

        return $this;
    }

    /**
     * Get statutparking.
     *
     * @return string|null
     */
    public function getStatutparking()
    {
        return $this->statutparking;
    }

    /**
     * Set idOrganisme.
     *
     * @param \AppBundle\Entity\Organisme|null $idOrganisme
     *
     * @return Agent
     */
    public function setIdOrganisme(\AppBundle\Entity\Organisme $idOrganisme = null)
    {
        $this->idOrganisme = $idOrganisme;

        return $this;
    }

    /**
     * Get idOrganisme.
     *
     * @return \AppBundle\Entity\Organisme|null
     */
    public function getIdOrganisme()
    {
        return $this->idOrganisme;
    }

    /**
     * Set idDdqContrat.
     *
     * @param \AppBundle\Entity\DdqContrat|null $idDdqContrat
     *
     * @return Agent
     */
    public function setIdDdqContrat(\AppBundle\Entity\DdqContrat $idDdqContrat = null)
    {
        $this->idDdqContrat = $idDdqContrat;

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
     * Set idEntite.
     *
     * @param \AppBundle\Entity\Entite|null $idEntite
     *
     * @return Agent
     */
    public function setIdEntite(\AppBundle\Entity\Entite $idEntite = null)
    {
        $this->idEntite = $idEntite;

        return $this;
    }

    /**
     * Get idEntite.
     *
     * @return \AppBundle\Entity\Entite|null
     */
    public function getIdEntite()
    {
        return $this->idEntite;
    }

    /**
     * Set idSite.
     *
     * @param \AppBundle\Entity\Site|null $idSite
     *
     * @return Agent
     */
    public function setIdSite(\AppBundle\Entity\Site $idSite = null)
    {
        $this->idSite = $idSite;

        return $this;
    }

    /**
     * Get idSite.
     *
     * @return \AppBundle\Entity\Site|null
     */
    public function getIdSite()
    {
        return $this->idSite;
    }

    /**
     * Set placeparking.
     *
     * @param string $placeparking
     *
     * @return Agent
     */
    public function setPlaceparking($placeparking)
    {
        $this->placeparking = $placeparking;

        return $this;
    }

    /**
     * Get placeparking.
     *
     * @return string
     */
    public function getPlaceparking()
    {
        return $this->placeparking;
    }
}
