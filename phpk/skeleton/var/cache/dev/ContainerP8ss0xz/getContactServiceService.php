<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\Service\ContactService' shared autowired service.

include_once $this->targetDirs[3] . '/src/AppBundle/Service/ContactService.php';

return $this->services['AppBundle\Service\ContactService'] = new \AppBundle\Service\ContactService(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'}, 'coucou');