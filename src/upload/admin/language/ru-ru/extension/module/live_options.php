<?php
/**
 * Live Options+.
 *
 * The Live Options+ extension is for CMS Opencart 3.x.
 * It allows to display live total price of product and its options in accordance with the specified options
 * and quantity, also adds ability to use the equal sign as option prefix and another features.
 *
 * @author      Andrii Burkatskyi aka underr underr.ua@gmail.com
 * @copyright   Copyright (c) 2019 Andrii Burkatskyi
 * @license     https://raw.githubusercontent.com/underr-ua/ocmod3-live-options-plus/master/EULA.txt End-User License Agreement
 *
 * @version     1.4
 *
 * @see         https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=36005
 * @see         https://underr.space/en/notes/projects/project-014.html
 * @see         https://github.com/underr-ua/ocmod3-live-options-plus
 */

// Live Options+ heading
$_['heading_title'] = '[underr] Live Options+';
// Live Options+ error text
$_['error_permission'] = 'Внимание: Недостаточно прав для управления модулем!';
$_['error_fill'] = 'Пустые поля заполнены автоматически, пожалуйста, проверьте и сохраните снова!';
// Live Options+ entry text
$_['entry_tab_gen'] = 'Основные Параметры';
$_['entry_tab_opr'] = 'Операционные Параметры';
$_['entry_tab_lng'] = 'Языковые Настройки';
$_['entry_tab_css'] = 'Cтили CSS';
$_['entry_tab_spt'] = 'Поддержка';
//
$_['entry_status'] = 'Статус';
$_['entry_price_ratio'] = 'Скидки для опций';
$_['entry_equal_sign'] = 'Знак равенства';
$_['entry_log'] = 'Журнал';
//
$_['entry_product_total'] = 'Общая цена товара';
$_['entry_option_total'] = 'Общая цена опций';
$_['entry_hide_prefix'] = 'Скрыть префиксы опций';
$_['entry_fade'] = 'Анимация, мс';
//
$_['entry_text_free'] = 'Бесплатно';
//
$_['entry_content_id'] = 'Содержимое';
$_['entry_option_id'] = 'Опции';
$_['entry_points_id'] = 'Цена в бонусах';
$_['entry_price_id'] = 'Цена';
$_['entry_reward_id'] = 'Бонусы';
$_['entry_special_id'] = 'Акция/Дисконт';
$_['entry_tax_id'] = 'Без налогов';
// Live Options+ help text
$_['help_price_ratio'] = 'Пересчитывать цены опций пропорционально скидкам на основную цену товара';
$_['help_equal_sign'] = 'Использовать знак равенства в качестве префикса товарных опций';
$_['help_log'] = 'Писать журнал для отладки в консоль браузера';
//
$_['help_product_total'] = 'Показывать итоговую цена товара с учётом указанного количества';
$_['help_option_total'] = 'Отображать цену товарных опций с учётом указанного количества товара';
$_['help_hide_prefix'] = 'Скрывать префиксы и показывать общую стоимость товарных опций (кроме checkbox)';
$_['help_text_free'] = 'Пользовательский текст для опций с нулевой стоимостью. Если не нужно - оставить поле пустым';
$_['help_fade'] = 'Скорость эффекта при изменении отображаемых цен';
//
$_['help_content_id'] = '#id основного контейнера, который содержит карточку товара';
$_['help_option_id'] = '#id-маска контейнеров с опциями';
$_['help_points_id'] = '#id контейнера с ценой товара в бонусных баллах';
$_['help_price_id'] = '#id контейнера с базовой ценой товара';
$_['help_reward_id'] = '#id контейнера с бонусами';
$_['help_special_id'] = '#id контейнера со специальной/дисконтной ценой';
$_['help_tax_id'] = '#id контейнера с ценой товара до учета налогов';

// Live Options+ main text
$_['text_extension'] = 'Расширения';
$_['text_success'] = 'Настройки Live Options+ успешно сохранены!';
$_['text_edit'] = 'Редактирование Live Options+';
