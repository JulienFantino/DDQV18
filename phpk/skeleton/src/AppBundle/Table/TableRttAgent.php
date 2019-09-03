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
class TableRttAgent extends TableGenerator
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
                'id' => 'contrat',
                'name' => 'Contrat',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Formule',
                'name' => 'Formule',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'datefin',
                'name' => 'Date de fin',
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
        /*       foreach ($this->getDataHandler()->getData() as $questionnaire) {
                 // Création de la cellule avec son contenu
                 $lien = new CellLink();
                 $lien->setText($questionnaire->getLibelle());
                 $lien->setTitle('Accéder au questionnaire');

                 if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Parking') {
                     $url = 'questionnaire_parking/' . $questionnaire->getIdDdqCampagne()->getLibelle();
                     $lien->setUrl($url);
                 } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'RTT') {
                     $url = 'questionnaire_rtt/' . $questionnaire->getIdDdqCampagne()->getLibelle();
                     $lien->setUrl($url);
                 } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Temps_partiel') {
                     $url = 'questionnaire_tp/' . $questionnaire->getIdDdqCampagne()->getLibelle();
                     $lien->setUrl($url);
                 } else {
                     $lien->setUrl('error');
                 }
                 $this->addRow(array(
                         // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
                         'data' => array(
                             $questionnaire->getIdDdqCampagne()->getLibelle(),
                             $questionnaire->getStatut(),
                             $questionnaire->getIdDdqCampagne()->getDatedebut()->format('d-m-Y'),
                             $questionnaire->getIdDdqCampagne()->getDatefin()->format('d-m-Y'),
                             $lien
                         )
                     )
                 );
             }
             return $this->rows;*/
    }
    //put your code here
}
