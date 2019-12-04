<?php
namespace CNAMTS\PHPK\WSClientBundle\Anr;

class Agent
{
    private $sigleEntResponsable;
    private $idEntiteResponsable;
    private $idAgent;
    private $nom;
    private $nomComplet;
    private $tel;
    private $numabrege;
    private $fax;
    private $etablissement;
    private $libelleEmploi;
    private $codeEmploi;
    private $nomAgent;
    private $role;
    private $numEmploye;
    private $typeEmploye;
    private $prenom;
    private $mail;
    private $idResponsable;
    private $nomResponsable;
    private $mobile;
    private $codeOrganisme;
    private $codeCaisse;
    private $nomOrganisme;
    private $bureau;
    private $contact;
    private $prenomAgent;
    private $civilite;
    private $idSite;
    private $nomSite;
    private $idSite2;
    private $idAutreSite;
    private $telSite2;
    private $faxSite2;
    private $bureauSite2;
    private $idEntite;
    private $nomEntite;
    private $nomEntAbrege;
    private $sigleEnt;
    private $listeRouge;
    private $typeAgent;
    private $finValiditeEntree;
    private $absLongueDuree;
    private $entreeInvalidee;
    private $personnePhysique;
    private $aliasMail;
    private $idOrganisme;
    private $typeOrganisme;
    private $cheminPhoto;
    private $listeRougePhoto;
    private $activite;
    private $lienAutreOrganisme;
    private $listeOrange;
    private $listejaune;
    private $mailComp;
    private $publication;
    private $parking;
    private $donneescomp;

    /**
     * @param type $criteria
     *
     * @return boolean
     */
    public static function isValidCriteria($criteria)
    {
        $retour = true;
        $validCriteria = self::getValidCriteria();
        foreach ($criteria as $key => $value) {
            if (!in_array($key, $validCriteria)) {
                $retour = false;
                break;
            }
        }

        return $retour;
    }

    /**
     * @return type
     */
    public static function getValidCriteria()
    {
        return array(
            'numSiret',
            'idAgent',
            'nomAgent',
            'prenomAgent',
            'typeAgent',
            'nomResponsable',
            'codeEmploi',
            'libelleEmploi',
            'role',
            'tel',
            'numAbrege',
            'civilite',
            'idEntite',
            'mailAgent',
            'sigleEnt',
            'idSite',
        );
    }

    /**
     * @return type
     */
    public static function getDefaultsAttributs()
    {
        return array(
            'sigleentresponsable',
            'identiteresponsable',
            'idagent',
            'nom',
            'nomcomplet',
            'tel',
            'numabrege',
            'fax',
            'etablissement',
            'libelleemploi',
            'codeemploi',
            'nomagent',
            'role',
            'numemploye',
            'typeemploye',
            'prenom',
            'mail',
            'idresponsable',
            'nomresponsable',
            'mobile',
            'codeorganisme',
            'codecaisse',
            'nomorganisme',
            'bureau',
            'contact',
            'prenomagent',
            'civilite',
            'idsite',
            'nomsite',
            'idsite2',
            'idautresite',
            'telsite2',
            'faxsite2',
            'bureausite2',
            'identite',
            'nomentite',
            'nomentabrege',
            'sigleent',
            'listerouge',
            'typeagent',
            'finvaliditeentree',
            'abslongueduree',
            'entreeinvalidee',
            'personnephysique',
            'aliasmail',
            'idorganisme',
            'typeorganisme',
            'cheminphoto',
            'listerougephoto',
            'activite',
            'lienautreorganisme',
            'listeorange',
            'listejaune',
            'mailcomp',
            'publication',
            'parking',
            'donneescomp',
        );
    }

