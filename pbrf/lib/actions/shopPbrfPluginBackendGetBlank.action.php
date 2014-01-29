<?php

class shopPbrfPluginBackendGetBlankAction extends waViewAction {

    public function execute() {
        $plugin = waSystem::getInstance()->getPlugin('pbrf');
        $enBlank = $plugin->getEnabledBlank();
        $needBlank = waRequest::get('blank');
        $orderId = waRequest::get('order');
        $manualEdit = waRequest::get('edit');
        if ($needBlank && in_array($needBlank, array_keys($enBlank)) && $orderId) {
            $oModel = new shopOrderModel();
            $order = shopPayment::getOrderData($orderId);
            $this->view->assign('order', $order);
            $this->view->assign('blank', $needBlank);


//            if (!$manualEdit) {
//                $this->view->assign('link', $order['params']['pbrf.' . $needBlank]);
//                $this->template = $this->getPluginRoot() . '/templates/print_form.html';
//            } else {
                $this->view->assign('settings', $plugin->getSettings());
                $this->template = $this->getPluginRoot() . 'templates/forms/form.' . $needBlank . '.html';
                //$this->view->fetch();
//            }
        } elseif (!$needBlank) {
            throw new waException('BlankID is not passed', 400);
        } elseif (!$orderId) {
            throw new waException('OrderID not passed', 400);
        } elseif (!in_array($needBlank, array_keys($enBlank))) {
            throw new waException('Blank not enabled', 404);
        }
    }

}
