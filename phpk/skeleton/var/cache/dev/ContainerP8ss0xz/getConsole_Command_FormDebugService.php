<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type'], [0 => 'AppBundle\\Form\\DdqCampagneType', 1 => 'AppBundle\\Form\\DdqContratType', 2 => 'AppBundle\\Form\\DdqQuestionnaireParkingType', 3 => 'AppBundle\\Form\\DdqQuestionnaireRttType', 4 => 'AppBundle\\Form\\DdqQuestionnaireTpType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 7 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 8 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\BoutonType', 9 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\CollectionButtonType', 10 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\BoutonsType', 11 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\ColorType', 12 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\NirType', 13 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\PsType', 14 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\RppsType', 15 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Type\\AutocompletionType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'CNAMTS\\PHPK\\CoreBundle\\Form\\Extension\\ButtonExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
