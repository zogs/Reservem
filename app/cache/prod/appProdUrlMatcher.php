<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // fr__RG__crc_reserv_home
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_home',);
        }

        // en__RG__crc_reserv_home
        if ($pathinfo === '/en/accueil') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_home',);
        }

        // fr__RG__crc_reserv_device_available
        if (0 === strpos($pathinfo, '/devices/available') && preg_match('#^/devices/available/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_available')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::availablesAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_available
        if (0 === strpos($pathinfo, '/en/devices/available') && preg_match('#^/en/devices/available/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_available')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::availablesAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_index
        if (0 === strpos($pathinfo, '/devices') && preg_match('#^/devices/(?P<department>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_index')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::indexAction',  'type' => NULL,  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_index
        if (0 === strpos($pathinfo, '/en/devices') && preg_match('#^/en/devices/(?P<department>[^/]++)(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_index')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::indexAction',  'type' => NULL,  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_onfield
        if (0 === strpos($pathinfo, '/sorties') && preg_match('#^/sorties/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_onfield')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::onfieldAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_onfield
        if (0 === strpos($pathinfo, '/en/sorties') && preg_match('#^/en/sorties/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_onfield')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::onfieldAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_stock
        if (0 === strpos($pathinfo, '/stock') && preg_match('#^/stock/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_stock')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::stockAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_stock
        if (0 === strpos($pathinfo, '/en/stock') && preg_match('#^/en/stock/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_stock')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::stockAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_print_label
        if (0 === strpos($pathinfo, '/print/device') && preg_match('#^/print/device/(?P<device>[^/]++)(?:/(?P<size>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_print_label')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::printLabelAction',  'size' => NULL,  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_print_label
        if (0 === strpos($pathinfo, '/en/print/device') && preg_match('#^/en/print/device/(?P<device>[^/]++)(?:/(?P<size>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_print_label')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::printLabelAction',  'size' => NULL,  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_print_list
        if (0 === strpos($pathinfo, '/print/devices') && preg_match('#^/print/devices/(?P<department>[^/]++)(?:/(?P<size>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_print_list')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::printListAction',  'size' => NULL,  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_print_list
        if (0 === strpos($pathinfo, '/en/print/devices') && preg_match('#^/en/print/devices/(?P<department>[^/]++)(?:/(?P<size>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_print_list')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::printListAction',  'size' => NULL,  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_edit
        if (0 === strpos($pathinfo, '/device/edit') && preg_match('#^/device/edit/(?P<device>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_edit')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::editAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_edit
        if (0 === strpos($pathinfo, '/en/device/edit') && preg_match('#^/en/device/edit/(?P<device>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_edit')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::editAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_create
        if (0 === strpos($pathinfo, '/device/create') && preg_match('#^/device/create(?:/(?P<device>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_create')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::createAction',  'device' => NULL,  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_create
        if (0 === strpos($pathinfo, '/en/device/create') && preg_match('#^/en/device/create(?:/(?P<device>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_create')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::createAction',  'device' => NULL,  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_remove
        if (0 === strpos($pathinfo, '/device/remove') && preg_match('#^/device/remove/(?P<device>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_device_remove')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::removeAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_device_remove
        if (0 === strpos($pathinfo, '/en/device/remove') && preg_match('#^/en/device/remove/(?P<device>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_device_remove')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::removeAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_device_takeout
        if ($pathinfo === '/device/takeout') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::takeoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_device_takeout',);
        }

        // en__RG__crc_reserv_device_takeout
        if ($pathinfo === '/en/device/takeout') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::takeoutAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_device_takeout',);
        }

        // fr__RG__crc_reserv_device_return
        if ($pathinfo === '/device/return') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::returnAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_device_return',);
        }

        // en__RG__crc_reserv_device_return
        if ($pathinfo === '/en/device/return') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DeviceController::returnAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_device_return',);
        }

        // fr__RG__crc_reserv_reserver
        if (0 === strpos($pathinfo, '/reservation') && preg_match('#^/reservation/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_reserver')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::createAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_reserver
        if (0 === strpos($pathinfo, '/en/reservation') && preg_match('#^/en/reservation/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_reserver')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::createAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_recap
        if (0 === strpos($pathinfo, '/reservation/recapitulatif') && preg_match('#^/reservation/recapitulatif/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_recap')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::recapAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_recap
        if (0 === strpos($pathinfo, '/en/reservation/recapitulatif') && preg_match('#^/en/reservation/recapitulatif/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_recap')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::recapAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_add_devices
        if (0 === strpos($pathinfo, '/reservation/add') && preg_match('#^/reservation/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_add_devices')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::addDevicesAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_add_devices
        if (0 === strpos($pathinfo, '/en/reservation/add') && preg_match('#^/en/reservation/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_add_devices')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::addDevicesAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_view
        if (0 === strpos($pathinfo, '/reservation/view') && preg_match('#^/reservation/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_view')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::viewAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_view
        if (0 === strpos($pathinfo, '/en/reservation/view') && preg_match('#^/en/reservation/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_view')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::viewAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_confirm
        if (0 === strpos($pathinfo, '/reservation/confirmer') && preg_match('#^/reservation/confirmer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_confirm')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::confirmAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_confirm
        if (0 === strpos($pathinfo, '/en/reservation/confirmer') && preg_match('#^/en/reservation/confirmer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_confirm')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::confirmAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_cancel
        if (0 === strpos($pathinfo, '/reservation/cancel') && preg_match('#^/reservation/cancel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_cancel')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::cancelAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_cancel
        if (0 === strpos($pathinfo, '/en/reservation/cancel') && preg_match('#^/en/reservation/cancel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_cancel')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::cancelAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_list
        if (0 === strpos($pathinfo, '/reservation/list') && preg_match('#^/reservation/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_list')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::listAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_list
        if (0 === strpos($pathinfo, '/en/reservation/list') && preg_match('#^/en/reservation/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_list')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::listAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_my_reservations
        if ($pathinfo === '/my/reservations') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::mineAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_my_reservations',);
        }

        // en__RG__crc_reserv_my_reservations
        if ($pathinfo === '/en/my/reservations') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::mineAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_my_reservations',);
        }

        // fr__RG__crc_reserv_notify_device
        if (0 === strpos($pathinfo, '/device/notify/missing') && preg_match('#^/device/notify/missing/(?P<device>[^/]++)(?:/(?P<reservation>[^/]++)(?:/(?P<redirect>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_notify_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::notifyDeviceDefectedAction',  'reservation' => NULL,  'redirect' => NULL,  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_notify_device
        if (0 === strpos($pathinfo, '/en/device/notify/missing') && preg_match('#^/en/device/notify/missing/(?P<device>[^/]++)(?:/(?P<reservation>[^/]++)(?:/(?P<redirect>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_notify_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::notifyDeviceDefectedAction',  'reservation' => NULL,  'redirect' => NULL,  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_replace_device_missing
        if (0 === strpos($pathinfo, '/reservation/device/replace/missing') && preg_match('#^/reservation/device/replace/missing/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_replace_device_missing')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::replaceDeviceMissingAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_replace_device_missing
        if (0 === strpos($pathinfo, '/en/reservation/device/replace/missing') && preg_match('#^/en/reservation/device/replace/missing/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_replace_device_missing')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::replaceDeviceMissingAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_replace_device_defected
        if (0 === strpos($pathinfo, '/reservation/device/replace/defected') && preg_match('#^/reservation/device/replace/defected/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_replace_device_defected')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::replaceDeviceDefectedAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_replace_device_defected
        if (0 === strpos($pathinfo, '/en/reservation/device/replace/defected') && preg_match('#^/en/reservation/device/replace/defected/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_replace_device_defected')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::replaceDeviceDefectedAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_cancel_device
        if (0 === strpos($pathinfo, '/reservation/device/cancel') && preg_match('#^/reservation/device/cancel/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_cancel_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::cancelDeviceAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_cancel_device
        if (0 === strpos($pathinfo, '/en/reservation/device/cancel') && preg_match('#^/en/reservation/device/cancel/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_cancel_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::cancelDeviceAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_takeout
        if (0 === strpos($pathinfo, '/reservation/sortie') && preg_match('#^/reservation/sortie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_takeout')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::takeoutAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_takeout
        if (0 === strpos($pathinfo, '/en/reservation/sortie') && preg_match('#^/en/reservation/sortie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_takeout')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::takeoutAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_takeout_complete
        if (0 === strpos($pathinfo, '/reservation/takeout/completed') && preg_match('#^/reservation/takeout/completed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_takeout_complete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::completeTakeoutAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_takeout_complete
        if (0 === strpos($pathinfo, '/en/reservation/takeout/completed') && preg_match('#^/en/reservation/takeout/completed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_takeout_complete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::completeTakeoutAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_return
        if (0 === strpos($pathinfo, '/reservation/retour') && preg_match('#^/reservation/retour/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_return')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_return
        if (0 === strpos($pathinfo, '/en/reservation/retour') && preg_match('#^/en/reservation/retour/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_return')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_return_complete
        if (0 === strpos($pathinfo, '/reservation/retour/completed') && preg_match('#^/reservation/retour/completed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_return_complete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::completeReturnAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_return_complete
        if (0 === strpos($pathinfo, '/en/reservation/retour/completed') && preg_match('#^/en/reservation/retour/completed/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_return_complete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::completeReturnAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_extend
        if (0 === strpos($pathinfo, '/reservation/extend') && preg_match('#^/reservation/extend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_extend')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::extendAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_extend
        if (0 === strpos($pathinfo, '/en/reservation/extend') && preg_match('#^/en/reservation/extend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_extend')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::extendAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_return_device
        if (0 === strpos($pathinfo, '/reservation/return/device') && preg_match('#^/reservation/return/device/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_return_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_return_device
        if (0 === strpos($pathinfo, '/en/reservation/return/device') && preg_match('#^/en/reservation/return/device/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_return_device')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_return_device_missing
        if (0 === strpos($pathinfo, '/reservation/return/device/missing') && preg_match('#^/reservation/return/device/missing/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_return_device_missing')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceMissingAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_return_device_missing
        if (0 === strpos($pathinfo, '/en/reservation/return/device/missing') && preg_match('#^/en/reservation/return/device/missing/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_return_device_missing')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceMissingAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_return_device_defected
        if (0 === strpos($pathinfo, '/reservation/return/device/defected') && preg_match('#^/reservation/return/device/defected/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_return_device_defected')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceDefectedAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_return_device_defected
        if (0 === strpos($pathinfo, '/en/reservation/return/device/defected') && preg_match('#^/en/reservation/return/device/defected/(?P<device>[^/]++)/(?P<reservation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_return_device_defected')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::returnDeviceDefectedAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_check_incoming_begin
        if ($pathinfo === '/reservation/check/begin') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::checkIncomingTakeoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_check_incoming_begin',);
        }

        // en__RG__crc_reserv_check_incoming_begin
        if ($pathinfo === '/en/reservation/check/begin') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::checkIncomingTakeoutAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_check_incoming_begin',);
        }

        // fr__RG__crc_reserv_check_incoming_end
        if ($pathinfo === '/reservation/check/end') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::checkIncomingReturnAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_check_incoming_end',);
        }

        // en__RG__crc_reserv_check_incoming_end
        if ($pathinfo === '/en/reservation/check/end') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\ReservationController::checkIncomingReturnAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_check_incoming_end',);
        }

        // fr__RG__crc_reserv_department_index
        if ($pathinfo === '/department/index') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_department_index',);
        }

        // en__RG__crc_reserv_department_index
        if ($pathinfo === '/en/department/index') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_department_index',);
        }

        // fr__RG__crc_reserv_department_create
        if ($pathinfo === '/department/create') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::createAction',  '_locale' => 'fr',  '_route' => 'fr__RG__crc_reserv_department_create',);
        }

        // en__RG__crc_reserv_department_create
        if ($pathinfo === '/en/department/create') {
            return array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::createAction',  '_locale' => 'en',  '_route' => 'en__RG__crc_reserv_department_create',);
        }

        // fr__RG__crc_reserv_department_edit
        if (0 === strpos($pathinfo, '/admin/department/edit') && preg_match('#^/admin/department/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_department_edit')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::editAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_department_edit
        if (0 === strpos($pathinfo, '/en/admin/department/edit') && preg_match('#^/en/admin/department/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_department_edit')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::editAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_department_admin
        if (0 === strpos($pathinfo, '/admin/department') && preg_match('#^/admin/department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_department_admin')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::adminAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_department_admin
        if (0 === strpos($pathinfo, '/en/admin/department') && preg_match('#^/en/admin/department/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_department_admin')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::adminAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_department_adduser
        if (0 === strpos($pathinfo, '/admin/department/addmember') && preg_match('#^/admin/department/addmember/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_department_adduser')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::addMemberAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_department_adduser
        if (0 === strpos($pathinfo, '/en/admin/department/addmember') && preg_match('#^/en/admin/department/addmember/(?P<department>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_department_adduser')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::addMemberAction',  '_locale' => 'en',));
        }

        // fr__RG__crc_reserv_department_delete
        if (0 === strpos($pathinfo, '/admin/department/delete') && preg_match('#^/admin/department/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__crc_reserv_department_delete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::deleteAction',  '_locale' => 'fr',));
        }

        // en__RG__crc_reserv_department_delete
        if (0 === strpos($pathinfo, '/en/admin/department/delete') && preg_match('#^/en/admin/department/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__crc_reserv_department_delete')), array (  '_controller' => 'Crc\\ReservBundle\\Controller\\DepartmentController::deleteAction',  '_locale' => 'en',));
        }

        // fr__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/oauth-login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'fr',  '_route' => 'fr__RG__hwi_oauth_connect',);
        }

        // en__RG__hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/en/oauth-login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_locale' => 'en',  '_route' => 'en__RG__hwi_oauth_connect',);
        }

        // fr__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/oauth-connect') && preg_match('#^/oauth\\-connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'fr',));
        }

        // en__RG__hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/en/oauth-connect') && preg_match('#^/en/oauth\\-connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  '_locale' => 'en',));
        }

        // fr__RG__facebook_login
        if ($pathinfo === '/login/check-facebook') {
            return array (  '_locale' => 'fr',  '_route' => 'fr__RG__facebook_login',);
        }

        // en__RG__facebook_login
        if ($pathinfo === '/en/login/check-facebook') {
            return array (  '_locale' => 'en',  '_route' => 'en__RG__facebook_login',);
        }

        // fr__RG__user_delete_me
        if (0 === strpos($pathinfo, '/profile/delete') && preg_match('#^/profile/delete(?:/(?P<template>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__user_delete_me')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::deleteAction',  'template' => 'delete',  '_locale' => 'fr',));
        }

        // en__RG__user_delete_me
        if (0 === strpos($pathinfo, '/en/profile/delete') && preg_match('#^/en/profile/delete(?:/(?P<template>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__user_delete_me')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::deleteAction',  'template' => 'delete',  '_locale' => 'en',));
        }

        // fr__RG__user_request_activation_mail
        if ($pathinfo === '/activation/me') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::requestActivationMailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__user_request_activation_mail',);
        }

        // en__RG__user_request_activation_mail
        if ($pathinfo === '/en/activation/me') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::requestActivationMailAction',  '_locale' => 'en',  '_route' => 'en__RG__user_request_activation_mail',);
        }

        // fr__RG__fos_user_security_login
        if ($pathinfo === '/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_security_login;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_login',);
        }
        not_fr__RG__fos_user_security_login:

        // en__RG__fos_user_security_login
        if ($pathinfo === '/en/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_security_login;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_login',);
        }
        not_en__RG__fos_user_security_login:

        // fr__RG__fos_user_security_check
        if ($pathinfo === '/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_check',);
        }
        not_fr__RG__fos_user_security_check:

        // en__RG__fos_user_security_check
        if ($pathinfo === '/en/login_check') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_security_check;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_check',);
        }
        not_en__RG__fos_user_security_check:

        // fr__RG__fos_user_security_logout
        if ($pathinfo === '/logout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_security_logout',);
        }
        not_fr__RG__fos_user_security_logout:

        // en__RG__fos_user_security_logout
        if ($pathinfo === '/en/logout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_security_logout',);
        }
        not_en__RG__fos_user_security_logout:

        // fr__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_show',);
        }
        not_fr__RG__fos_user_profile_show:

        // en__RG__fos_user_profile_show
        if (rtrim($pathinfo, '/') === '/en/profile') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_profile_show');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_show',);
        }
        not_en__RG__fos_user_profile_show:

        // fr__RG__fos_user_profile_edit
        if ($pathinfo === '/profile/edit') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_profile_edit;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_profile_edit',);
        }
        not_fr__RG__fos_user_profile_edit:

        // en__RG__fos_user_profile_edit
        if ($pathinfo === '/en/profile/edit') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_profile_edit;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_profile_edit',);
        }
        not_en__RG__fos_user_profile_edit:

        // fr__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/register') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_register',);
        }
        not_fr__RG__fos_user_registration_register:

        // en__RG__fos_user_registration_register
        if (rtrim($pathinfo, '/') === '/en/register') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_registration_register;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__fos_user_registration_register');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_register',);
        }
        not_en__RG__fos_user_registration_register:

        // fr__RG__fos_user_registration_check_email
        if ($pathinfo === '/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_check_email',);
        }
        not_fr__RG__fos_user_registration_check_email:

        // en__RG__fos_user_registration_check_email
        if ($pathinfo === '/en/register/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_check_email',);
        }
        not_en__RG__fos_user_registration_check_email:

        // fr__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_user_registration_confirm:

        // en__RG__fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/en/register/confirm') && preg_match('#^/en/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_registration_confirm:

        // fr__RG__fos_user_registration_confirmed
        if ($pathinfo === '/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_registration_confirmed',);
        }
        not_fr__RG__fos_user_registration_confirmed:

        // en__RG__fos_user_registration_confirmed
        if ($pathinfo === '/en/register/confirmed') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_registration_confirmed;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_registration_confirmed',);
        }
        not_en__RG__fos_user_registration_confirmed:

        // fr__RG__fos_user_resetting_request
        if ($pathinfo === '/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_request',);
        }
        not_fr__RG__fos_user_resetting_request:

        // en__RG__fos_user_resetting_request
        if ($pathinfo === '/en/resetting/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_request;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::requestAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_request',);
        }
        not_en__RG__fos_user_resetting_request:

        // fr__RG__fos_user_resetting_send_email
        if ($pathinfo === '/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_send_email',);
        }
        not_fr__RG__fos_user_resetting_send_email:

        // en__RG__fos_user_resetting_send_email
        if ($pathinfo === '/en/resetting/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_send_email',);
        }
        not_en__RG__fos_user_resetting_send_email:

        // fr__RG__fos_user_resetting_check_email
        if ($pathinfo === '/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_resetting_check_email',);
        }
        not_fr__RG__fos_user_resetting_check_email:

        // en__RG__fos_user_resetting_check_email
        if ($pathinfo === '/en/resetting/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_resetting_check_email',);
        }
        not_en__RG__fos_user_resetting_check_email:

        // fr__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_user_resetting_reset')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_user_resetting_reset:

        // en__RG__fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/en/resetting/reset') && preg_match('#^/en/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_user_resetting_reset')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\ResettingController::resetAction',  '_locale' => 'en',));
        }
        not_en__RG__fos_user_resetting_reset:

        // fr__RG__fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'fr',  '_route' => 'fr__RG__fos_user_change_password',);
        }
        not_fr__RG__fos_user_change_password:

        // en__RG__fos_user_change_password
        if ($pathinfo === '/en/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_locale' => 'en',  '_route' => 'en__RG__fos_user_change_password',);
        }
        not_en__RG__fos_user_change_password:

        // fr__RG__user_login_checker
        if ($pathinfo === '/check/username') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::checkUsernameAction',  '_locale' => 'fr',  '_route' => 'fr__RG__user_login_checker',);
        }

        // en__RG__user_login_checker
        if ($pathinfo === '/en/check/username') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::checkUsernameAction',  '_locale' => 'en',  '_route' => 'en__RG__user_login_checker',);
        }

        // fr__RG__user_email_checker
        if ($pathinfo === '/check/email') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::checkEmailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__user_email_checker',);
        }

        // en__RG__user_email_checker
        if ($pathinfo === '/en/check/email') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::checkEmailAction',  '_locale' => 'en',  '_route' => 'en__RG__user_email_checker',);
        }

        // fr__RG__user_profil_view
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>\\d+)/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__user_profil_view')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::viewProfilAction',  '_locale' => 'fr',));
        }

        // en__RG__user_profil_view
        if (0 === strpos($pathinfo, '/en/user') && preg_match('#^/en/user/(?P<id>\\d+)/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__user_profil_view')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\UserController::viewProfilAction',  '_locale' => 'en',));
        }

        // fr__RG__admin_user_index
        if ($pathinfo === '/admin/user/index') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\AdminController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_user_index',);
        }

        // en__RG__admin_user_index
        if ($pathinfo === '/en/admin/user/index') {
            return array (  '_controller' => 'Zogs\\UserBundle\\Controller\\AdminController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__admin_user_index',);
        }

        // fr__RG__user_admin_switch_to_user
        if (0 === strpos($pathinfo, '/admin/user/switch_to') && preg_match('#^/admin/user/switch_to/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__user_admin_switch_to_user')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\AdminController::switchToUserAction',  '_locale' => 'fr',));
        }

        // en__RG__user_admin_switch_to_user
        if (0 === strpos($pathinfo, '/en/admin/user/switch_to') && preg_match('#^/en/admin/user/switch_to/(?P<user>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__user_admin_switch_to_user')), array (  '_controller' => 'Zogs\\UserBundle\\Controller\\AdminController::switchToUserAction',  '_locale' => 'en',));
        }

        // fr__RG__zogs_utils_homepage
        if (0 === strpos($pathinfo, '/utils/hello') && preg_match('#^/utils/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__zogs_utils_homepage')), array (  '_controller' => 'MyUtilsBundle:Default:index',  '_locale' => 'fr',));
        }

        // en__RG__zogs_utils_homepage
        if (0 === strpos($pathinfo, '/en/utils/hello') && preg_match('#^/en/utils/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__zogs_utils_homepage')), array (  '_controller' => 'MyUtilsBundle:Default:index',  '_locale' => 'en',));
        }

        // fr__RG__zogs_utils_testobject
        if ($pathinfo === '/utils/object/test') {
            return array (  '_controller' => 'MyUtilsBundle:TestObject:testObjectChange',  '_locale' => 'fr',  '_route' => 'fr__RG__zogs_utils_testobject',);
        }

        // en__RG__zogs_utils_testobject
        if ($pathinfo === '/en/utils/object/test') {
            return array (  '_controller' => 'MyUtilsBundle:TestObject:testObjectChange',  '_locale' => 'en',  '_route' => 'en__RG__zogs_utils_testobject',);
        }

        // fr__RG__ZogsPageBundle_view
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__ZogsPageBundle_view')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::viewAction',  '_locale' => 'fr',));
        }

        // en__RG__ZogsPageBundle_view
        if (0 === strpos($pathinfo, '/en/page') && preg_match('#^/en/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__ZogsPageBundle_view')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::viewAction',  '_locale' => 'en',));
        }

        // fr__RG__page
        if (rtrim($pathinfo, '/') === '/page/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__page');
            }

            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__page',);
        }

        // en__RG__page
        if (rtrim($pathinfo, '/') === '/en/page/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__page');
            }

            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__page',);
        }

        // fr__RG__page_show
        if (0 === strpos($pathinfo, '/page/admin') && preg_match('#^/page/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__page_show')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::showAction',  '_locale' => 'fr',));
        }

        // en__RG__page_show
        if (0 === strpos($pathinfo, '/en/page/admin') && preg_match('#^/en/page/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__page_show')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::showAction',  '_locale' => 'en',));
        }

        // fr__RG__page_new
        if ($pathinfo === '/page/admin/new') {
            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::newAction',  '_locale' => 'fr',  '_route' => 'fr__RG__page_new',);
        }

        // en__RG__page_new
        if ($pathinfo === '/en/page/admin/new') {
            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::newAction',  '_locale' => 'en',  '_route' => 'en__RG__page_new',);
        }

        // fr__RG__page_create
        if ($pathinfo === '/page/admin/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__page_create;
            }

            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::createAction',  '_locale' => 'fr',  '_route' => 'fr__RG__page_create',);
        }
        not_fr__RG__page_create:

        // en__RG__page_create
        if ($pathinfo === '/en/page/admin/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__page_create;
            }

            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::createAction',  '_locale' => 'en',  '_route' => 'en__RG__page_create',);
        }
        not_en__RG__page_create:

        // fr__RG__page_edit
        if (0 === strpos($pathinfo, '/page/admin') && preg_match('#^/page/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__page_edit')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::editAction',  '_locale' => 'fr',));
        }

        // en__RG__page_edit
        if (0 === strpos($pathinfo, '/en/page/admin') && preg_match('#^/en/page/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__page_edit')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::editAction',  '_locale' => 'en',));
        }

        // fr__RG__page_update
        if (0 === strpos($pathinfo, '/page/admin') && preg_match('#^/page/admin/(?P<id>[^/]++)/(?P<_locale>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_fr__RG__page_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__page_update')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::updateAction',  '_locale' => 'fr',));
        }
        not_fr__RG__page_update:

        // en__RG__page_update
        if (0 === strpos($pathinfo, '/en/page/admin') && preg_match('#^/en/page/admin/(?P<id>[^/]++)/(?P<_locale>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_en__RG__page_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__page_update')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::updateAction',  '_locale' => 'en',));
        }
        not_en__RG__page_update:

        // fr__RG__page_delete
        if (0 === strpos($pathinfo, '/page/admin') && preg_match('#^/page/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_fr__RG__page_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__page_delete')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::deleteAction',  '_locale' => 'fr',));
        }
        not_fr__RG__page_delete:

        // en__RG__page_delete
        if (0 === strpos($pathinfo, '/en/page/admin') && preg_match('#^/en/page/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_en__RG__page_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__page_delete')), array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::deleteAction',  '_locale' => 'en',));
        }
        not_en__RG__page_delete:

        // fr__RG__contact_us
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__contact_us;
            }

            return array (  '_controller' => 'Zogs\\ContactBundle\\Controller\\ContactController::contactAction',  '_locale' => 'fr',  '_route' => 'fr__RG__contact_us',);
        }
        not_fr__RG__contact_us:

        // en__RG__contact_us
        if ($pathinfo === '/en/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__contact_us;
            }

            return array (  '_controller' => 'Zogs\\ContactBundle\\Controller\\ContactController::contactAction',  '_locale' => 'en',  '_route' => 'en__RG__contact_us',);
        }
        not_en__RG__contact_us:

        // fr__RG__zogs.mailer.test
        if ($pathinfo === '/zmailer/test') {
            return array (  '_controller' => 'Zogs\\MailerBundle\\Controller\\TestController::sendTestMailAction',  '_locale' => 'fr',  '_route' => 'fr__RG__zogs.mailer.test',);
        }

        // en__RG__zogs.mailer.test
        if ($pathinfo === '/en/zmailer/test') {
            return array (  '_controller' => 'Zogs\\MailerBundle\\Controller\\TestController::sendTestMailAction',  '_locale' => 'en',  '_route' => 'en__RG__zogs.mailer.test',);
        }

        // fr__RG__flash_homepage
        if (0 === strpos($pathinfo, '/flashbag/hello') && preg_match('#^/flashbag/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__flash_homepage')), array (  '_controller' => 'Zogs\\FlashBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',));
        }

        // en__RG__flash_homepage
        if (0 === strpos($pathinfo, '/en/flashbag/hello') && preg_match('#^/en/flashbag/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__flash_homepage')), array (  '_controller' => 'Zogs\\FlashBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // fr__RG__flash_test
        if ($pathinfo === '/flashbag/test') {
            return array (  '_controller' => 'Zogs\\FlashBundle\\Controller\\DefaultController::testAction',  '_locale' => 'fr',  '_route' => 'fr__RG__flash_test',);
        }

        // en__RG__flash_test
        if ($pathinfo === '/en/flashbag/test') {
            return array (  '_controller' => 'Zogs\\FlashBundle\\Controller\\DefaultController::testAction',  '_locale' => 'en',  '_route' => 'en__RG__flash_test',);
        }

        // fr__RG__world_homepage
        if (0 === strpos($pathinfo, '/world/hello') && preg_match('#^/world/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__world_homepage')), array (  '_controller' => 'ZogsWorldBundle:Default:index',  '_locale' => 'fr',));
        }

        // en__RG__world_homepage
        if (0 === strpos($pathinfo, '/en/world/hello') && preg_match('#^/en/world/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__world_homepage')), array (  '_controller' => 'ZogsWorldBundle:Default:index',  '_locale' => 'en',));
        }

        // fr__RG__world_location_select_test
        if ($pathinfo === '/world/location/select') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__world_location_select_test;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::locationSelectAction',  '_locale' => 'fr',  '_route' => 'fr__RG__world_location_select_test',);
        }
        not_fr__RG__world_location_select_test:

        // en__RG__world_location_select_test
        if ($pathinfo === '/en/world/location/select') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__world_location_select_test;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::locationSelectAction',  '_locale' => 'en',  '_route' => 'en__RG__world_location_select_test',);
        }
        not_en__RG__world_location_select_test:

        // fr__RG__world_location_select_nextlevel
        if ($pathinfo === '/world/location/levelchildren') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__world_location_select_nextlevel;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::nextGeoLevelAction',  '_locale' => 'fr',  '_route' => 'fr__RG__world_location_select_nextlevel',);
        }
        not_fr__RG__world_location_select_nextlevel:

        // en__RG__world_location_select_nextlevel
        if ($pathinfo === '/en/world/location/levelchildren') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__world_location_select_nextlevel;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::nextGeoLevelAction',  '_locale' => 'en',  '_route' => 'en__RG__world_location_select_nextlevel',);
        }
        not_en__RG__world_location_select_nextlevel:

        // fr__RG__world_city_search
        if ($pathinfo === '/world/city/search') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__world_city_search;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::searchAction',  '_locale' => 'fr',  '_route' => 'fr__RG__world_city_search',);
        }
        not_fr__RG__world_city_search:

        // en__RG__world_city_search
        if ($pathinfo === '/en/world/city/search') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__world_city_search;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::searchAction',  '_locale' => 'en',  '_route' => 'en__RG__world_city_search',);
        }
        not_en__RG__world_city_search:

        // fr__RG__world_city_view
        if (0 === strpos($pathinfo, '/world/city/view') && preg_match('#^/world/city/view/(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__world_city_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__world_city_view')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::viewAction',  '_locale' => 'fr',));
        }
        not_fr__RG__world_city_view:

        // en__RG__world_city_view
        if (0 === strpos($pathinfo, '/en/world/city/view') && preg_match('#^/en/world/city/view/(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__world_city_view;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__world_city_view')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::viewAction',  '_locale' => 'en',));
        }
        not_en__RG__world_city_view:

        // fr__RG__world_location_nearest
        if (0 === strpos($pathinfo, '/world/location/near') && preg_match('#^/world/location/near/(?P<lat>[^/]++)/(?P<lon>[^/]++)(?:/(?P<country>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__world_location_nearest;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__world_location_nearest')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::nearestLatLonAction',  'country' => 'France',  '_locale' => 'fr',));
        }
        not_fr__RG__world_location_nearest:

        // en__RG__world_location_nearest
        if (0 === strpos($pathinfo, '/en/world/location/near') && preg_match('#^/en/world/location/near/(?P<lat>[^/]++)/(?P<lon>[^/]++)(?:/(?P<country>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__world_location_nearest;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__world_location_nearest')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\LocationController::nearestLatLonAction',  'country' => 'France',  '_locale' => 'en',));
        }
        not_en__RG__world_location_nearest:

        // fr__RG__world_export
        if ($pathinfo === '/world/admin/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__world_export;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\ExportController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__world_export',);
        }
        not_fr__RG__world_export:

        // en__RG__world_export
        if ($pathinfo === '/en/world/admin/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__world_export;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\ExportController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__world_export',);
        }
        not_en__RG__world_export:

        // fr__RG__world_export2
        if ($pathinfo === '/world/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__world_export2;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\ExportController::indexAction',  '_locale' => 'fr',  '_route' => 'fr__RG__world_export2',);
        }
        not_fr__RG__world_export2:

        // en__RG__world_export2
        if ($pathinfo === '/en/world/export') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__world_export2;
            }

            return array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\ExportController::indexAction',  '_locale' => 'en',  '_route' => 'en__RG__world_export2',);
        }
        not_en__RG__world_export2:

        // fr__RG__world_autocompletecity
        if (0 === strpos($pathinfo, '/world/city/autocomplete') && preg_match('#^/world/city/autocomplete(?:/(?P<country>[^/]++)(?:/(?P<prefix>[^/]++))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__world_autocompletecity;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__world_autocompletecity')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::autoCompleteAction',  'country' => 'FR',  'prefix' => '',  '_locale' => 'fr',));
        }
        not_fr__RG__world_autocompletecity:

        // en__RG__world_autocompletecity
        if (0 === strpos($pathinfo, '/en/world/city/autocomplete') && preg_match('#^/en/world/city/autocomplete(?:/(?P<country>[^/]++)(?:/(?P<prefix>[^/]++))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__world_autocompletecity;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__world_autocompletecity')), array (  '_controller' => 'Zogs\\WorldBundle\\Controller\\CityController::autoCompleteAction',  'country' => 'FR',  'prefix' => '',  '_locale' => 'en',));
        }
        not_en__RG__world_autocompletecity:

        // fr__RG__fos_comment_new_threads
        if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_new_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_new_threads:

        // en__RG__fos_comment_new_threads
        if (0 === strpos($pathinfo, '/en/api/threads/new') && preg_match('#^/en/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_new_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_new_threads:

        // fr__RG__fos_comment_edit_thread_commentable
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_edit_thread_commentable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_edit_thread_commentable:

        // en__RG__fos_comment_edit_thread_commentable
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_edit_thread_commentable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_edit_thread_commentable:

        // fr__RG__fos_comment_new_thread_comments
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_new_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_new_thread_comments:

        // en__RG__fos_comment_new_thread_comments
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_new_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_new_thread_comments:

        // fr__RG__fos_comment_remove_thread_comment
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_remove_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_remove_thread_comment:

        // en__RG__fos_comment_remove_thread_comment
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_remove_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_remove_thread_comment:

        // fr__RG__fos_comment_edit_thread_comment
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_edit_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_edit_thread_comment:

        // en__RG__fos_comment_edit_thread_comment
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_edit_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_edit_thread_comment:

        // fr__RG__fos_comment_new_thread_comment_votes
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_new_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_new_thread_comment_votes:

        // en__RG__fos_comment_new_thread_comment_votes
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_new_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_new_thread_comment_votes:

        // fr__RG__fos_comment_get_thread
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_get_thread;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_get_thread:

        // en__RG__fos_comment_get_thread
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_get_thread;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_get_thread:

        // fr__RG__fos_comment_get_threads
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_get_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_get_threads:

        // en__RG__fos_comment_get_threads
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_get_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_get_threads:

        // fr__RG__fos_comment_post_threads
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_comment_post_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_post_threads:

        // en__RG__fos_comment_post_threads
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_comment_post_threads;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_post_threads:

        // fr__RG__fos_comment_patch_thread_commentable
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_fr__RG__fos_comment_patch_thread_commentable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_patch_thread_commentable:

        // en__RG__fos_comment_patch_thread_commentable
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_en__RG__fos_comment_patch_thread_commentable;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_patch_thread_commentable:

        // fr__RG__fos_comment_get_thread_comment
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_get_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_get_thread_comment:

        // en__RG__fos_comment_get_thread_comment
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_get_thread_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_get_thread_comment:

        // fr__RG__fos_comment_patch_thread_comment_state
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_fr__RG__fos_comment_patch_thread_comment_state;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_patch_thread_comment_state:

        // en__RG__fos_comment_patch_thread_comment_state
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PATCH') {
                $allow[] = 'PATCH';
                goto not_en__RG__fos_comment_patch_thread_comment_state;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_patch_thread_comment_state:

        // fr__RG__fos_comment_put_thread_comments
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_fr__RG__fos_comment_put_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_put_thread_comments:

        // en__RG__fos_comment_put_thread_comments
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_en__RG__fos_comment_put_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_put_thread_comments:

        // fr__RG__fos_comment_get_thread_comments
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_get_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_get_thread_comments:

        // en__RG__fos_comment_get_thread_comments
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_get_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_get_thread_comments:

        // fr__RG__fos_comment_post_thread_comments
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_comment_post_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_post_thread_comments:

        // en__RG__fos_comment_post_thread_comments
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_comment_post_thread_comments;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_post_thread_comments:

        // fr__RG__fos_comment_get_thread_comment_votes
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fr__RG__fos_comment_get_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_get_thread_comment_votes:

        // en__RG__fos_comment_get_thread_comment_votes
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_en__RG__fos_comment_get_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_get_thread_comment_votes:

        // fr__RG__fos_comment_post_thread_comment_votes
        if (0 === strpos($pathinfo, '/api/threads') && preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fr__RG__fos_comment_post_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'fr',));
        }
        not_fr__RG__fos_comment_post_thread_comment_votes:

        // en__RG__fos_comment_post_thread_comment_votes
        if (0 === strpos($pathinfo, '/en/api/threads') && preg_match('#^/en/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_en__RG__fos_comment_post_thread_comment_votes;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',  '_locale' => 'en',));
        }
        not_en__RG__fos_comment_post_thread_comment_votes:

        // fr__RG__homepage
        if ($pathinfo === '/homepage') {
            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::homepageAction',  '_locale' => 'fr',  '_route' => 'fr__RG__homepage',);
        }

        // en__RG__homepage
        if ($pathinfo === '/en/homepage') {
            return array (  '_controller' => 'Zogs\\PageBundle\\Controller\\PageController::homepageAction',  '_locale' => 'en',  '_route' => 'en__RG__homepage',);
        }

        // fr__RG__root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'crc_reserv_home',  'permanent' => true,  '_locale' => 'fr',  '_route' => 'fr__RG__root',);
        }

        // en__RG__root
        if (rtrim($pathinfo, '/') === '/en') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'crc_reserv_home',  'permanent' => true,  '_locale' => 'en',  '_route' => 'en__RG__root',);
        }

        // fr__RG__sonata_admin_redirect
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fr__RG__sonata_admin_redirect');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_redirect',);
        }

        // en__RG__sonata_admin_redirect
        if (rtrim($pathinfo, '/') === '/en/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'en__RG__sonata_admin_redirect');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_redirect',);
        }

        // fr__RG__sonata_admin_dashboard
        if ($pathinfo === '/admin/dashboard') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_dashboard',);
        }

        // en__RG__sonata_admin_dashboard
        if ($pathinfo === '/en/admin/dashboard') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_dashboard',);
        }

        // fr__RG__sonata_admin_retrieve_form_element
        if ($pathinfo === '/admin/core/get-form-field-element') {
            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_retrieve_form_element',);
        }

        // en__RG__sonata_admin_retrieve_form_element
        if ($pathinfo === '/en/admin/core/get-form-field-element') {
            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_retrieve_form_element',);
        }

        // fr__RG__sonata_admin_append_form_element
        if ($pathinfo === '/admin/core/append-form-field-element') {
            return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_append_form_element',);
        }

        // en__RG__sonata_admin_append_form_element
        if ($pathinfo === '/en/admin/core/append-form-field-element') {
            return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_append_form_element',);
        }

        // fr__RG__sonata_admin_short_object_information
        if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',  '_locale' => 'fr',));
        }

        // en__RG__sonata_admin_short_object_information
        if (0 === strpos($pathinfo, '/en/admin/core/get-short-object-description') && preg_match('#^/en/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',  '_locale' => 'en',));
        }

        // fr__RG__sonata_admin_set_object_field_value
        if ($pathinfo === '/admin/core/set-object-field-value') {
            return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_set_object_field_value',);
        }

        // en__RG__sonata_admin_set_object_field_value
        if ($pathinfo === '/en/admin/core/set-object-field-value') {
            return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_set_object_field_value',);
        }

        // fr__RG__sonata_admin_search
        if ($pathinfo === '/admin/search') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_search',);
        }

        // en__RG__sonata_admin_search
        if ($pathinfo === '/en/admin/search') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_search',);
        }

        // fr__RG__sonata_admin_retrieve_autocomplete_items
        if ($pathinfo === '/admin/core/get-autocomplete-items') {
            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_locale' => 'fr',  '_route' => 'fr__RG__sonata_admin_retrieve_autocomplete_items',);
        }

        // en__RG__sonata_admin_retrieve_autocomplete_items
        if ($pathinfo === '/en/admin/core/get-autocomplete-items') {
            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_locale' => 'en',  '_route' => 'en__RG__sonata_admin_retrieve_autocomplete_items',);
        }

        // fr__RG__admin_zogs_user_user_list
        if ($pathinfo === '/admin/zogs/user/user/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_user_user_list',);
        }

        // en__RG__admin_zogs_user_user_list
        if ($pathinfo === '/en/admin/zogs/user/user/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_user_user_list',);
        }

        // fr__RG__admin_zogs_user_user_create
        if ($pathinfo === '/admin/zogs/user/user/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_user_user_create',);
        }

        // en__RG__admin_zogs_user_user_create
        if ($pathinfo === '/en/admin/zogs/user/user/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_user_user_create',);
        }

        // fr__RG__admin_zogs_user_user_batch
        if ($pathinfo === '/admin/zogs/user/user/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_user_user_batch',);
        }

        // en__RG__admin_zogs_user_user_batch
        if ($pathinfo === '/en/admin/zogs/user/user/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_user_user_batch',);
        }

        // fr__RG__admin_zogs_user_user_edit
        if (0 === strpos($pathinfo, '/admin/zogs/user/user') && preg_match('#^/admin/zogs/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_user_user_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/user/user') && preg_match('#^/en/admin/zogs/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_user_user_delete
        if (0 === strpos($pathinfo, '/admin/zogs/user/user') && preg_match('#^/admin/zogs/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_user_user_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/user/user') && preg_match('#^/en/admin/zogs/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_user_user_show
        if (0 === strpos($pathinfo, '/admin/zogs/user/user') && preg_match('#^/admin/zogs/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_user_user_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/user/user') && preg_match('#^/en/admin/zogs/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_user_user_export
        if ($pathinfo === '/admin/zogs/user/user/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_user_user_export',);
        }

        // en__RG__admin_zogs_user_user_export
        if ($pathinfo === '/en/admin/zogs/user/user/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_user_user_export',);
        }

        // fr__RG__admin_zogs_user_user_impersonate
        if (0 === strpos($pathinfo, '/admin/zogs/user/user/../../../../admin/user/switch_to') && preg_match('#^/admin/zogs/user/user/\\.\\./\\.\\./\\.\\./\\.\\./admin/user/switch_to/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_user_user_impersonate')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::impersonateAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_impersonate',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_user_user_impersonate
        if (0 === strpos($pathinfo, '/en/admin/zogs/user/user/../../../../admin/user/switch_to') && preg_match('#^/en/admin/zogs/user/user/\\.\\./\\.\\./\\.\\./\\.\\./admin/user/switch_to/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_user_user_impersonate')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::impersonateAction',  '_sonata_admin' => 'sonata.admin.zogs.user',  '_sonata_name' => 'admin_zogs_user_user_impersonate',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_location_list
        if ($pathinfo === '/admin/zogs/world/location/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_location_list',);
        }

        // en__RG__admin_zogs_world_location_list
        if ($pathinfo === '/en/admin/zogs/world/location/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_location_list',);
        }

        // fr__RG__admin_zogs_world_location_create
        if ($pathinfo === '/admin/zogs/world/location/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_location_create',);
        }

        // en__RG__admin_zogs_world_location_create
        if ($pathinfo === '/en/admin/zogs/world/location/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_location_create',);
        }

        // fr__RG__admin_zogs_world_location_batch
        if ($pathinfo === '/admin/zogs/world/location/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_location_batch',);
        }

        // en__RG__admin_zogs_world_location_batch
        if ($pathinfo === '/en/admin/zogs/world/location/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_location_batch',);
        }

        // fr__RG__admin_zogs_world_location_edit
        if (0 === strpos($pathinfo, '/admin/zogs/world/location') && preg_match('#^/admin/zogs/world/location/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_location_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_location_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/location') && preg_match('#^/en/admin/zogs/world/location/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_location_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_location_delete
        if (0 === strpos($pathinfo, '/admin/zogs/world/location') && preg_match('#^/admin/zogs/world/location/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_location_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_location_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/location') && preg_match('#^/en/admin/zogs/world/location/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_location_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_location_show
        if (0 === strpos($pathinfo, '/admin/zogs/world/location') && preg_match('#^/admin/zogs/world/location/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_location_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_location_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/location') && preg_match('#^/en/admin/zogs/world/location/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_location_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_location_export
        if ($pathinfo === '/admin/zogs/world/location/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_location_export',);
        }

        // en__RG__admin_zogs_world_location_export
        if ($pathinfo === '/en/admin/zogs/world/location/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_location',  '_sonata_name' => 'admin_zogs_world_location_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_location_export',);
        }

        // fr__RG__admin_zogs_world_country_list
        if ($pathinfo === '/admin/zogs/world/country/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_country_list',);
        }

        // en__RG__admin_zogs_world_country_list
        if ($pathinfo === '/en/admin/zogs/world/country/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_country_list',);
        }

        // fr__RG__admin_zogs_world_country_create
        if ($pathinfo === '/admin/zogs/world/country/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_country_create',);
        }

        // en__RG__admin_zogs_world_country_create
        if ($pathinfo === '/en/admin/zogs/world/country/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_country_create',);
        }

        // fr__RG__admin_zogs_world_country_batch
        if ($pathinfo === '/admin/zogs/world/country/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_country_batch',);
        }

        // en__RG__admin_zogs_world_country_batch
        if ($pathinfo === '/en/admin/zogs/world/country/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_country_batch',);
        }

        // fr__RG__admin_zogs_world_country_edit
        if (0 === strpos($pathinfo, '/admin/zogs/world/country') && preg_match('#^/admin/zogs/world/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_country_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_country_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/country') && preg_match('#^/en/admin/zogs/world/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_country_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_country_delete
        if (0 === strpos($pathinfo, '/admin/zogs/world/country') && preg_match('#^/admin/zogs/world/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_country_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_country_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/country') && preg_match('#^/en/admin/zogs/world/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_country_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_country_show
        if (0 === strpos($pathinfo, '/admin/zogs/world/country') && preg_match('#^/admin/zogs/world/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_country_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_country_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/country') && preg_match('#^/en/admin/zogs/world/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_country_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_country_export
        if ($pathinfo === '/admin/zogs/world/country/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_country_export',);
        }

        // en__RG__admin_zogs_world_country_export
        if ($pathinfo === '/en/admin/zogs/world/country/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_country',  '_sonata_name' => 'admin_zogs_world_country_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_country_export',);
        }

        // fr__RG__admin_zogs_world_state_list
        if ($pathinfo === '/admin/zogs/world/state/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_state_list',);
        }

        // en__RG__admin_zogs_world_state_list
        if ($pathinfo === '/en/admin/zogs/world/state/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_state_list',);
        }

        // fr__RG__admin_zogs_world_state_create
        if ($pathinfo === '/admin/zogs/world/state/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_state_create',);
        }

        // en__RG__admin_zogs_world_state_create
        if ($pathinfo === '/en/admin/zogs/world/state/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_state_create',);
        }

        // fr__RG__admin_zogs_world_state_batch
        if ($pathinfo === '/admin/zogs/world/state/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_state_batch',);
        }

        // en__RG__admin_zogs_world_state_batch
        if ($pathinfo === '/en/admin/zogs/world/state/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_state_batch',);
        }

        // fr__RG__admin_zogs_world_state_edit
        if (0 === strpos($pathinfo, '/admin/zogs/world/state') && preg_match('#^/admin/zogs/world/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_state_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_state_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/state') && preg_match('#^/en/admin/zogs/world/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_state_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_state_delete
        if (0 === strpos($pathinfo, '/admin/zogs/world/state') && preg_match('#^/admin/zogs/world/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_state_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_state_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/state') && preg_match('#^/en/admin/zogs/world/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_state_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_state_show
        if (0 === strpos($pathinfo, '/admin/zogs/world/state') && preg_match('#^/admin/zogs/world/state/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_state_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_state_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/state') && preg_match('#^/en/admin/zogs/world/state/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_state_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_state_export
        if ($pathinfo === '/admin/zogs/world/state/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_state_export',);
        }

        // en__RG__admin_zogs_world_state_export
        if ($pathinfo === '/en/admin/zogs/world/state/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_state',  '_sonata_name' => 'admin_zogs_world_state_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_state_export',);
        }

        // fr__RG__admin_zogs_world_city_list
        if ($pathinfo === '/admin/zogs/world/city/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_city_list',);
        }

        // en__RG__admin_zogs_world_city_list
        if ($pathinfo === '/en/admin/zogs/world/city/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_city_list',);
        }

        // fr__RG__admin_zogs_world_city_create
        if ($pathinfo === '/admin/zogs/world/city/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_city_create',);
        }

        // en__RG__admin_zogs_world_city_create
        if ($pathinfo === '/en/admin/zogs/world/city/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_city_create',);
        }

        // fr__RG__admin_zogs_world_city_batch
        if ($pathinfo === '/admin/zogs/world/city/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_city_batch',);
        }

        // en__RG__admin_zogs_world_city_batch
        if ($pathinfo === '/en/admin/zogs/world/city/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_city_batch',);
        }

        // fr__RG__admin_zogs_world_city_edit
        if (0 === strpos($pathinfo, '/admin/zogs/world/city') && preg_match('#^/admin/zogs/world/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_city_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_city_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/city') && preg_match('#^/en/admin/zogs/world/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_city_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_city_delete
        if (0 === strpos($pathinfo, '/admin/zogs/world/city') && preg_match('#^/admin/zogs/world/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_city_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_city_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/city') && preg_match('#^/en/admin/zogs/world/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_city_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_city_show
        if (0 === strpos($pathinfo, '/admin/zogs/world/city') && preg_match('#^/admin/zogs/world/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_world_city_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_world_city_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/world/city') && preg_match('#^/en/admin/zogs/world/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_world_city_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_world_city_export
        if ($pathinfo === '/admin/zogs/world/city/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_world_city_export',);
        }

        // en__RG__admin_zogs_world_city_export
        if ($pathinfo === '/en/admin/zogs/world/city/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.world_city',  '_sonata_name' => 'admin_zogs_world_city_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_world_city_export',);
        }

        // fr__RG__admin_zogs_blog_article_list
        if ($pathinfo === '/admin/zogs/blog/article/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_blog_article_list',);
        }

        // en__RG__admin_zogs_blog_article_list
        if ($pathinfo === '/en/admin/zogs/blog/article/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_blog_article_list',);
        }

        // fr__RG__admin_zogs_blog_article_create
        if ($pathinfo === '/admin/zogs/blog/article/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_blog_article_create',);
        }

        // en__RG__admin_zogs_blog_article_create
        if ($pathinfo === '/en/admin/zogs/blog/article/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_blog_article_create',);
        }

        // fr__RG__admin_zogs_blog_article_batch
        if ($pathinfo === '/admin/zogs/blog/article/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_blog_article_batch',);
        }

        // en__RG__admin_zogs_blog_article_batch
        if ($pathinfo === '/en/admin/zogs/blog/article/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_blog_article_batch',);
        }

        // fr__RG__admin_zogs_blog_article_edit
        if (0 === strpos($pathinfo, '/admin/zogs/blog/article') && preg_match('#^/admin/zogs/blog/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_blog_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_blog_article_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/blog/article') && preg_match('#^/en/admin/zogs/blog/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_blog_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_blog_article_delete
        if (0 === strpos($pathinfo, '/admin/zogs/blog/article') && preg_match('#^/admin/zogs/blog/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_blog_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_blog_article_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/blog/article') && preg_match('#^/en/admin/zogs/blog/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_blog_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_blog_article_show
        if (0 === strpos($pathinfo, '/admin/zogs/blog/article') && preg_match('#^/admin/zogs/blog/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_blog_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_blog_article_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/blog/article') && preg_match('#^/en/admin/zogs/blog/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_blog_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_blog_article_export
        if ($pathinfo === '/admin/zogs/blog/article/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_blog_article_export',);
        }

        // en__RG__admin_zogs_blog_article_export
        if ($pathinfo === '/en/admin/zogs/blog/article/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.blog_article',  '_sonata_name' => 'admin_zogs_blog_article_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_blog_article_export',);
        }

        // fr__RG__admin_zogs_cron_crontask_list
        if ($pathinfo === '/admin/zogs/cron/crontask/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_cron_crontask_list',);
        }

        // en__RG__admin_zogs_cron_crontask_list
        if ($pathinfo === '/en/admin/zogs/cron/crontask/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_cron_crontask_list',);
        }

        // fr__RG__admin_zogs_cron_crontask_create
        if ($pathinfo === '/admin/zogs/cron/crontask/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_cron_crontask_create',);
        }

        // en__RG__admin_zogs_cron_crontask_create
        if ($pathinfo === '/en/admin/zogs/cron/crontask/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_cron_crontask_create',);
        }

        // fr__RG__admin_zogs_cron_crontask_batch
        if ($pathinfo === '/admin/zogs/cron/crontask/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_cron_crontask_batch',);
        }

        // en__RG__admin_zogs_cron_crontask_batch
        if ($pathinfo === '/en/admin/zogs/cron/crontask/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_cron_crontask_batch',);
        }

        // fr__RG__admin_zogs_cron_crontask_edit
        if (0 === strpos($pathinfo, '/admin/zogs/cron/crontask') && preg_match('#^/admin/zogs/cron/crontask/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_cron_crontask_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_cron_crontask_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/cron/crontask') && preg_match('#^/en/admin/zogs/cron/crontask/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_cron_crontask_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_cron_crontask_delete
        if (0 === strpos($pathinfo, '/admin/zogs/cron/crontask') && preg_match('#^/admin/zogs/cron/crontask/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_cron_crontask_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_cron_crontask_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/cron/crontask') && preg_match('#^/en/admin/zogs/cron/crontask/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_cron_crontask_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_cron_crontask_show
        if (0 === strpos($pathinfo, '/admin/zogs/cron/crontask') && preg_match('#^/admin/zogs/cron/crontask/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_cron_crontask_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_cron_crontask_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/cron/crontask') && preg_match('#^/en/admin/zogs/cron/crontask/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_cron_crontask_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_cron_crontask_export
        if ($pathinfo === '/admin/zogs/cron/crontask/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_cron_crontask_export',);
        }

        // en__RG__admin_zogs_cron_crontask_export
        if ($pathinfo === '/en/admin/zogs/cron/crontask/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.cron',  '_sonata_name' => 'admin_zogs_cron_crontask_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_cron_crontask_export',);
        }

        // fr__RG__admin_zogs_page_page_list
        if ($pathinfo === '/admin/zogs/page/page/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_list',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_page_page_list',);
        }

        // en__RG__admin_zogs_page_page_list
        if ($pathinfo === '/en/admin/zogs/page/page/list') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_list',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_page_page_list',);
        }

        // fr__RG__admin_zogs_page_page_create
        if ($pathinfo === '/admin/zogs/page/page/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_create',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_page_page_create',);
        }

        // en__RG__admin_zogs_page_page_create
        if ($pathinfo === '/en/admin/zogs/page/page/create') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_create',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_page_page_create',);
        }

        // fr__RG__admin_zogs_page_page_batch
        if ($pathinfo === '/admin/zogs/page/page/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_batch',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_page_page_batch',);
        }

        // en__RG__admin_zogs_page_page_batch
        if ($pathinfo === '/en/admin/zogs/page/page/batch') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_batch',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_page_page_batch',);
        }

        // fr__RG__admin_zogs_page_page_edit
        if (0 === strpos($pathinfo, '/admin/zogs/page/page') && preg_match('#^/admin/zogs/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_page_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_edit',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_page_page_edit
        if (0 === strpos($pathinfo, '/en/admin/zogs/page/page') && preg_match('#^/en/admin/zogs/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_page_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_edit',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_page_page_delete
        if (0 === strpos($pathinfo, '/admin/zogs/page/page') && preg_match('#^/admin/zogs/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_page_page_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_delete',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_page_page_delete
        if (0 === strpos($pathinfo, '/en/admin/zogs/page/page') && preg_match('#^/en/admin/zogs/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_page_page_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_delete',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_page_page_show
        if (0 === strpos($pathinfo, '/admin/zogs/page/page') && preg_match('#^/admin/zogs/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__admin_zogs_page_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_show',  '_locale' => 'fr',));
        }

        // en__RG__admin_zogs_page_page_show
        if (0 === strpos($pathinfo, '/en/admin/zogs/page/page') && preg_match('#^/en/admin/zogs/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__admin_zogs_page_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_show',  '_locale' => 'en',));
        }

        // fr__RG__admin_zogs_page_page_export
        if ($pathinfo === '/admin/zogs/page/page/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_export',  '_locale' => 'fr',  '_route' => 'fr__RG__admin_zogs_page_page_export',);
        }

        // en__RG__admin_zogs_page_page_export
        if ($pathinfo === '/en/admin/zogs/page/page/export') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.zogs.page',  '_sonata_name' => 'admin_zogs_page_page_export',  '_locale' => 'en',  '_route' => 'en__RG__admin_zogs_page_page_export',);
        }

        // fr__RG__rm_trailing_slash
        if (preg_match('#^/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fr__RG__rm_trailing_slash;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fr__RG__rm_trailing_slash')), array (  '_controller' => 'Zogs\\UtilsBundle\\Controller\\RedirectingController::removeTrailingSlashAction',  '_locale' => 'fr',));
        }
        not_fr__RG__rm_trailing_slash:

        // en__RG__rm_trailing_slash
        if (0 === strpos($pathinfo, '/en') && preg_match('#^/en/(?P<url>.*/)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_en__RG__rm_trailing_slash;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'en__RG__rm_trailing_slash')), array (  '_controller' => 'Zogs\\UtilsBundle\\Controller\\RedirectingController::removeTrailingSlashAction',  '_locale' => 'en',));
        }
        not_en__RG__rm_trailing_slash:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