    public static function parseResponse($response)
    {
        $agent = new Agent();
        $agent->setSigleEntResponsable(isset($response->sigleentresponsable) ? $response->sigleentresponsable : null)
            ->setIdEntiteResponsable(isset($response->identiteresponsable) ? $response->identiteresponsable : null)
            ->setIdAgent(isset($response->idagent) ? $response->idagent : null)
            ->setNom(isset($response->nom) ? $response->nom : null)
            ->setNomComplet(isset($response->nomcomplet) ? $response->nomcomplet : null)
            ->setTel(isset($response->tel) ? $response->tel : null)
            ->setNumabrege(isset($response->numabrege) ? $response->numabrege : null)
            ->setFax(isset($response->fax) ? $response->fax : null)
            ->setEtablissement(isset($response->etablissement) ? $response->etablissement : null)
            ->setLibelleEmploi(isset($response->libelleemploi) ? $response->libelleemploi : null)
            ->setCodeEmploi(isset($response->codeemploi) ? $response->codeemploi : null)
            ->setNomAgent(isset($response->role) ? $response->role : null)
            ->setNumEmploye(isset($response->numemploye) ? $response->numemploye : null)
            ->setTypeEmploye(isset($response->typeemploye) ? $response->typeemploye : null)
            ->setPrenom(isset($response->prenom) ? $response->prenom : null)
            ->setMail(isset($response->mail) ? $response->mail : null)
            ->setIdResponsable(isset($response->idresponsable) ? $response->idresponsable : null)
            ->setNomResponsable(isset($response->nomresponsable) ? $response->nomresponsable : null)
            ->setMobile(isset($response->mobile) ? $response->mobile : null)
            ->setCodeOrganisme(isset($response->codeorganisme) ? $response->codeorganisme : null)
            ->setCodeCaisse(isset($response->codecaisse) ? $response->codecaisse : null)
            ->setNomOrganisme(isset($response->nomorganisme) ? $response->nomorganisme : null)
            ->setBureau(isset($response->bureau) ? $response->bureau : null)
            ->setContact(isset($response->contact) ? $response->contact : null)
            ->setPrenomAgent(isset($response->prenomagent) ? $response->prenomagent : null)
            ->setCivilite(isset($response->civilite) ? $response->civilite : null)
            ->setIdSite(isset($response->idsite) ? $response->idsite : null)
            ->setNomSite(isset($response->nomsite) ? $response->nomsite : null)
            ->setIdSite2(isset($response->idsite2) ? $response->idsite2 : null)
            ->setIdAutreSite(isset($response->idautresite) ? $response->idautresite : null)
            ->setTelSite2(isset($response->telsite2) ? $response->telsite2 : null)
            ->setFaxSite2(isset($response->faxsite2) ? $response->faxsite2 : null)
            ->setBureauSite2(isset($response->bureausite2) ? $response->bureausite2 : null)
            ->setIdEntite(isset($response->identite) ? $response->identite : null)
            ->setNomEntite(isset($response->nomentite) ? $response->nomentite : null)
            ->setNomEntAbrege(isset($response->nomentabrege) ? $response->nomentabrege : null)
            ->setSigleEnt(isset($response->sigleent) ? $response->sigleent : null)
            ->setListeRouge(isset($response->listerouge) ? $response->listerouge : null)
            ->setTypeAgent(isset($response->typeagent) ? $response->typeagent : null)
            ->setFinValiditeEntree(isset($response->finvaliditeentree) ? $response->finvaliditeentree : null)
            ->setAbsLongueDuree(isset($response->abslongueduree) ? $response->abslongueduree : null)
            ->setEntreeInvalidee(isset($response->entreeinvalidee) ? $response->entreeinvalidee : null)
            ->setPersonnePhysique(isset($response->personnephysique) ? $response->personnephysique : null)
            ->setAliasMail(isset($response->aliasmail) ? $response->aliasmail : null)
            ->setIdOrganisme(isset($response->idorganisme) ? $response->idorganisme : null)
            ->setTypeOrganisme(isset($response->typeorganisme) ? $response->typeorganisme : null)
            ->setCheminPhoto(isset($response->cheminphoto) ? $response->cheminphoto : null)
            ->setListeRougePhoto(isset($response->listerougephoto) ? $response->listerougephoto : null)
            ->setActivite(isset($response->activite) ? $response->activite : null)
            ->setLienAutreOrganisme(isset($response->lienautreorganisme) ? $response->lienautreorganisme : null)
            ->setListeOrange(isset($response->listeorange) ? $response->listeorange : null)
            ->setListejaune(isset($response->listejaune) ? $response->listejaune : null)
            ->setMailComp(isset($response->mailcomp) ? $response->mailcomp : null)
            ->setPublication(isset($response->publication) ? $response->publication : null)
            ->setParking(isset($response->parking) ? $response->parking : null)
            ->setDonneescomp(isset($response->donneescomp) ? $response->donneescomp : null);

        return $agent;
    }

    public function getSigleEntResponsable()
    {
        return $this->sigleEntResponsable;
    }

    public function getIdEntiteResponsable()
    {
        return $this->idEntiteResponsable;
    }

