<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use Exception;
class AnrController extends AbstractController
{
    public function anrAction()
    {
        $anr = $this->get('phpk_webservice.client.anr');

        /* Récupération d'un agent à partir de son nom et de son prénom */
        try {
            $organismes = $anr->findAllOrganismesBy(array('numSiret' => '77931118200017'));
            $sites = $anr->findAllSitesBy(array('numSiret' => '77931118200017'));
            //var_dump($site);
            $entites = $anr->findAllEntitesBy(array('numSiret' => '77931118200017'));
            //var_dump($entite);

            $agents = $anr->findAllAgentsBy(array('numSiret' => '77931118200017'));
            //var_dump($agents);*/

        } catch (Exception $e) {
            $this->notification('Aucun agent ne correspond à ces critères de recherche', 'error');
            return $this->redirect($this->generateUrl('app_error'));
        }

        return $this->render('AppBundle:Default:info.html.twig', array(
            'organismes' => $organismes,
            'sites' => $sites,
            'entites' => $entites,
            'agents' => $agents
        ));
    }

    public function agentAction()
    {
        $anr = $this->get('phpk_webservice.client.anr');
        try {

            $agent = $anr->findAllAgentsBy(array('nomAgent' => 'FANTINO'));
            //  var_dump($agent);
            dump($agent);

        } catch (Exception $e) {
            $this->notification('Aucun agent ne correspond à ces critères de recherche', 'error');
            return $this->redirect($this->generateUrl('app_error'));
        }

        return $this->render('AppBundle:Default:info.html.twig', array(
            'agent' => $agent
        ));
    }


}
