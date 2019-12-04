<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array('_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array('_controller' => 'web_profiler.controller.profiler:homeAction', '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo . '/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array('_controller' => 'web_profiler.controller.profiler:searchAction', '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array('_controller' => 'web_profiler.controller.profiler:searchBarAction', '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array('_controller' => 'web_profiler.controller.profiler:phpinfoAction', '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array('_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array('_controller' => 'web_profiler.controller.profiler:openAction', '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array('_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array('_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array('_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array('_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array('_controller' => 'twig.controller.preview_error:previewErrorPageAction', '_format' => 'html',));
            }

        }

        // app_index
        if ('' === $trimmedPathinfo) {
            $ret = array('_controller' => 'AppBundle\\Controller\\DefaultController::indexAction', '_route' => 'app_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo . '/', 'app_index'));
            }

            return $ret;
        }
        not_app_index:

        // error
        if ('/error' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\DefaultController::errorAction', '_route' => 'error',);
        }

        // nouvelle_campagne
        if ('/nouvelle_campagne' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\AdministrationController::nouvelleCampagneAction', '_route' => 'nouvelle_campagne',);
        }

        // cloture_campagne
        if ('/cloture_campagne' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\AdministrationController::clotureCampagneAction', '_route' => 'cloture_campagne',);
        }

        if (0 === strpos($pathinfo, '/campagnes_')) {
            // campagnes_parking
            if ('/campagnes_parking' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MesCampagnesController::getCampagnesParkingAction', '_route' => 'campagnes_parking',);
            }

            // campagnes_rtt
            if ('/campagnes_rtt' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MesCampagnesController::getCampagnesRttAction', '_route' => 'campagnes_rtt',);
            }

            // campagnes_tp
            if ('/campagnes_tp' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MesCampagnesController::getCampagnesTpAction', '_route' => 'campagnes_tp',);
            }

        } elseif (0 === strpos($pathinfo, '/questionnaire_')) {
            // questionnaire_parking
            if (0 === strpos($pathinfo, '/questionnaire_parking') && preg_match('#^/questionnaire_parking/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_parking']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireParkingAction',));
            }

            if (0 === strpos($pathinfo, '/questionnaire_rtt')) {
                // questionnaire_rtt
                if (preg_match('#^/questionnaire_rtt/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_rtt']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireRttAction',));
                }

                // questionnaire_rtt1
                if (0 === strpos($pathinfo, '/questionnaire_rtt1') && preg_match('#^/questionnaire_rtt1/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_rtt1']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireRttAction',));
                }

                // questionnaire_rtt2
                if (0 === strpos($pathinfo, '/questionnaire_rtt2') && preg_match('#^/questionnaire_rtt2/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_rtt2']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireRttAction',));
                }

                // questionnaire_rtt3
                if (0 === strpos($pathinfo, '/questionnaire_rtt3') && preg_match('#^/questionnaire_rtt3/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_rtt3']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireRttAction',));
                }

            }

            // questionnaire_tp
            if (0 === strpos($pathinfo, '/questionnaire_tp') && preg_match('#^/questionnaire_tp/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_tp']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireTpAction',));
            }

        } elseif (0 === strpos($pathinfo, '/historique_')) {
            // historique_parking
            if ('/historique_parking' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MonHistoriqueController::getHistoriqueParkingAction', '_route' => 'historique_parking',);
            }

            // historique_rtt
            if ('/historique_rtt' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MonHistoriqueController::getHistoriqueRttAction', '_route' => 'historique_rtt',);
            }

            // historique_tp
            if ('/historique_tp' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\MonHistoriqueController::getHistoriqueTpAction', '_route' => 'historique_tp',);
            }

        } elseif (0 === strpos($pathinfo, '/liste_questionnaires_')) {
            // liste_questionnaires_parking
            if ('/liste_questionnaires_parking' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeParkingRemplisAction', '_route' => 'liste_questionnaires_parking',);
            }

            if (0 === strpos($pathinfo, '/liste_questionnaires_rtt')) {
                // liste_questionnaires_rtt
                if ('/liste_questionnaires_rtt' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisAction', '_route' => 'liste_questionnaires_rtt',);
                }

                // liste_questionnaires_rttN+1
                if ('/liste_questionnaires_rttN+1' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1Action', '_route' => 'liste_questionnaires_rttN+1',);
                }

            } elseif (0 === strpos($pathinfo, '/liste_questionnaires_tp')) {
                // liste_questionnaires_tp
                if ('/liste_questionnaires_tp' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeTpRemplisAction', '_route' => 'liste_questionnaires_tp',);
                }

                // liste_questionnaires_tpN+1
                if ('/liste_questionnaires_tpN+1' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeTpRemplisN1Action', '_route' => 'liste_questionnaires_tpN+1',);
                }

            }

        }

        // phpk_logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'phpk_logout'];
        }

        if (0 === strpos($pathinfo, '/validation_')) {
            // validation_parking
            if (0 === strpos($pathinfo, '/validation_parking') && preg_match('#^/validation_parking/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation_parking']), array('_controller' => 'AppBundle\\Controller\\ValidationController::validationParkingAction',));
            }

            if (0 === strpos($pathinfo, '/validation_rtt')) {
                // validation_rtt
                if (preg_match('#^/validation_rtt/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation_rtt']), array('_controller' => 'AppBundle\\Controller\\ValidationController::validationRttAction',));
                }

                // validation_rttN+1
                if (0 === strpos($pathinfo, '/validation_rttN+1') && preg_match('#^/validation_rttN\\+1/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation_rttN+1']), array('_controller' => 'AppBundle\\Controller\\ValidationController::validationRttN1Action',));
                }

            } elseif (0 === strpos($pathinfo, '/validation_tp')) {
                // validation_tp
                if (preg_match('#^/validation_tp/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation_tp']), array('_controller' => 'AppBundle\\Controller\\ValidationController::validationTpAction',));
                }

                // validation_tpN+1
                if (0 === strpos($pathinfo, '/validation_tpN+1') && preg_match('#^/validation_tpN\\+1/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'validation_tpN+1']), array('_controller' => 'AppBundle\\Controller\\ValidationController::validationTpN1Action',));
                }

            }

        } elseif (0 === strpos($pathinfo, '/resultats_')) {
            if (0 === strpos($pathinfo, '/resultats_parking')) {
                // resultats_parking
                if ('/resultats_parking' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ResultatsController::ResultatsParkingAction', '_route' => 'resultats_parking',);
                }

                // resultats_parking_campagne
                if (0 === strpos($pathinfo, '/resultats_parking_campagne') && preg_match('#^/resultats_parking_campagne/(?P<idCampagne>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultats_parking_campagne']), array('_controller' => 'AppBundle\\Controller\\ResultatsController::getResultatsParkingAction',));
                }

            } elseif (0 === strpos($pathinfo, '/resultats_rtt')) {
                // resultats_rtt
                if ('/resultats_rtt' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\ResultatsController::ResultatsRttAction', '_route' => 'resultats_rtt',);
                }

                // resultats_rtt_campagne
                if (0 === strpos($pathinfo, '/resultats_rtt_campagne') && preg_match('#^/resultats_rtt_campagne/(?P<idCampagne>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultats_rtt_campagne']), array('_controller' => 'AppBundle\\Controller\\ResultatsController::getResultatsRttAction',));
                }

            }

            // resultats_tp
            if ('/resultats_tp' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\ResultatsController::ResultatsTpAction', '_route' => 'resultats_tp',);
            }

            if (0 === strpos($pathinfo, '/resultats_tp_campagne')) {
                // resultats_tp_campagne
                if (preg_match('#^/resultats_tp_campagne/(?P<idCampagne>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'resultats_tp_campagne']), array('_controller' => 'AppBundle\\Controller\\ResultatsController::getResultatsTpAction',));
                }

                // test
                if (preg_match('#^/resultats_tp_campagne/(?P<idCampagne>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'test']), array('_controller' => 'AppBundle\\Controller\\ResultatsController::getResultatsTpAction',));
                }

            }

        } elseif (0 === strpos($pathinfo, '/u')) {
            // utilisateur_parking
            if ('/utilisateur_parking' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\GestionUtilisateurController::GestionUtilisateurParkingAction', '_route' => 'utilisateur_parking',);
            }

            // user_park
            if (0 === strpos($pathinfo, '/user_park') && preg_match('#^/user_park(?:/(?P<idCampagne>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_park']), array('_controller' => 'AppBundle\\Controller\\GestionUtilisateurController::UserParkingAction', 'idCampagne' => 99,));
            }

            // anr_update_anr
            if ('/update_anr' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\AnrUpdateController::persistAction', '_route' => 'anr_update_anr',);
            }

        }

        // anr_test
        if ('/anr' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\AnrController::anrAction', '_route' => 'anr_test',);
        }

        // anr_agent
        if ('/agent' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\AnrController::agentAction', '_route' => 'anr_agent',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_js_routing_js']), array('_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
