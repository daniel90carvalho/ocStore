<?php
// Heading
$_['heading_title']    = 'CSV Price import/export';

// Text
$_['text_export']      = 'Зделать дамп файл с ценами';
$_['text_success']     = 'Данные импортированы!';
$_['text_module']     = 'Модули';
$_['text_notes']     = 'Импорт поддерживает следующие форматы: <br />
<strong>[ID товара];[Наименование товара];[Модель товара];[Производитель];[Кол-во товара];[Цена товара]</strong> - соответствует формату экспорта, обновление по [ID товара]<br />
<strong>[Модель товара];[Кол-во товара];[Цена товара]</strong> - обновление по [Модель товара]<br />
<strong>[Модель товара];[Цена товара]</strong> 	- обновление по [Модель товара], обновляется только цена товара
<br/ ><br/ >Разделитель полей знак "<strong>точка с запятой</strong>", разделитель строк "<strong>перенос строки</strong>". <br /> При импорте данных обновляются только количество и цена товара<p>Данный модуль не удаляет и не добавляет товар!</p>';

// Entry
$_['entry_import']		= 'Импорт данных из файла:';
$_['entry_import_help']		= 'Исходный файл должен быть в кодировке Windows-1251';
$_['entry_export']		= 'Экспорт:';
$_['entry_category']	= 'Экспорт из категорий:';
$_['entry_category_help']	= 'Если категории не выбраны - экспортирует все товары, <br>файл выгружается в кодировке Windows-1251';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['error_empty']      = 'Загруженный файл пуст!';

// Button
$_['button_export']		= 'Экспорт';
$_['button_import']		= 'Импорт';
?>