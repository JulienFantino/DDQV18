<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpk_webservice.client.espoir' shared service.

include_once $this->targetDirs[3] . '/vendor/cnamts/phpk/bundles/phpk-wsclient-bundle/DependencyInjection/Service/EspoirService.php';

return $this->services['phpk_webservice.client.espoir'] = new \CNAMTS\PHPK\WSClientBundle\DependencyInjection\Service\EspoirService((($this->hasParameter("phpkws_client.espoir")) ? ($this->getParameter("phpkws_client.espoir")) : (null)), ${($_ = isset($this->services['monolog.logger.phpk_wsclient.espoir']) ? $this->services['monolog.logger.phpk_wsclient.espoir'] : $this->load('getMonolog_Logger_PhpkWsclient_EspoirService.php')) && false ?: '_'}, ${($_ = isset($this->services['phpk_security.authapp']) ? $this->services['phpk_security.authapp'] : $this->load('getPhpkSecurity_AuthappService.php')) && false ?: '_'});
