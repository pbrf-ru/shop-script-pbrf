<?php

return array(
    'token' => array(
        'value' => '',
        'title' => 'Ключ доступа к API',
        'description' => 'Укажите ваш ключ доступа к API сервиса',
        'control_type' => 'text',
    ),
    'blanks' => array(
        'value' => array('f113', 'cn23', 'f112', 'f107', 'f116', 'cp71', 'f113f117', 'f7', 'search', 'address'),
        'title' => 'Бланки',
        'description' => '',
        'control_type' => waHtmlControl::GROUPBOX,
        'options' => array(
            array(
                'value' => 'F113',
                'title' => 'Бланк Наложенного Платежа Ф. 113\эн',
                'description' => '',
            ),
            array(
                'value' => 'CN23',
                'title' => 'Таможенной Декларации CN23',
                'description' => '',
            ),
            array(
                'value' => 'F112',
                'title' => 'Почтового Перевода Ф.112эф',
                'description' => '',
            ),
            array(
                'value' => 'F107',
                'title' => 'Описи Ф.107',
                'description' => '',
            ),
            array(
                'value' => 'F116',
                'title' => 'Посылки Ф.116',
                'description' => '',
            ),
            array(
                'value' => 'F113F117',
                'title' => 'Ф113/Ф117 посылка с наложенным платежом',
                'description' => '',
            ),
            array(
                'value' => 'F7',
                'title' => 'Ярлыка Ф.7',
                'description' => '',
            ),
        ),
    ),
    'firstname' => array(
        'value' => '',
        'title' => 'Имя отправителя',
        'description' => 'Укажите имя отправителя',
        'control_type' => 'text',
    ),
    'patronymic' => array(
        'value' => '',
        'title' => 'Отчество отправителя',
        'description' => 'Укажите отчество отправителя',
        'control_type' => 'text',
    ),
    'lastname' => array(
        'value' => '',
        'title' => 'Фамилия отправителя',
        'description' => 'Укажите Фамилию отправителя',
        'control_type' => 'text',
    ),
    'country' => array(
        'value' => '',
        'title' => 'Страна',
        'description' => 'Укажите страну отправителя',
        'control_type' => 'text',
    ),
    'city' => array(
        'value' => '',
        'title' => 'Город',
        'description' => 'Укажите город отправителя',
        'control_type' => 'text',
    ),
    'street' => array(
        'value' => '',
        'title' => 'Улица',
        'description' => 'Укажите улицу отправителя',
        'control_type' => 'text',
    ),
    'home' => array(
        'value' => '',
        'title' => 'Дом',
        'description' => 'Укажите дом отправителя',
        'control_type' => 'text',
    ),
    'flat' => array(
        'value' => '',
        'title' => 'Квартира',
        'description' => 'Укажите квартиру отправителя',
        'control_type' => 'text',
    ),
    'zip' => array(
        'value' => '',
        'title' => 'Индекс',
        'description' => 'Укажите индекс отправителя',
        'control_type' => 'text',
    ),
    'inn' => array(
        'value' => '',
        'title' => 'ИНН',
        'description' => 'Укажите ИНН',
        'control_type' => 'text',
    ),
    'bik' => array(
        'value' => '',
        'title' => 'БИК',
        'description' => 'Укажите БИК',
        'control_type' => 'text',
    ),
    'kors' => array(
        'value' => '',
        'title' => 'Кор. счет',
        'description' => 'Укажите кор. счет',
        'control_type' => 'text',
    ),
    'bankname' => array(
        'value' => '',
        'title' => 'Наименование банка',
        'description' => 'Укажите название банка',
        'control_type' => 'text',
    ),
    'rs' => array(
        'value' => '',
        'title' => 'Расчетный счет',
        'description' => 'Укажите расчетный счет',
        'control_type' => 'text',
    ),
    'document' => array(
        'value' => '',
        'title' => 'Наименование документа',
        'description' => 'Название документа который будет предьявляться при получении переводов.',
        'control_type' => 'text',
    ),
    'document_serial' => array(
        'value' => '',
        'title' => 'Серия документа',
        'description' => 'Серии документа который будет предьявляться при получении переводов.',
        'control_type' => 'text',
    ),
    'document_number' => array(
        'value' => '',
        'title' => 'Номер документа',
        'description' => 'Номер документа который будет предьявляться при получении переводов.',
        'control_type' => 'text',
    ),
    'document_date_month' => array(
        'value' => '',
        'title' => 'День и месяц выдачи документа',
        'description' => 'День и месяц выдачи документа который будет предьявляться при получении переводов, через точку.',
        'control_type' => 'text',
    ),
     'document_date_year' => array(
        'value' => '',
        'title' => 'Год выдачи документа',
        'description' => 'Год выдачи документа который будет предьявляться при получении переводов, через точку.',
        'control_type' => 'text',
    ),
    'document_who_cr' => array(
        'value' => '',
        'title' => 'Учреждение',
        'description' => 'Наименование учреждения выдавшего документ который будет предьявляться при получении переводов.',
        'control_type' => 'text',
    ),
    'recipient' => array(
        'value' => '',
        'title' => 'Код получателя',
        'description' => 'Kод идентификатора Федерального получателя',
        'control_type' => 'text',
    ),
);
