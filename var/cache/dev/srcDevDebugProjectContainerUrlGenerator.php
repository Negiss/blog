<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'blog_home' => array(array(), array('_controller' => 'App\\Controller\\BlogController::home'), array(), array(array('text', '/blog')), array(), array()),
        'blog_articles' => array(array(), array('_controller' => 'App\\Controller\\BlogController::index'), array(), array(array('text', '/blog/articles')), array(), array()),
        'blog_show' => array(array('slug'), array('slug' => null, '_controller' => 'App\\Controller\\BlogController::show'), array('slug' => '[a-z0-9-]+'), array(array('variable', '/', '[a-z0-9-]+', 'slug'), array('text', '/blog/article')), array(), array()),
        'blog_category_all' => array(array(), array('_controller' => 'App\\Controller\\BlogController::showCategories'), array(), array(array('text', '/blog/category')), array(), array()),
        'blog_category' => array(array('category'), array('_controller' => 'App\\Controller\\BlogController::showByCategory'), array(), array(array('variable', '/', '[^/]++', 'category'), array('text', '/blog/category')), array(), array()),
        'category_index' => array(array(), array('_controller' => 'App\\Controller\\CategoryController::index'), array(), array(array('text', '/category/')), array(), array()),
        'category_new' => array(array(), array('_controller' => 'App\\Controller\\CategoryController::new'), array(), array(array('text', '/category/new')), array(), array()),
        'category_show' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/category')), array(), array()),
        'category_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/category')), array(), array()),
        'category_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/category')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'lucky' => array(array(), array('_controller' => 'App\\Controller\\LuckyController::index'), array(), array(array('text', '/lucky/number')), array(), array()),
        'tag_index' => array(array(), array('_controller' => 'App\\Controller\\TagController::index'), array(), array(array('text', '/tag/')), array(), array()),
        'tag_new' => array(array(), array('_controller' => 'App\\Controller\\TagController::new'), array(), array(array('text', '/tag/new')), array(), array()),
        'tag_show' => array(array('id'), array('_controller' => 'App\\Controller\\TagController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/tag')), array(), array()),
        'tag_edit' => array(array('id'), array('_controller' => 'App\\Controller\\TagController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/tag')), array(), array()),
        'tag_delete' => array(array('id'), array('_controller' => 'App\\Controller\\TagController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/tag')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