    public function getIdAgent()
    {
        return $this->idAgent;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getNumabrege()
    {
        return $this->numabrege;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function getEtablissement()
    {
        return $this->etablissement;
    }

    public function getLibelleEmploi()
    {
        return $this->libelleEmploi;
    }

    public function getCodeEmploi()
    {
        return $this->codeEmploi;
    }

    public function getNomAgent()
    {
        return $this->nomAgent;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getNumEmploye()
    {
        return $this->numEmploye;
    }

    public function getTypeEmploye()
    {
        return $this->typeEmploye;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getIdResponsable($complet = false)
    {
        $idResponsable = $this->idResponsable;
        if (!$complet) {
            preg_match("/^uid=(.*),ou=.*,o=.*/", $idResponsable, $matches);
            if (isset($matches[1])) {
                $idResponsable = $matches[1];
            }
        }
        return $idResponsable;
    }

    public function getNomResponsable()
    {
        return $this->nomResponsable;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getCodeOrganisme()
    {
        return $this->codeOrganisme;
    }

    public function getCodeCaisse()
    {
        return $this->codeCaisse;
    }

    public function getNomOrganisme()
    {
        return $this->nomOrganisme;
    }

    public function getBureau()
    {
        return $this->bureau;
    }

    public function getContact($complet = false)
    {
        $contact = $this->contact;
        if (!$complet) {
            preg_match("/^uid=(.*),ou=.*,o=.*/", $contact, $matches);
            if (isset($matches[1])) {
                $contact = $matches[1];
            }
        }
        return $contact;
    }

    public function getPrenomAgent()
    {
        return $this->prenomAgent;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }

    public function getIdSite($complet = false)
    {
        $idSite = $this->idSite;
        if (!$complet) {
            preg_match("/^o=(.*),ou=.*,o=.*/", $idSite, $matches);
            if (isset($matches[1])) {
                $idSite = $matches[1];
            }
        }
        return $idSite;
    }

    public function getNomSite()
    {
        return $this->nomSite;
    }

    public function getIdSite2()
    {
        return $this->idSite2;
    }

    public function getIdAutreSite()
    {
        return $this->idAutreSite;
    }

    public function getTelSite2()
    {
        return $this->telSite2;
    }

    public function getFaxSite2()
    {
        return $this->faxSite2;
    }

    public function getBureauSite2()
    {
        return $this->bureauSite2;
    }

    public function getIdEntite($complet = false)
    {
        $idEntite = $this->idEntite;
        if (!$complet) {
            preg_match("/^o=(.*), ou=.*, o=.*/", $idEntite, $matches);
            if (isset($matches[1])) {
                $idEntite = $matches[1];
            }
        }
        return $idEntite;
    }

    public function getNomEntite()
    {
        return $this->nomEntite;
    }

    public function getNomEntAbrege()
    {
        return $this->nomEntAbrege;
    }

    public function getSigleEnt()
    {
        return $this->sigleEnt;
    }

    public function getListeRouge()
    {
        return $this->listeRouge;
    }

    public function getTypeAgent()
    {
        return $this->typeAgent;
    }

    public function getFinValiditeEntree()
    {
        return $this->finValiditeEntree;
    }

    public function getAbsLongueDuree()
    {
        return $this->absLongueDuree;
    }

    public function getEntreeInvalidee()
    {
        return $this->entreeInvalidee;
    }

    public function getPersonnePhysique()
    {
        return $this->personnePhysique;
    }

    public function getAliasMail()
    {
        return $this->aliasMail;
    }

    public function getIdOrganisme($complet = false)
    {
        $idOrganisme = $this->idOrganisme;
        if (!$complet) {
            preg_match("/^o=(.*),ou=.*,o=.*/", $idOrganisme, $matches);
            if (isset($matches[1])) {
                $idOrganisme = $matches[1];
            }
        }
        return $idOrganisme;
    }

    public function getTypeOrganisme()
    {
        return $this->typeOrganisme;
    }

    public function getCheminPhoto()
    {
        return $this->cheminPhoto;
    }

    public function getListeRougePhoto()
    {
        return $this->listeRougePhoto;
    }

    public function getActivite()
    {
        return $this->activite;
    }

    public function getLienAutreOrganisme()
    {
        return $this->lienAutreOrganisme;
    }

    public function getListeOrange()
    {
        return $this->listeOrange;
    }

    public function getListejaune()
    {
        return $this->listejaune;
    }

    public function getMailComp()
    {
        return $this->mailComp;
    }

    public function getPublication()
    {
        return $this->Publication;
    }

    public function getParking()
    {
        return $this->parking;
    }

    public function getDonneescomp()
    {
        return $this->donneescomp;
    }

    protected function setSigleEntResponsable($sigleEntResponsable)
    {
        $this->sigleEntResponsable = $sigleEntResponsable;

        return $this;
    }

    protected function setIdEntiteResponsable($idEntiteResponsable)
    {
        $this->idEntiteResponsable = $idEntiteResponsable;

        return $this;
    }

    protected function setIdAgent($idAgent)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    protected function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    protected function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    protected function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    protected function setNumabrege($numabrege)
    {
        $this->numabrege = $numabrege;

        return $this;
    }

    protected function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    protected function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    protected function setLibelleEmploi($libelleEmploi)
    {
        $this->libelleEmploi = $libelleEmploi;

        return $this;
    }

    protected function setCodeEmploi($codeEmploi)
    {
        $this->codeEmploi = $codeEmploi;

        return $this;
    }

    protected function setNomAgent($nomAgent)
    {
        $this->nomAgent = $nomAgent;

        return $this;
    }

    protected function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    protected function setNumEmploye($numEmploye)
    {
        $this->numEmploye = $numEmploye;

        return $this;
    }

    protected function setTypeEmploye($typeEmploye)
    {
        $this->typeEmploye = $typeEmploye;

        return $this;
    }

    protected function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    protected function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    protected function setIdResponsable($idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    protected function setNomResponsable($nomResponsable)
    {
        $this->nomResponsable = $nomResponsable;

        return $this;
    }

    protected function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    protected function setCodeOrganisme($codeOrganisme)
    {
        $this->codeOrganisme = $codeOrganisme;

        return $this;
    }

    protected function setCodeCaisse($codeCaisse)
    {
        $this->codeCaisse = $codeCaisse;

        return $this;
    }

    protected function setNomOrganisme($nomOrganisme)
    {
        $this->nomOrganisme = $nomOrganisme;

        return $this;
    }

    protected function setBureau($bureau)
    {
        $this->bureau = $bureau;

        return $this;
    }

    protected function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    protected function setPrenomAgent($prenomAgent)
    {
        $this->prenomAgent = $prenomAgent;

        return $this;
    }

    protected function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    protected function setIdSite($idSite)
    {
        $this->idSite = $idSite;

        return $this;
    }

    protected function setNomSite($nomSite)
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    protected function setIdSite2($idSite2)
    {
        $this->idSite2 = $idSite2;

        return $this;
    }

    protected function setIdAutreSite($idAutreSite)
    {
        $this->idAutreSite = $idAutreSite;

        return $this;
    }

    protected function setTelSite2($telSite2)
    {
        $this->telSite2 = $telSite2;

        return $this;
    }

    protected function setFaxSite2($faxSite2)
    {
        $this->faxSite2 = $faxSite2;

        return $this;
    }

    protected function setBureauSite2($bureauSite2)
    {
        $this->bureauSite2 = $bureauSite2;

        return $this;
    }

    protected function setIdEntite($idEntite)
    {
        $this->idEntite = $idEntite;

        return $this;
    }

    protected function setNomEntite($nomEntite)
    {
        $this->nomEntite = $nomEntite;

        return $this;
    }

    protected function setNomEntAbrege($nomEntAbrege)
    {
        $this->nomEntAbrege = $nomEntAbrege;

        return $this;
    }

    protected function setSigleEnt($sigleEnt)
    {
        $this->sigleEnt = $sigleEnt;

        return $this;
    }

    protected function setListeRouge($listeRouge)
    {
        $this->listeRouge = $listeRouge;

        return $this;
    }

    protected function setTypeAgent($typeAgent)
    {
        $this->typeAgent = $typeAgent;

        return $this;
    }

    protected function setFinValiditeEntree($finValiditeEntree)
    {
        $this->finValiditeEntree = $finValiditeEntree;

        return $this;
    }

    protected function setAbsLongueDuree($absLongueDuree)
    {
        $this->absLongueDuree = $absLongueDuree;

        return $this;
    }

    protected function setEntreeInvalidee($entreeInvalidee)
    {
        $this->entreeInvalidee = $entreeInvalidee;

        return $this;
    }

    protected function setPersonnePhysique($personnePhysique)
    {
        $this->personnePhysique = $personnePhysique;

        return $this;
    }

    protected function setAliasMail($aliasMail)
    {
        $this->aliasMail = $aliasMail;

        return $this;
    }

    protected function setIdOrganisme($idOrganisme)
    {
        $this->idOrganisme = $idOrganisme;

        return $this;
    }

    protected function setTypeOrganisme($typeOrganisme)
    {
        $this->typeOrganisme = $typeOrganisme;

        return $this;
    }

    protected function setCheminPhoto($cheminPhoto)
    {
        $this->cheminPhoto = $cheminPhoto;

        return $this;
    }

    protected function setListeRougePhoto($listeRougePhoto)
    {
        $this->listeRougePhoto = $listeRougePhoto;

        return $this;
    }

    protected function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    protected function setLienAutreOrganisme($lienAutreOrganisme)
    {
        $this->lienAutreOrganisme = $lienAutreOrganisme;

        return $this;
    }

    protected function setListeOrange($listeOrange)
    {
        $this->listeOrange = $listeOrange;

        return $this;
    }

    protected function setListejaune($listejaune)
    {
        $this->listejaune = $listejaune;

        return $this;
    }

    protected function setMailComp($mailComp)
    {
        $this->mailComp = $mailComp;

        return $this;
    }

    protected function setPublication($Publication)
    {
        $this->Publication = $Publication;

        return $this;
    }

    protected function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    protected function setDonneescomp($donneescomp)
    {
        $this->donneescomp = $donneescomp;

        return $this;
    }
}
