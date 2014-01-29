<?php

class shopPbrfPluginBackendGenerateBlankAction extends waViewAction {

    public function execute() {
        $plugin = waSystem::getInstance()->getPlugin('pbrf');
        $blank = waRequest::get('blank');
        $orderId = waRequest::get('order');

        if ($blank) {
            $data = waRequest::post($blank);
            if (is_null($data)) {
                throw new waException('Data not passed', 400);
            }
            $gBlank = $plugin->getBlankFromApi('pdf', $blank, $data);
        } else {
            throw new waException('Blank not passed', 400);
        }

        if (is_string($gBlank)) {
            //  var_dump($gBlank);
            $opm = new shopOrderParamsModel();
            $opm->set($orderId, array('pbrf.' . $blank => $gBlank), false);
            $this->redirect(array('url' => $gBlank));
        } else {
            switch ($gBlank->error) {
                case 1:
                    throw new waException('Нет такого бланка');
                case 2:
                    throw new waException('Не заданы параметры запроса');
                case 3:
                    throw new waException('Токен не передан или не верен');
                case 4:
                    throw new waException('Некорректный параметр');
                case 5:
                    throw new waException('Дневной лимит генерации бланков изчерпан');
            }
        }
        // print_r($_POST);
    }

}
