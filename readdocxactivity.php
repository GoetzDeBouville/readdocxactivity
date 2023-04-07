<?
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Bizproc\FieldType;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);
class CBPReadDocxActivity extends CBPActivity {
    public function __construct($arParams = array())
    {
        parent::__construct($arParams);
    }
    public function Execute()
    {
        $docxFilePath = 'C:\Users\User\Downloads\4444.docx';
        $text = readDocx($docxFilePath);

        return $text;
    }

    public function HandleFault(Exception $exception)
    {
        $this->Cancel();
        return CBPActivityExecutionStatus::Fault;
    }

    public function Cancel()
    {
        return CBPActivityExecutionStatus::Cancel;
    }
}
?>