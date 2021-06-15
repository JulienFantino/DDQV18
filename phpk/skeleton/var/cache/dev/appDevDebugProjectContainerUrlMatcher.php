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

        } elseif (0 === strpos($pathinfo, '/ddqcontrat')) {
            // ddqcontrat_index
            if ('/ddqcontrat' === $trimmedPathinfo) {
                $ret = array('_controller' => 'AppBundle\\Controller\\DdqContratController::indexAction', '_route' => 'ddqcontrat_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ddqcontrat_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo . '/', 'ddqcontrat_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_ddqcontrat_index;
                }

                return $ret;
            }
            not_ddqcontrat_index:

            // ddqcontrat_show
            if (preg_match('#^/ddqcontrat/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ddqcontrat_show']), array('_controller' => 'AppBundle\\Controller\\DdqContratController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_ddqcontrat_show;
                }

                return $ret;
            }
            not_ddqcontrat_show:

            // ddqcontrat_new
            if ('/ddqcontrat/new' === $pathinfo) {
                $ret = array('_controller' => 'AppBundle\\Controller\\DdqContratController::newAction', '_route' => 'ddqcontrat_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_ddqcontrat_new;
                }

                return $ret;
            }
            not_ddqcontrat_new:

            // ddqcontrat_edit
            if (preg_match('#^/ddqcontrat/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ddqcontrat_edit']), array('_controller' => 'AppBundle\\Controller\\DdqContratController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_ddqcontrat_edit;
                }

                return $ret;
            }
            not_ddqcontrat_edit:

            // ddqcontrat_delete
            if (preg_match('#^/ddqcontrat/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'ddqcontrat_delete']), array('_controller' => 'AppBundle\\Controller\\DdqContratController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_ddqcontrat_delete;
                }

                return $ret;
            }
            not_ddqcontrat_delete:

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
            if (0 === strpos($pathinfo, '/questionnaire_parking')) {
                // questionnaire_parking
                if (preg_match('#^/questionnaire_parking/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_parking']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireParkingAction',));
                }

                // questionnaire_parking_historique
                if (0 === strpos($pathinfo, '/questionnaire_parking_historique') && preg_match('#^/questionnaire_parking_historique/(?P<campagne>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'questionnaire_parking_historique']), array('_controller' => 'AppBundle\\Controller\\QuestionnairesController::getQuestionnaireParkingHistoriqueAction',));
                }

            } elseif (0 === strpos($pathinfo, '/questionnaire_rtt')) {
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

        }

        // quetionnaire_rttN+1
        if (0 === strpos($pathinfo, '/quetionnaire_rttN+1') && preg_match('#^/quetionnaire_rttN\\+1/(?P<idQuestionnaire>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'quetionnaire_rttN+1']), array('_controller' => 'AppBundle\\Controller\\AdministrationController::ConsultationRttN1Action',));
        }

        if (0 === strpos($pathinfo, '/historique_')) {
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

        } elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/liste_questionnaires_')) {
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

                    if (0 === strpos($pathinfo, '/liste_questionnaires_rttN+1_branche_')) {
                        // liste_questionnaires_rttN+1_branche_ressources
                        if ('/liste_questionnaires_rttN+1_branche_ressource' === $pathinfo) {
                            return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1BrancheRessourceAction', '_route' => 'liste_questionnaires_rttN+1_branche_ressources',);
                        }

                        // liste_questionnaires_rttN+1_branche_sante
                        if ('/liste_questionnaires_rttN+1_branche_sante' === $pathinfo) {
                            return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1BrancheSanteAction', '_route' => 'liste_questionnaires_rttN+1_branche_sante',);
                        }

                        // liste_questionnaires_rttN+1_branche_prod
                        if ('/liste_questionnaires_rttN+1_branche_production' === $pathinfo) {
                            return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1BrancheProdAction', '_route' => 'liste_questionnaires_rttN+1_branche_prod',);
                        }

                        // liste_questionnaires_rttN+1_branche_financiere
                        if ('/liste_questionnaires_rttN+1_branche_financiere' === $pathinfo) {
                            return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1BrancheFinanciereAction', '_route' => 'liste_questionnaires_rttN+1_branche_financiere',);
                        }

                        // liste_questionnaires_rttN+1_branche_direction
                        if ('/liste_questionnaires_rttN+1_branche_direction' === $pathinfo) {
                            return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1BrancheDirectionAction', '_route' => 'liste_questionnaires_rttN+1_branche_direction',);
                        }

                    }

                } elseif (0 === strpos($pathinfo, '/liste_questionnaires_tp')) {
                    // liste_questionnaires_tp
                    if ('/liste_questionnaires_tp' === $pathinfo) {
                        return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeTpRemplisAction', '_route' => 'liste_questionnaires_tp',);
                    }

                    // liste_questionnaires_tpN1N2
                    if ('/liste_questionnaires_tp' === $pathinfo) {
                        return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeTpRemplisAction', '_route' => 'liste_questionnaires_tpN1N2',);
                    }

                    // liste_questionnaires_tpN+1
                    if ('/liste_questionnaires_tpN+1' === $pathinfo) {
                        return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeTpRemplisN1Action', '_route' => 'liste_questionnaires_tpN+1',);
                    }

                }

            }

            // liste_questionnaires_rttN1N2
            if ('/liste_questionnaire_rttN1N2' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\ListeController::getListeRttRemplisN1N2Action', '_route' => 'liste_questionnaires_rttN1N2',);
            }

            // phpk_logout
            if ('/logout' === $pathinfo) {
                return ['_route' => 'phpk_logout'];
            }

        } elseif (0 === strpos($pathinfo, '/validation_')) {
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
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_park']), array('_controller' => 'AppBundle\\Controller\\GestionUtilisateurController::UserParkingAction', 'idCampagne' => 112,));
            }

            // anr_update_anr
            if ('/update_anr' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\AnrUpdateController::persistAction', '_route' => 'anr_update_anr',);
            }

        } elseif (0 === strpos($pathinfo, '/AdminRtt')) {
            // adminRttGlobal
            if ('/AdminRttAll' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetDataGlobalAgentRttAction', '_route' => 'adminRttGlobal',);
            }

            if (0 === strpos($pathinfo, '/AdminRtt3')) {
                // adminRtt39h00Fixe
                if ('/AdminRtt39h00Fixe' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetData39h00FixeAgentRttAction', '_route' => 'adminRtt39h00Fixe',);
                }

                // adminRtt39h00Quadrimestre
                if ('/AdminRtt39h00Quadrimestre' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetData39h00QuadrimestreAgentRttAction', '_route' => 'adminRtt39h00Quadrimestre',);
                }

                // adminRtt37h00
                if ('/AdminRtt37h00' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetData37h00AgentRttAction', '_route' => 'adminRtt37h00',);
                }

                // adminRtt36h00
                if ('/AdminRtt36h00' === $pathinfo) {
                    return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetData36h00AgentRttAction', '_route' => 'adminRtt36h00',);
                }

            }

            // adminRttNonValide
            if ('/AdminRttNonValide' === $pathinfo) {
                return array('_controller' => 'AppBundle\\Controller\\AdministrationController::GetDataNonValideAgentRttAction', '_route' => 'adminRttNonValide',);
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

        // greve_agent
        if ('/greve_agent' === $pathinfo) {
            return array('_controller' => 'AppBundle\\Controller\\RecensementController::GetAgentAction', '_route' => 'greve_agent',);
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
