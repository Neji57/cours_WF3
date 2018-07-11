<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)/(?'
                        .'|admin/post/(?'
                            .'|(*:87)'
                            .'|new(*:97)'
                            .'|(\\d+)(?'
                                .'|(*:112)'
                                .'|/edit(*:125)'
                            .')'
                            .'|([^/]++)/delete(*:149)'
                        .')'
                        .'|blog/(?'
                            .'|(*:166)'
                            .'|rss\\.xml(*:182)'
                            .'|p(?'
                                .'|age/([1-9]\\d*)(*:208)'
                                .'|osts/([^/]++)(*:229)'
                            .')'
                            .'|comment/([^/]++)/new(*:258)'
                            .'|search(*:272)'
                        .')'
                        .'|log(?'
                            .'|in(*:289)'
                            .'|out(*:300)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:341)'
                        .'|wdt/([^/]++)(*:361)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:407)'
                                .'|router(*:421)'
                                .'|exception(?'
                                    .'|(*:441)'
                                    .'|\\.css(*:454)'
                                .')'
                            .')'
                            .'|(*:464)'
                        .')'
                    .')'
                    .'|/(en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN)?(*:537)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 87:
                        $matches = array('_locale' => $matches[1] ?? null);

                        // admin_index
                        $ret = $this->mergeDefaults(array('_route' => 'admin_index') + $matches, array('_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_index;
                        }

                        return $ret;
                        not_admin_index:

                        // admin_post_index
                        $ret = $this->mergeDefaults(array('_route' => 'admin_post_index') + $matches, array('_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_post_index;
                        }

                        return $ret;
                        not_admin_post_index:

                        break;
                    default:
                        $routes = array(
                            97 => array(array('_route' => 'admin_post_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'), array('_locale'), array('GET' => 0, 'POST' => 1), null),
                            112 => array(array('_route' => 'admin_post_show', '_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'), array('_locale', 'id'), array('GET' => 0), null),
                            125 => array(array('_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'), array('_locale', 'id'), array('GET' => 0, 'POST' => 1), null),
                            149 => array(array('_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'), array('_locale', 'id'), array('POST' => 0), null),
                            166 => array(array('_route' => 'blog_index', 'page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            182 => array(array('_route' => 'blog_rss', 'page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            208 => array(array('_route' => 'blog_index_paginated', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'), array('_locale', 'page'), array('GET' => 0), null),
                            229 => array(array('_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'), array('_locale', 'slug'), array('GET' => 0), null),
                            258 => array(array('_route' => 'comment_new', '_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'), array('_locale', 'postSlug'), array('POST' => 0), null),
                            272 => array(array('_route' => 'blog_search', '_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            289 => array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'), array('_locale'), null, null),
                            300 => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'), array('_locale'), null, null),
                            341 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            361 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            407 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            421 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            441 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            454 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            464 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            537 => array(array('_route' => 'homepage', 'template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'), array('_locale'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (537 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
