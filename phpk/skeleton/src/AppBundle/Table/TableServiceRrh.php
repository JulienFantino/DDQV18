<?php

namespace AppBundle\Table;

use CNAMTS\PHPK\CoreBundle\Generator\Table\Cell\CellLink;
use CNAMTS\PHPK\CoreBundle\Generator\Table\Decorator;
use CNAMTS\PHPK\CoreBundle\Generator\Table\TableGenerator;

class TableServiceRrh extends TableGenerator
{
    public function __construct()
    {
        parent::__construct();

        $this
            ->addColumn(array(
                'id' => 'idEntite',
                'name' => 'Service',
                'filtrable' => false,
                'triable' => false,
                'decorator' => Decorator::DEFAUT
            ));
    }

    public function getRows()
    {
        foreach ($this->getDataHandler()->getData() as $questionnaire) {

            $this->addRow(array(
                    // L'ordre de remplissage des colonnes est celui configuré dans le constructeur
                    'data' => array(
                        // $questionnaire->getIdEntite()->getNomEntComplet()
                        $questionnaire[1]
                        //     $questionnaire[$i],
                        //   $questionnaire[$i],  array('data'=>$questionnaire->getIdEntite())

                    )
                )
            );

        }
        return $this->rows;
    }


}