<?php

class shopPbrfPlugin extends shopPlugin {

    public function showMenu($order) {
        $order = shopPayment::getOrderData($order["id"]);
        $return['action_link'] = "";
        $enabledBlank = $this->getEnabledBlank();
        $bInfo = $this->map();
        if (!empty($enabledBlank)) {
            foreach ($enabledBlank as $blank => $row) {
                $return['action_link'] .= $this->actionLink($blank, $bInfo, $order);
            }
        }
        return $return;
    }

    public function getEnabledBlank() {
        return $this->getSettings('blanks');
    }

    public function actionLink($blankID, $bInfo, $order) {
        //We fu*k resouce economy \o
        $view = wa()->getView();
        $view->assign(array(
            'blankID' => $blankID,
            'paramBId' => 'pbrf.' . $blankID,
            'pbrf_order' => $order,
            'bInfo' => $bInfo
        ));
        $return = $view->fetch($this->path . '/templates/link_template.html');
        return $return;
    }

    public function map() {
        $config_path = $this->path . '/lib/config/map.php';
        if (file_exists($config_path)) {
            $map = include($config_path);
        }
        return $map;
    }

    public function getBlankFromApi($type = "pdf", $blank, $data) {

        $url = "http://pbrf.ru/" . $type . "." . $blank;


        $post = array(
            'access_token' => $this->getSettings('token'),
            'data' => json_encode($data)
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $res = curl_exec($ch);
        curl_close($ch);
        return $this->getResult($res);
    }

    public function getResult($res) {
        $temp = json_decode($res);
        if (isset($temp->error))
            return $temp;

        return $res;
    }

}
