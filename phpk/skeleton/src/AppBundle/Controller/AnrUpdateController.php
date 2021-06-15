<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\AnrAgent;
use AppBundle\Entity\AnrEntite;
use AppBundle\Entity\AnrOrganisme;
use AppBundle\Entity\AnrSite;
use Exception;

class AnrUpdateController extends AbstractController
{
    public function persistAction()
    {
        // on rallonge le temps d'execution max car c'est long !
        ini_set('max_execution_time', 600);

        $anr = $this->get('phpk_webservice.client.anr');
        $em = $this->getDoctrine()->getManager();

        $organismes = $anr->findAllOrganismesBy(array('numSiret' => '77931118200017'));
        $sites = $anr->findAllSitesBy(array('numSiret' => '77931118200017'));
        $entites = $anr->findAllEntitesBy(array('numSiret' => '77931118200017'));
        $agents = $anr->findAllAgentsBy(array('numSiret' => '77931118200017'));

        try {
            foreach ($organismes as $organisme) {
                $anrOrganisme = new AnrOrganisme();

                $anrOrganisme->setIdOrganisme($organisme->getIdOrganisme());
                $anrOrganisme->setNomabrege($organisme->getNomAbrege());
                $anrOrganisme->setNomComplet($organisme->getNomComplet());
                $anrOrganisme->setCodeOrganisme($organisme->getCodeOrganisme());
                $anrOrganisme->setNumucanss($organisme->getNumUcanss());
                $anrOrganisme->setTypeorganisme($organisme->getTypeOrganisme());
                if (strlen($organisme->getSiteSiege()) > 19) {
                    $anrOrganisme->setSitesiege(substr($organisme->getSiteSiege(), 2, 19));

                } elseif (strlen($organisme->getSiteSiege()) == 19) {
                    $anrOrganisme->setSitesiege($organisme->getSiteSiege());
                } else {
                    $anrOrganisme->setSitesiege(null);
                }

                /* l'attribut est un array dans l'anr donc ca met le bazar
                 * et pour le moment il ne nous sert à rien donc on set à chaine vide
                 */
                $anrOrganisme->setSitesgeographiques("");

                if (strlen($organisme->getIdCti()) > 19) {
                    $anrOrganisme->setIdcti(substr($organisme->getIdCti(), 2, 14));
                } elseif (strlen($organisme->getIdCti()) == 19) {
                    $anrOrganisme->setIdcti($organisme->getIdCti());
                } else {
                    $anrOrganisme->setIdcti(null);
                }

                $anrOrganisme->setNomcti($organisme->getNomCti());
                $anrOrganisme->setCodegdp($organisme->getCodeGDP());
                $anrOrganisme->setNomdomaine($organisme->getNomDomaine());
                $anrOrganisme->setCodecaisse($organisme->getCodeCaisse());
                $em->persist($anrOrganisme);
                $em->flush();
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'Your custom message');
            $message = $this->get('logger')->error($e->getTraceAsString());
        }

        try {
            foreach ($sites as $site) {
                $anrSite = new AnrSite();
                $anrSite->setIdsite($site->getIdSite());
                $anrSite->setNomsite($site->getNomSite());
                $anrSite->setTel($site->getTel());
                $anrSite->setAdressepostale($site->getAdressePostale());
                $anrSite->setBatiment($site->getBatiment());
                $anrSite->setBoitepostale($site->getBoitePostale());
                $anrSite->setCodepostal($site->getCodePostal());
                $anrSite->setVille($site->getVille());
                $anrSite->setIdorganisme('77931118200017');
                $anrSite->setNomorganisme($site->getNomOrganisme());
                $em->persist($anrSite);
                $em->flush();
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'Your custom message');
            $message = $this->get('logger')->error($e->getTraceAsString());
        }

        try {
            foreach ($entites as $entite) {
                $anrEntite = new AnrEntite();

                $anrEntite->setIdentite($entite->getIdEntite());
                $anrEntite->setNomentcomplet($entite->getNomEntComplet());
                $anrEntite->setNomentabrege($entite->getNomEntAbrege());
                $anrEntite->setSigleent($entite->getSigleEnt());
                $anrEntite->setDirection($entite->getDirection());
                //Parent
                if (strlen($entite->getParent()) > 19) {
                    $anrEntite->setParent(substr($entite->getParent(), 2, 19));
                } elseif (strlen($entite->getParent()) == 19) {
                    $anrEntite->setParent($entite->getParent());
                } else {
                    $anrEntite->setParent(substr($entite->getParent(), 2, 19));
                }

                $anrEntite->setIdorganisme('77931118200017');
                $anrEntite->setNomorganisme($entite->getNomOrganisme());
                // id site
                if (is_array($entite->getIdSite([0]))) {
                    $tab = $entite->getIdEntite([0]);
                    $anrEntite->setIdentite(substr($tab[0], 2, 19));

                } elseif (strlen($entite->getIdSite()) > 19) {
                    $anrEntite->setIdSite(substr($entite->getIdSite(), 2, 19));
                } elseif ((strlen($entite->getIdSite())) == 19) {
                    $anrEntite->setIdSite($entite->getIdSite());
                } else {
                    $anrEntite->setIdsite(null);
                }

                $anrEntite->setTel($entite->getTel());
                //ID RESPONSABLE
                if (strlen($entite->getIdResponsable()) > 19) {
                    $anrEntite->setIdresponsable(substr($entite->getIdResponsable(), 4, 19));
                } elseif ((strlen($entite->getIdResponsable())) == 19) {
                    $anrEntite->setIdResponsable($entite->getIdResponsable());
                } else {
                    $anrEntite->setIdResponsable(null);
                }

                $anrEntite->setNomResponsable($entite->getNomResponsable());
                //CONTACT
                if (strlen($entite->getContact()) > 19) {
                    $anrEntite->setContact(substr($entite->getContact(), 4, 19));
                } elseif (strlen($entite->getContact()) == 19) {
                    $anrEntite->setContact($entite->getContact());
                } else {
                    $anrEntite->setContact(null);

                }

                //$anrEntite->setContact(substr($entite->getContact(), 4, 19));
                $anrEntite->setNomcontact($entite->getNomContact());
                $anrEntite->setRattachement($entite->getRattachement());
                $anrEntite->setCheminphoto($entite->getCheminPhoto());
                // dump ($anrEntite);
                $em->persist($anrEntite);
                $em->flush();
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'Your custom message');
            $message = $this->get('logger')->error($e->getTraceAsString());
        }

        try {
            foreach ($agents as $agent) {
                $anrAgent = new AnrAgent();

                $anrAgent->setIdagent($agent->getIdAgent());
                $anrAgent->setNom($agent->getNom());
                $anrAgent->setNomcomplet($agent->getNomComplet());
                $anrAgent->setTel($agent->getTel());
                $anrAgent->setNumabrege($agent->getNumAbrege());
                $anrAgent->setEtablissement($agent->getEtablissement());
                $anrAgent->setLibelleemploi($agent->getLibelleEmploi());
                $anrAgent->setCodeemploi($agent->getCodeEmploi());
                $anrAgent->setRole($agent->getRole());
                $anrAgent->setNumemploye($agent->getNumEmploye());
                $anrAgent->setTypeemploye($agent->getTypeEmploye());
                $anrAgent->setPrenom($agent->getPrenom());
                $anrAgent->setMail($agent->getMail());
                //ID RESPONSABLE
                if (strlen($agent->getIdresponsable()) > 19) {
                    $anrAgent->setIdresponsable(substr($agent->getIdResponsable(), 4, 19));
                } elseif ((strlen($agent->getIdresponsable())) == 19) {
                    $anrAgent->setIdresponsable($agent->getIdResponsable());
                } else {
                    $anrAgent->setIdresponsable(null);
                }

                $anrAgent->setNomresponsable($agent->getNomResponsable());
                $anrAgent->setMobile($agent->getMobile());
                $anrAgent->setCodeorganisme($agent->getCodeOrganisme());
                $anrAgent->setCodecaisse($agent->getCodeCaisse());
                $anrAgent->setNomorganisme($agent->getNomOrganisme());
                //CONTACT
                if (strlen($agent->getContact()) > 19) {
                    $anrAgent->setContact(substr($agent->getContact(), 4, 19));

                } elseif ((strlen($agent->getContact())) == 19) {
                    $anrAgent->setContact($agent->getContact());
                } else {
                    $anrAgent->setContact(null);
                }
                //->setContact(substr($agent->getContact(), 4, 19));
                $anrAgent->setCivilite($agent->getCivilite());
                // parfois la FK n'est pas renseigné
                // dans ce cas on set à null
                if (strlen($agent->getIdSite()) > 19) {
                    $anrAgent->setIdsite(substr($agent->getIdSite(), 2, 19));
                    //$anrAgent->setIdsite(null);
                } elseif ((strlen($agent->getIdSite()) == 19)) {
                    $anrAgent->setIdsite($agent->getIdSite());
                } else {
                    $anrAgent->setIdsite(null);
                }

                $anrAgent->setNomsite($agent->getNomSite());
                /* Dans certaines rares exceptions, un agent est rattaché à plusieurs entités
                 * Dans ce cas c'est un array en attribut Identite
                 * du coup on teste si c'est le cas et si oui on prend identite du premier indice du tableau
                 */
                if (is_array($agent->getIdEntite([0]))) {
                    $tab = $agent->getIdEntite([0]);
                    $anrAgent->setIdentite(substr($tab[0], 2, 19));
                    // $anrAgent->setIdentite(null);
                } else if (strlen($agent->getIdEntite()) > 19) {
                    $anrAgent->setIdentite(substr($agent->getIdEntite(), 2, 19));
                    // $anrAgent->setIdentite(null);
                } else if (strlen($agent->getIdEntite()) == 19) {
                    $anrAgent->setIdentite($agent->getIdEntite());
                }
                // parfois la FK n'est pas renseigné
                // dans ce cas on set à null
                else {
                    $anrAgent->setIdentite(null);
                }

                /* Dans certaines rares exceptions, un agent est rattaché à plusieurs entités
                 * Dans ce cas c'est un array en attribut NomEntite
                 * du coup on teste si c'est le cas et si oui on prend NomEntite du premier indice du tableau
                 */
                if (is_array($agent->getNomEntite())) {
                    $tab = $agent->getNomEntite();
                    $anrAgent->setNomentite($tab[0]);
                } else {
                    $anrAgent->setNomentite($agent->getNomEntite());
                }

                $anrAgent->setNomentabrege($agent->getNomEntAbrege());

                /* Dans certaines rares exceptions, un agent est rattaché à plusieurs entités
                 * Dans ce cas c'est un array en attribut SigleEnt
                 * du coup on teste si c'est le cas et si oui on prend SigleEnt du premier indice du tableau
                 */
                if (is_array($agent->getSigleEnt())) {
                    $tab = $agent->getSigleEnt();
                    $anrAgent->setSigleent($tab[0]);
                } else {
                    $anrAgent->setSigleent($agent->getSigleEnt());
                }


                $anrAgent->setListerouge($agent->getListeRouge());
                $anrAgent->setTypeagent($agent->getTypeAgent());
                $anrAgent->setFinvaliditeentree($agent->getFinValiditeEntree());
                $anrAgent->setAbslongueduree($agent->getAbsLongueDuree());
                $anrAgent->setEntreeinvalidee($agent->getEntreeInvalidee());
                $anrAgent->setIdorganisme('77931118200017');
                $anrAgent->setTypeorganisme($agent->getTypeOrganisme());
                $anrAgent->setListerougephoto($agent->getListeRougePhoto());
                $anrAgent->setListeorange($agent->getListeOrange());
                $anrAgent->setListejaune($agent->getListeJaune());
                $anrAgent->setParking($agent->getParking());
                $anrAgent->setPublication($agent->getPublication());
                //dump ($anrAgent);
                $em->persist($anrAgent);
                $em->flush();
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add('error', 'Your custom message');
            $message = $this->get('logger')->error($e->getTraceAsString());
        }

        return $this->render('AppBundle:Default:persist.html.twig');
    }
}
