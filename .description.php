<?php
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Bizproc\FieldType;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arActivityDescription = array(
    'NAME' => Loc::getMessage('DOCX_READER_NAME'),
    'DESCRIPTION' => Loc::getMessage('DOCX_READER_DESCRIPTION'),
    'TYPE' => 'activity',
    'CLASS' => 'ReadDocxActivity',
    'JSCLASS' => 'BizProcActivity',
    'CATEGORY' => array(
        'ID' => 'other',
    ),
    'ADDITIONAL_RESULT' => array('Text')
);