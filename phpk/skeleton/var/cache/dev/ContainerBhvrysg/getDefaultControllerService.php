<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\Controller\DefaultController' shared autowired service.

include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3] . '/vendor/cnamts/phpk/bundles/phpk-core-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3] . '/src/AppBundle/Controller/AbstractController.php';
include_once $this->targetDirs[3] . '/src/AppBundle/Controller/DefaultController.php';

return $this->services['AppBundle\Controller\DefaultController'] = new \AppBundle\Controller\DefaultController();
