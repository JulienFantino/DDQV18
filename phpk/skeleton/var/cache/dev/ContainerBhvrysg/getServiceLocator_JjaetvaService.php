<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.jjaetva' shared service.

return $this->services['service_locator.jjaetva'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['mailer' => function () {
    return ${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'};
}]);