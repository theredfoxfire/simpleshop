<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/ss_')) {
            if (0 === strpos($pathinfo, '/ss_orderer')) {
                // ss_orderer
                if (rtrim($pathinfo, '/') === '/ss_orderer') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_orderer');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::indexAction',  '_route' => 'ss_orderer',);
                }

                // ss_orderer_show
                if (preg_match('#^/ss_orderer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_orderer_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::showAction',));
                }

                if (0 === strpos($pathinfo, '/ss_orderer/new')) {
                    // ss_orderer_new
                    if ($pathinfo === '/ss_orderer/new') {
                        return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::newAction',  '_route' => 'ss_orderer_new',);
                    }

                    // ss_orderer_newemail
                    if ($pathinfo === '/ss_orderer/newemail') {
                        return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::emailAction',  '_route' => 'ss_orderer_newemail',);
                    }

                }

                // ss_orderer_emailorder
                if ($pathinfo === '/ss_orderer/emailorder') {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_ss_orderer_emailorder;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::oldemailAction',  '_route' => 'ss_orderer_emailorder',);
                }
                not_ss_orderer_emailorder:

                // ss_orderer_create
                if ($pathinfo === '/ss_orderer/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_orderer_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::createAction',  '_route' => 'ss_orderer_create',);
                }
                not_ss_orderer_create:

                // ss_orderer_edit
                if (preg_match('#^/ss_orderer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_orderer_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::editAction',));
                }

                // ss_orderer_update
                if (preg_match('#^/ss_orderer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ss_orderer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_orderer_update')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::updateAction',));
                }
                not_ss_orderer_update:

                // ss_orderer_delete
                if (preg_match('#^/ss_orderer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ss_orderer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_orderer_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::deleteAction',));
                }
                not_ss_orderer_delete:

                // ss_orderer_confirm
                if (preg_match('#^/ss_orderer/(?P<pesanan>[^/]++)/(?P<orderer>[^/]++)/confirm$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_orderer_confirm')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::confirmAction',));
                }

                // ss_orderer_thanks
                if ($pathinfo === '/ss_orderer/thanks') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\OrdererController::thanksAction',  '_route' => 'ss_orderer_thanks',);
                }

            }

            if (0 === strpos($pathinfo, '/ss_pesanan')) {
                // ss_pesanan
                if (rtrim($pathinfo, '/') === '/ss_pesanan') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_pesanan');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::indexAction',  '_route' => 'ss_pesanan',);
                }

                // ss_pesanan_check
                if ($pathinfo === '/ss_pesanan/check') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::checkAction',  '_route' => 'ss_pesanan_check',);
                }

                // ss_pesanan_show
                if (preg_match('#^/ss_pesanan/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_pesanan_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::showAction',));
                }

                // ss_pesanan_new
                if ($pathinfo === '/ss_pesanan/new') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::newAction',  '_route' => 'ss_pesanan_new',);
                }

                // ss_pesanan_create
                if ($pathinfo === '/ss_pesanan/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_pesanan_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::createAction',  '_route' => 'ss_pesanan_create',);
                }
                not_ss_pesanan_create:

                // ss_pesanan_edit
                if (preg_match('#^/ss_pesanan/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_pesanan_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::editAction',));
                }

                // ss_pesanan_update
                if (preg_match('#^/ss_pesanan/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ss_pesanan_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_pesanan_update')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::updateAction',));
                }
                not_ss_pesanan_update:

                // ss_pesanan_delete
                if (preg_match('#^/ss_pesanan/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ss_pesanan_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_pesanan_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananController::deleteAction',));
                }
                not_ss_pesanan_delete:

            }

        }

        // ss_ss_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ss_ss_homepage');
            }

            return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::indexAction',  '_route' => 'ss_ss_homepage',);
        }

        if (0 === strpos($pathinfo, '/ss_')) {
            if (0 === strpos($pathinfo, '/ss_product')) {
                // ss_product
                if (rtrim($pathinfo, '/') === '/ss_product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_product');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::indexAction',  '_route' => 'ss_product',);
                }

                // ss_product_show
                if (preg_match('#^/ss_product/(?P<category>[^/]++)/(?P<id>\\d+)/(?P<product>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_product_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::showAction',));
                }

                // ss_product_new
                if ($pathinfo === '/ss_product/new') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::newAction',  '_route' => 'ss_product_new',);
                }

                // ss_product_create
                if ($pathinfo === '/ss_product/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_product_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::createAction',  '_route' => 'ss_product_create',);
                }
                not_ss_product_create:

                // ss_product_edit
                if (preg_match('#^/ss_product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_product_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::editAction',));
                }

                // ss_product_update
                if (preg_match('#^/ss_product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ss_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_product_update')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::updateAction',));
                }
                not_ss_product_update:

                // ss_product_delete
                if (preg_match('#^/ss_product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ss_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_product_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::deleteAction',));
                }
                not_ss_product_delete:

                // ss_product_search
                if ($pathinfo === '/ss_product/search') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductController::searchAction',  '_route' => 'ss_product_search',);
                }

            }

            if (0 === strpos($pathinfo, '/ss_category')) {
                // ss_category
                if (rtrim($pathinfo, '/') === '/ss_category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_category');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::indexAction',  '_route' => 'ss_category',);
                }

                // ss_category_show
                if (preg_match('#^/ss_category/(?P<gender>[^/]++)/(?P<genid>[^/]++)/(?P<slug>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_category_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::showAction',));
                }

                // ss_category_new
                if ($pathinfo === '/ss_category/new') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::newAction',  '_route' => 'ss_category_new',);
                }

                // ss_category_create
                if ($pathinfo === '/ss_category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_category_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::createAction',  '_route' => 'ss_category_create',);
                }
                not_ss_category_create:

                // ss_category_edit
                if (preg_match('#^/ss_category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_category_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::editAction',));
                }

                // ss_category_update
                if (preg_match('#^/ss_category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ss_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_category_update')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::updateAction',));
                }
                not_ss_category_update:

                // ss_category_delete
                if (preg_match('#^/ss_category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ss_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_category_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_ss_category_delete:

                // ss_category_gender
                if (preg_match('#^/ss_category/(?P<gender>[^/]++)/(?P<id>[^/]++)/all$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_category_gender')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryController::genderAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ss_foto')) {
                // ss_foto
                if (rtrim($pathinfo, '/') === '/ss_foto') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_foto');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::indexAction',  '_route' => 'ss_foto',);
                }

                // ss_foto_show
                if (preg_match('#^/ss_foto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_foto_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::showAction',));
                }

                // ss_foto_new
                if ($pathinfo === '/ss_foto/new') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::newAction',  '_route' => 'ss_foto_new',);
                }

                // ss_foto_create
                if ($pathinfo === '/ss_foto/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_foto_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::createAction',  '_route' => 'ss_foto_create',);
                }
                not_ss_foto_create:

                // ss_foto_edit
                if (preg_match('#^/ss_foto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_foto_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::editAction',));
                }

                // ss_foto_update
                if (preg_match('#^/ss_foto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ss_foto_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_foto_update')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::updateAction',));
                }
                not_ss_foto_update:

                // ss_foto_delete
                if (preg_match('#^/ss_foto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ss_foto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_foto_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductFotoController::deleteAction',));
                }
                not_ss_foto_delete:

            }

            if (0 === strpos($pathinfo, '/ss_cart')) {
                // ss_cart
                if (rtrim($pathinfo, '/') === '/ss_cart') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ss_cart');
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::indexAction',  '_route' => 'ss_cart',);
                }

                // ss_cart_show
                if ($pathinfo === '/ss_cart/show') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::showAction',  '_route' => 'ss_cart_show',);
                }

                // ss_cart_new
                if ($pathinfo === '/ss_cart/new') {
                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::newAction',  '_route' => 'ss_cart_new',);
                }

                // ss_cart_create
                if ($pathinfo === '/ss_cart/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ss_cart_create;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::createAction',  '_route' => 'ss_cart_create',);
                }
                not_ss_cart_create:

                // ss_cart_edit
                if (preg_match('#^/ss_cart/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_cart_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::editAction',));
                }

                // ss_cart_update
                if ($pathinfo === '/ss_cart/update') {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_ss_cart_update;
                    }

                    return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::updateAction',  '_route' => 'ss_cart_update',);
                }
                not_ss_cart_update:

                // ss_cart_delete
                if (preg_match('#^/ss_cart/(?P<token>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                        goto not_ss_cart_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_cart_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::deleteAction',));
                }
                not_ss_cart_delete:

                // ss_cart_remove
                if (preg_match('#^/ss_cart/(?P<token>[^/]++)/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                        goto not_ss_cart_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ss_cart_remove')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CartController::removeAction',));
                }
                not_ss_cart_remove:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/ss/ss')) {
                    if (0 === strpos($pathinfo, '/admin/ss/ss/category')) {
                        // admin_ss_ss_category_list
                        if ($pathinfo === '/admin/ss/ss/category/list') {
                            return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_list',  '_route' => 'admin_ss_ss_category_list',);
                        }

                        // admin_ss_ss_category_create
                        if ($pathinfo === '/admin/ss/ss/category/create') {
                            return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_create',  '_route' => 'admin_ss_ss_category_create',);
                        }

                        // admin_ss_ss_category_batch
                        if ($pathinfo === '/admin/ss/ss/category/batch') {
                            return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_batch',  '_route' => 'admin_ss_ss_category_batch',);
                        }

                        // admin_ss_ss_category_edit
                        if (preg_match('#^/admin/ss/ss/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_category_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_edit',));
                        }

                        // admin_ss_ss_category_delete
                        if (preg_match('#^/admin/ss/ss/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_category_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_delete',));
                        }

                        // admin_ss_ss_category_show
                        if (preg_match('#^/admin/ss/ss/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_category_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_show',));
                        }

                        // admin_ss_ss_category_export
                        if ($pathinfo === '/admin/ss/ss/category/export') {
                            return array (  '_controller' => 'Ss\\SsBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ss.ss.admin.category',  '_sonata_name' => 'admin_ss_ss_category_export',  '_route' => 'admin_ss_ss_category_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/ss/ss/p')) {
                        if (0 === strpos($pathinfo, '/admin/ss/ss/product')) {
                            // admin_ss_ss_product_list
                            if ($pathinfo === '/admin/ss/ss/product/list') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::listAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_list',  '_route' => 'admin_ss_ss_product_list',);
                            }

                            // admin_ss_ss_product_create
                            if ($pathinfo === '/admin/ss/ss/product/create') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::createAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_create',  '_route' => 'admin_ss_ss_product_create',);
                            }

                            // admin_ss_ss_product_batch
                            if ($pathinfo === '/admin/ss/ss/product/batch') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::batchAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_batch',  '_route' => 'admin_ss_ss_product_batch',);
                            }

                            // admin_ss_ss_product_edit
                            if (preg_match('#^/admin/ss/ss/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_product_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::editAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_edit',));
                            }

                            // admin_ss_ss_product_delete
                            if (preg_match('#^/admin/ss/ss/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_product_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::deleteAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_delete',));
                            }

                            // admin_ss_ss_product_show
                            if (preg_match('#^/admin/ss/ss/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_product_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::showAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_show',));
                            }

                            // admin_ss_ss_product_export
                            if ($pathinfo === '/admin/ss/ss/product/export') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\ProductAdminController::exportAction',  '_sonata_admin' => 'ss.ss.admin.product',  '_sonata_name' => 'admin_ss_ss_product_export',  '_route' => 'admin_ss_ss_product_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/ss/ss/pesanan')) {
                            // admin_ss_ss_pesanan_list
                            if ($pathinfo === '/admin/ss/ss/pesanan/list') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::listAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_list',  '_route' => 'admin_ss_ss_pesanan_list',);
                            }

                            // admin_ss_ss_pesanan_create
                            if ($pathinfo === '/admin/ss/ss/pesanan/create') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::createAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_create',  '_route' => 'admin_ss_ss_pesanan_create',);
                            }

                            // admin_ss_ss_pesanan_batch
                            if ($pathinfo === '/admin/ss/ss/pesanan/batch') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::batchAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_batch',  '_route' => 'admin_ss_ss_pesanan_batch',);
                            }

                            // admin_ss_ss_pesanan_edit
                            if (preg_match('#^/admin/ss/ss/pesanan/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_pesanan_edit')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::editAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_edit',));
                            }

                            // admin_ss_ss_pesanan_delete
                            if (preg_match('#^/admin/ss/ss/pesanan/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_pesanan_delete')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::deleteAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_delete',));
                            }

                            // admin_ss_ss_pesanan_show
                            if (preg_match('#^/admin/ss/ss/pesanan/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ss_ss_pesanan_show')), array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::showAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_show',));
                            }

                            // admin_ss_ss_pesanan_export
                            if ($pathinfo === '/admin/ss/ss/pesanan/export') {
                                return array (  '_controller' => 'Ss\\SsBundle\\Controller\\PesananAdminController::exportAction',  '_sonata_admin' => 'ss.ss.admin.pesanan',  '_sonata_name' => 'admin_ss_ss_pesanan_export',  '_route' => 'admin_ss_ss_pesanan_export',);
                            }

                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
