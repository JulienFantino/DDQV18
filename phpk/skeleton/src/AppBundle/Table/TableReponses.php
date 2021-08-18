<?php

namespace AppBundle\Table;

use CNAMTS\PHPK\CoreBundle\Generator\Table\Cell\CellLink;
use CNAMTS\PHPK\CoreBundle\Generator\Table\Decorator;
use CNAMTS\PHPK\CoreBundle\Generator\Table\TableGenerator;

class TableReponses extends TableGenerator
{
    public function __construct()
    {
        parent::__construct();

        $this
            ->addColumn(array(
                'id' => 'nomium',
                'name' => 'Agent',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'nom',
                'name' => 'Nom',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'prenom',
                'name' => 'Prénom',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ))
            ->addColumn(array(
                'id' => 'statut',
                'name' => 'Statut Questionnaire',
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
                $url = 'validation_parking/' . $questionnaire->getId();
                $lien->setUrl($url);
            } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'RTT') {
                if ($questionnaire->getStatut() === 'validé N+1') {
                    $url = 'validation_rttN+1/' . $questionnaire->getId();
                } else {
                    $url = 'validation_rtt/' . $questionnaire->getId();
                }
                $lien->setUrl($url);
            } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Temps_partiel') {
                if ($questionnaire->getStatut() === 'validé N+1') {
                    $url = 'validation_tpN+1/' . $questionnaire->getId();
                } else {
                    $url = 'validation_tp/' . $questionnaire->getId();
                }

                $lien->setUrl($url);
            } else if ($questionnaire->getIdDdqCampagne()->getIdDdqCategorie()->getLibelle() === 'Recensement') {
                $url = 'validationservice/' . $questionnaire->getId();
                $lien->setUrl($url);
            } else $lien->setUrl('error');

            $this->addRow(array(
                    // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
                    'data' => array(
                        $questionnaire->getIdAgent()->getNomium(),
                        $questionnaire->getIdAgent()->getNom(),
                        $questionnaire->getIdAgent()->getPrenom(),
                        $questionnaire->getStatut(),
                        $lien
                    )
                )
            );
        }
        return $this->rows;
    }
}

    