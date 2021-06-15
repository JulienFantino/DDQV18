<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['AppBundle\\Controller\\AdministrationController:clotureCampagneAction' => function () {
    return ${($_ = isset($this->services['service_locator.jjaetva']) ? $this->services['service_locator.jjaetva'] : $this->load('getServiceLocator_JjaetvaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\AdministrationController:nouvelleCampagneAction' => function () {
    return ${($_ = isset($this->services['service_locator.jjaetva']) ? $this->services['service_locator.jjaetva'] : $this->load('getServiceLocator_JjaetvaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController:getQuestionnaireParkingAction' => function () {
    return ${($_ = isset($this->services['service_locator.96vsqww']) ? $this->services['service_locator.96vsqww'] : $this->load('getServiceLocator_96vsqwwService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController:getQuestionnaireRttAction' => function () {
    return ${($_ = isset($this->services['service_locator.6ugztcq']) ? $this->services['service_locator.6ugztcq'] : $this->load('getServiceLocator_6ugztcqService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController:getQuestionnaireTpAction' => function () {
    return ${($_ = isset($this->services['service_locator.96vsqww']) ? $this->services['service_locator.96vsqww'] : $this->load('getServiceLocator_96vsqwwService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\AdministrationController::clotureCampagneAction' => function () {
    return ${($_ = isset($this->services['service_locator.jjaetva']) ? $this->services['service_locator.jjaetva'] : $this->load('getServiceLocator_JjaetvaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\AdministrationController::nouvelleCampagneAction' => function () {
    return ${($_ = isset($this->services['service_locator.jjaetva']) ? $this->services['service_locator.jjaetva'] : $this->load('getServiceLocator_JjaetvaService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireParkingAction' => function () {
    return ${($_ = isset($this->services['service_locator.96vsqww']) ? $this->services['service_locator.96vsqww'] : $this->load('getServiceLocator_96vsqwwService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireRttAction' => function () {
    return ${($_ = isset($this->services['service_locator.6ugztcq']) ? $this->services['service_locator.6ugztcq'] : $this->load('getServiceLocator_6ugztcqService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireTpAction' => function () {
    return ${($_ = isset($this->services['service_locator.96vsqww']) ? $this->services['service_locator.96vsqww'] : $this->load('getServiceLocator_96vsqwwService.php')) && false ?: '_'};
}]));