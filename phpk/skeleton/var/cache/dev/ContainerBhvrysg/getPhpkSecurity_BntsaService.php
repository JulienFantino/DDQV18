<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpk_security.bntsa' shared service.

include_once $this->targetDirs[3] . '/vendor/cnamts/phpk/bundles/phpk-security-bundle/DependencyInjection/Service/BntsaService.php';

return $this->services['phpk_security.bntsa'] = new \CNAMTS\PHPK\SecurityBundle\DependencyInjection\Service\BntsaService(${($_ = isset($this->services['phpk_security.crypto']) ? $this->services['phpk_security.crypto'] : $this->load('getPhpkSecurity_CryptoService.php')) && false ?: '_'}, ($this->targetDirs[3] . '/app/logs/bntsa/'), ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}->getToken()->getUser(), (($this->hasParameter("identifiant")) ? ($this->getParameter("identifiant")) : (null)), ${($_ = isset($this->services['monolog.logger.phpk_security.bntsa']) ? $this->services['monolog.logger.phpk_security.bntsa'] : $this->load('getMonolog_Logger_PhpkSecurity_BntsaService.php')) && false ?: '_'});
