<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Table;

use CNAMTS\PHPK\CoreBundle\Generator\Table\Cell\CellLink;
use CNAMTS\PHPK\CoreBundle\Generator\Table\Decorator;
use CNAMTS\PHPK\CoreBundle\Generator\Table\TableGenerator;

/**
 * Description of TableUtilisateurParking
 *
 * @author FANTINO-02926
 */
class TableTpAgent extends TableGenerator
{

    public function __construct()
    {
        parent::__construct();

        $this
            ->addColumn(array(
                'id' => 'libelle',
                'name' => 'Utilisateur',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'statut',
                'name' => 'statut',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'motif',
                'name' => 'Motif',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Nbheures',
                'name' => 'Contrat',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'lien',
                'name' => 'Lien vers le questionnaire',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::LINK,
            ));
    }

    public function getRows()
    {
        foreach ($this->getDataHandler()->getData() as $questionnaire) {
            // Création de la cellule avec son contenu
            $lien = new CellLink();
            $lien->setText($questionnaire->getLibelle());
            $lien->setTitle('Accéder au questionnaire');


            if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Parking') {
                $url = 'questionnaire_parking/' . $questionnaire->getIdDdqCampagne()->getLibelle();
                $lien->setUrl($url);
            } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'RTT' and $questionnaire->getStatut() != 'nouveau') {
                $url = 'quetionnaire_rttN+1/' . $questionnaire->getId();
                $lien->setUrl($url);
            } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Temps_partiel') {
                $url = 'questionnaire_tpN+1/' . $questionnaire->getId();
                $lien->setUrl($url);
            } else {
                $lien->setUrl('error');
            } /*
                $lien->setUrl('toto');*/
            $this->addRow(array(
                    // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
                    'data' => array(
                        $questionnaire->getIdAgent()->getNomium(),
                        $questionnaire->getStatut(),
                        $questionnaire->getMotif(),
                        $questionnaire->getIdDdqContrat()->getNbheures(),
                        $lien
                    )
                )
            );
        }
        return $this->rows;
    }
    //put your code here
}
