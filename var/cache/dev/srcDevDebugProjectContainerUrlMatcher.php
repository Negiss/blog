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
                    '/blog' => array(array('_route' => 'blog_home', '_controller' => 'App\\Controller\\BlogController::home'), null, null, null),
                    '/blog/articles' => array(array('_route' => 'blog_articles', '_controller' => 'App\\Controller\\BlogController::index'), null, null, null),
                    '/blog/category' => array(array('_route' => 'blog_category_all', '_controller' => 'App\\Controller\\BlogController::showCategories'), null, null, null),
                    '/category/' => array(array('_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'), null, array('GET' => 0), null),
                    '/category/new' => array(array('_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/' => array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null),
                    '/lucky/number' => array(array('_route' => 'lucky', '_controller' => 'App\\Controller\\LuckyController::index'), null, null, null),
                    '/tag/' => array(array('_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'), null, array('GET' => 0), null),
                    '/tag/new' => array(array('_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'), null, array('GET' => 0, 'POST' => 1), null),
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
                    .'|/blog/(?'
                        .'|article(?:/([a-z0-9-]+))?(*:41)'
                        .'|category/([^/]++)(*:65)'
                    .')'
                    .'|/category/([^/]++)(?'
                        .'|(*:94)'
                        .'|/edit(*:106)'
                        .'|(*:114)'
                    .')'
                    .'|/tag/([^/]++)(?'
                        .'|(*:139)'
                        .'|/edit(*:152)'
                        .'|(*:160)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:200)'
                        .'|wdt/([^/]++)(*:220)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:266)'
                                .'|router(*:280)'
                                .'|exception(?'
                                    .'|(*:300)'
                                    .'|\\.css(*:313)'
                                .')'
                            .')'
                            .'|(*:323)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            41 => array(array('_route' => 'blog_show', 'slug' => null, '_controller' => 'App\\Controller\\BlogController::show'), array('slug'), null, null),
                            65 => array(array('_route' => 'blog_category', '_controller' => 'App\\Controller\\BlogController::showByCategory'), array('category'), null, null),
                            94 => array(array('_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'), array('id'), array('GET' => 0), null),
                            106 => array(array('_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            114 => array(array('_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'), array('id'), array('DELETE' => 0), null),
                            139 => array(array('_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'), array('id'), array('GET' => 0), null),
                            152 => array(array('_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            160 => array(array('_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'), array('id'), array('DELETE' => 0), null),
                            200 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            220 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            266 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            280 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            300 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            313 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            323 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (323 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
