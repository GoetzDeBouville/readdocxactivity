<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

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
    'RETURN' => [
        'Text' => [
            'NAME' => Loc::getMessage('DOCX_READER_RETURN_TEXT'),
            'TYPE' => FieldType::STRING,
        ],
    ],
);