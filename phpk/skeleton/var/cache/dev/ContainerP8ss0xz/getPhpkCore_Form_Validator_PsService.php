<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpk_core.form.validator.ps' shared service.

include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3] . '/vendor/cnamts/phpk/bundles/phpk-core-bundle/Validator/Constraints/RppsValidator.php';

return $this->services['phpk_core.form.validator.ps'] = new \CNAMTS\PHPK\CoreBundle\Validator\Constraints\RppsValidator();
