<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.form.transformation_failure_handling' shared service.

include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractTypeExtension.php';
include_once $this->targetDirs[3] . '/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/Core/Type/TransformationFailureExtension.php';

return $this->services['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
