<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agent extends \AppBundle\Entity\Agent implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];


    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__ = $cloner;
    }


    /**
     *
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomium', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomcomplet', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'numabrege', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'etablissement', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'libelleemploi', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codeemploi', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'numemploye', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeemploye', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'prenom', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'mail', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idresponsable', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomresponsable', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'mobile', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codeorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codecaisse', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'contact', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'civilite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomsite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomentite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomentabrege', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'sigleent', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listerouge', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeagent', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'finvaliditeentree', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'abslongueduree', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'entreeinvalidee', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listerougephoto', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listeorange', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listejaune', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'parking', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'publication', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'exceptionddq', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'compteactif', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'statutparking', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idOrganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idDdqContrat', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idEntite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idSite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'placeparking'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomium', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomcomplet', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'tel', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'numabrege', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'etablissement', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'libelleemploi', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codeemploi', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'numemploye', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeemploye', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'prenom', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'mail', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idresponsable', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomresponsable', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'mobile', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codeorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'codecaisse', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'contact', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'civilite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomsite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomentite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'nomentabrege', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'sigleent', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listerouge', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeagent', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'finvaliditeentree', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'abslongueduree', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'entreeinvalidee', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'typeorganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listerougephoto', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listeorange', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'listejaune', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'parking', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'publication', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'exceptionddq', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'compteactif', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'statutparking', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idOrganisme', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idDdqContrat', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idEntite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'idSite', '' . "\0" . 'AppBundle\\Entity\\Agent' . "\0" . 'placeparking'];
    }

    /**
     *
     */
    public function __wakeup()
    {
        if (!$this->__isInitialized__) {
            $this->__initializer__ = function (Agent $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if (!array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     *
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }


    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomium($nomium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomium', [$nomium]);

        return parent::setNomium($nomium);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomium()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomium', []);

        return parent::getNomium();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomcomplet($nomcomplet = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomcomplet', [$nomcomplet]);

        return parent::setNomcomplet($nomcomplet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomcomplet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomcomplet', []);

        return parent::getNomcomplet();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumabrege($numabrege = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumabrege', [$numabrege]);

        return parent::setNumabrege($numabrege);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumabrege()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumabrege', []);

        return parent::getNumabrege();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtablissement($etablissement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtablissement', [$etablissement]);

        return parent::setEtablissement($etablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtablissement', []);

        return parent::getEtablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleemploi($libelleemploi = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleemploi', [$libelleemploi]);

        return parent::setLibelleemploi($libelleemploi);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleemploi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleemploi', []);

        return parent::getLibelleemploi();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeemploi($codeemploi = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeemploi', [$codeemploi]);

        return parent::setCodeemploi($codeemploi);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeemploi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeemploi', []);

        return parent::getCodeemploi();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumemploye($numemploye = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumemploye', [$numemploye]);

        return parent::setNumemploye($numemploye);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumemploye()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumemploye', []);

        return parent::getNumemploye();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeemploye($typeemploye = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeemploye', [$typeemploye]);

        return parent::setTypeemploye($typeemploye);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeemploye()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeemploye', []);

        return parent::getTypeemploye();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail($mail = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', [$mail]);

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', []);

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdresponsable($idresponsable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdresponsable', [$idresponsable]);

        return parent::setIdresponsable($idresponsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdresponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdresponsable', []);

        return parent::getIdresponsable();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomresponsable($nomresponsable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomresponsable', [$nomresponsable]);

        return parent::setNomresponsable($nomresponsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomresponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomresponsable', []);

        return parent::getNomresponsable();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile($mobile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', [$mobile]);

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', []);

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeorganisme($codeorganisme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeorganisme', [$codeorganisme]);

        return parent::setCodeorganisme($codeorganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeorganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeorganisme', []);

        return parent::getCodeorganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodecaisse($codecaisse = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodecaisse', [$codecaisse]);

        return parent::setCodecaisse($codecaisse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodecaisse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodecaisse', []);

        return parent::getCodecaisse();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomorganisme($nomorganisme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomorganisme', [$nomorganisme]);

        return parent::setNomorganisme($nomorganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomorganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomorganisme', []);

        return parent::getNomorganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact($contact = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$contact]);

        return parent::setContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite($civilite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite', [$civilite]);

        return parent::setCivilite($civilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite', []);

        return parent::getCivilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomsite($nomsite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomsite', [$nomsite]);

        return parent::setNomsite($nomsite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomsite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomsite', []);

        return parent::getNomsite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomentite($nomentite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomentite', [$nomentite]);

        return parent::setNomentite($nomentite);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomentite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomentite', []);

        return parent::getNomentite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomentabrege($nomentabrege = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomentabrege', [$nomentabrege]);

        return parent::setNomentabrege($nomentabrege);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomentabrege()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomentabrege', []);

        return parent::getNomentabrege();
    }

    /**
     * {@inheritDoc}
     */
    public function setSigleent($sigleent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSigleent', [$sigleent]);

        return parent::setSigleent($sigleent);
    }

    /**
     * {@inheritDoc}
     */
    public function getSigleent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSigleent', []);

        return parent::getSigleent();
    }

    /**
     * {@inheritDoc}
     */
    public function setListerouge($listerouge = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListerouge', [$listerouge]);

        return parent::setListerouge($listerouge);
    }

    /**
     * {@inheritDoc}
     */
    public function getListerouge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListerouge', []);

        return parent::getListerouge();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeagent($typeagent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeagent', [$typeagent]);

        return parent::setTypeagent($typeagent);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeagent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeagent', []);

        return parent::getTypeagent();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinvaliditeentree($finvaliditeentree = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinvaliditeentree', [$finvaliditeentree]);

        return parent::setFinvaliditeentree($finvaliditeentree);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinvaliditeentree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinvaliditeentree', []);

        return parent::getFinvaliditeentree();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbslongueduree($abslongueduree = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbslongueduree', [$abslongueduree]);

        return parent::setAbslongueduree($abslongueduree);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbslongueduree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbslongueduree', []);

        return parent::getAbslongueduree();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntreeinvalidee($entreeinvalidee = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntreeinvalidee', [$entreeinvalidee]);

        return parent::setEntreeinvalidee($entreeinvalidee);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntreeinvalidee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntreeinvalidee', []);

        return parent::getEntreeinvalidee();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeorganisme($typeorganisme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeorganisme', [$typeorganisme]);

        return parent::setTypeorganisme($typeorganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeorganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeorganisme', []);

        return parent::getTypeorganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setListerougephoto($listerougephoto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListerougephoto', [$listerougephoto]);

        return parent::setListerougephoto($listerougephoto);
    }

    /**
     * {@inheritDoc}
     */
    public function getListerougephoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListerougephoto', []);

        return parent::getListerougephoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setListeorange($listeorange = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListeorange', [$listeorange]);

        return parent::setListeorange($listeorange);
    }

    /**
     * {@inheritDoc}
     */
    public function getListeorange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeorange', []);

        return parent::getListeorange();
    }

    /**
     * {@inheritDoc}
     */
    public function setListejaune($listejaune = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListejaune', [$listejaune]);

        return parent::setListejaune($listejaune);
    }

    /**
     * {@inheritDoc}
     */
    public function getListejaune()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListejaune', []);

        return parent::getListejaune();
    }

    /**
     * {@inheritDoc}
     */
    public function setParking($parking = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParking', [$parking]);

        return parent::setParking($parking);
    }

    /**
     * {@inheritDoc}
     */
    public function getParking()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParking', []);

        return parent::getParking();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublication($publication = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublication', [$publication]);

        return parent::setPublication($publication);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublication', []);

        return parent::getPublication();
    }

    /**
     * {@inheritDoc}
     */
    public function setExceptionddq($exceptionddq = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExceptionddq', [$exceptionddq]);

        return parent::setExceptionddq($exceptionddq);
    }

    /**
     * {@inheritDoc}
     */
    public function getExceptionddq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExceptionddq', []);

        return parent::getExceptionddq();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompteactif($compteactif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompteactif', [$compteactif]);

        return parent::setCompteactif($compteactif);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompteactif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompteactif', []);

        return parent::getCompteactif();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatutparking($statutparking = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatutparking', [$statutparking]);

        return parent::setStatutparking($statutparking);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatutparking()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatutparking', []);

        return parent::getStatutparking();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdOrganisme(\AppBundle\Entity\Organisme $idOrganisme = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdOrganisme', [$idOrganisme]);

        return parent::setIdOrganisme($idOrganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdOrganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdOrganisme', []);

        return parent::getIdOrganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDdqContrat(\AppBundle\Entity\DdqContrat $idDdqContrat = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDdqContrat', [$idDdqContrat]);

        return parent::setIdDdqContrat($idDdqContrat);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdDdqContrat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDdqContrat', []);

        return parent::getIdDdqContrat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEntite(\AppBundle\Entity\Entite $idEntite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEntite', [$idEntite]);

        return parent::setIdEntite($idEntite);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEntite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEntite', []);

        return parent::getIdEntite();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSite(\AppBundle\Entity\Site $idSite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSite', [$idSite]);

        return parent::setIdSite($idSite);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSite', []);

        return parent::getIdSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaceparking($placeparking)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaceparking', [$placeparking]);

        return parent::setPlaceparking($placeparking);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaceparking()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaceparking', []);

        return parent::getPlaceparking();
    }

}
