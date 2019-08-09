<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Table;

use CNAMTS\PHPK\CoreBundle\Generator\Table\Decorator;
use CNAMTS\PHPK\CoreBundle\Generator\Table\TableGenerator;

/**
 * Description of TableAgentParking
 *
 * @author FANTINO-02926
 */
class TableAgentParking extends TableGenerator
{
    //put your code here

    /*
 * À surcharger obligatoirement pour y créer vos colonnes
 * Attention, ne pas oublier l'appel au contructeur parent - parent::__construct() - avant toute chose
 */
    public function __construct()
    {
        parent::__construct();

        /**
         * Nous définissons ici 3 colonnes pour notre tableau :
         *  - N° Chrono
         *  - Nom
         *  - Prénom
         */
        $this
            ->addColumn(array(
                'id' => 'Nom ium',
                'name' => 'Nom IUM',
                'filtrable' => false,
                'triable' => true,
                'decorator' => Decorator::DEFAUT

            ))
            ->addColumn(array(
                'id' => 'handicap',
                'name' => 'Handicap',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Enfants',
                'name' => 'Enfants',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Emplois',
                'name' => 'Emplois',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'adresse',
                'name' => 'Adresse',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT

            ))
            ->addColumn(array(
                'id' => 'Enfant1',
                'name' => 'Enfant ',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT

            ))
            ->addColumn(array(
                'id' => 'Datenaissance1',
                'name' => 'Date de naissance',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::SHORTDATE,
                'sort' => 'SORT_DATE',
            ))
            ->addColumn(array(
                'id' => 'Enfant2',
                'name' => 'Enfant ',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Datenaissance2',
                'name' => 'Date de naissance',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::SHORTDATE,
                'sort' => 'SORT_DATE',
            ))
            ->addColumn(array(
                'id' => 'Enfant3',
                'name' => 'Enfant',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Datenaissance3',
                'name' => 'Date de naissance',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::SHORTDATE,
                'sort' => 'SORT_STRING',
            ))
            ->addColumn(array(
                'id' => 'Enfant4',
                'name' => 'Enfant',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'Datenaissance4',
                'name' => 'Date de naissance',
                'filtrable' => true,
                'triable' => true,
                'decorator' => Decorator::SHORTDATE,
                'sort' => 'SORT_STRING',
            ));
    }

    /*
     * À surcharger obligatoirement pour remplir le tableau avec vos données
     */
    public function getRows()
    {
        $test = "toto";
        foreach ($this->getDataHandler()->getData() as $UtilisateurParking) {
            $this->addRow(array(
                    // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
                    'data' => array(
                        //          $test,
                        $UtilisateurParking->getIdAgent()->getNomium(),
                        $UtilisateurParking->getHandicap(),
                        $UtilisateurParking->getEnfants(),
                        $UtilisateurParking->getEmploi(),
                        $UtilisateurParking->getAdresse(),
                        $UtilisateurParking->getEnfant1(),
//                      //  $test,
                        $UtilisateurParking->getDatenaissance1(),
                        $UtilisateurParking->getEnfant2(),
                        $UtilisateurParking->getDatenaissance2(),
                        $UtilisateurParking->getEnfant3(),
                        $UtilisateurParking->getDatenaissance3(),
                        $UtilisateurParking->getEnfant4(),
                        $UtilisateurParking->getDatenaissance4(),

                    )
                )
            );
        }
        return $this->rows;
    }
//     public function __construct() {
//        parent::__construct();
//
//        $this
//            ->addColumn(array(
//                'id' => 'idAgent',
//                'name' => 'NumAgent',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//            ->addColumn(array(
//                'id' => 'statut',
//                'name' => 'Nom Agent',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//            ->addColumn(array(
//                'id' => 'enfants',
//                'name' => 'enfants',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//            ->addColumn(array(
//                'id' => 'handicaps',
//                'name' => 'handicaps',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//            ->addColumn(array(
//                'id' => 'emplois',
//                'name' => 'emplois',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//            ->addColumn(array(
//                'id' => 'enfant1',
//                'name' => 'enfant1',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//             ->addColumn(array(
//                'id' => 'datenaissance1',
//                'name' => 'Date naissance',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))      
//           ->addColumn(array(
//                'id' => 'enfant2',
//                'name' => 'enfant2',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//          ->addColumn(array(
//                'id' => 'datenaissance2',
//                'name' => 'Date naissance',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))             
//            ->addColumn(array(
//                'id' => 'enfant3',
//                'name' => 'enfant3',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))
//           ->addColumn(array(
//                'id' => 'datenaissance3',
//                'name' => 'Date naissance',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::DEFAUT
//            ))            
//            ->addColumn(array(
//                'id' => 'adresse',
//                'name' => 'Adresse',
//                'filtrable' => true,
//                'triable' => true,
//                'decorator' => Decorator::LINK,
//            ))
//        ;
//    }
//        public function getRows() {
//        foreach($this->getDataHandler()->getData() as $UtilisateurParking) {
//        $this->addRow(array(
//                    // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
//                    'data' => array(
//                        $UtilisateurParking->getIdAgent()->getNomium(),
//                        $UtilisateurParking->getStatut(),
//                        $UtilisateurParking->getIdDdqCampagne()->getDatedebut()->format('d-m-Y'),
//                        $UtilisateurParking->getIdDdqCampagne()->getDatefin()->format('d-m-Y'),
//                      
//                    )
//                )
//            );
//        }
//        return $this->rows;
//    }


}
