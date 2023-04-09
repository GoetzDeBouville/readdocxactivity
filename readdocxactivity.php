<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Bizproc\FieldType;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Element\AbstractContainer;

Loc::loadMessages(__FILE__);

class ReadDocxActivity extends CBPActivity {
    public function __construct($arParams = array())
    {
        parent::__construct($arParams);
    }
    
    public function Execute()
    {
        $docxFilePath = 'C:\Users\User\Downloads\4444.docx';
        $text = $this->readDocx($docxFilePath);

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

    private function extractTextFromElement($element) {
        $text = '';
        
        if (method_exists($element, 'getText')) {
            $text .= $element->getText();
        } elseif ($element instanceof AbstractContainer) {
            $elements = $element->getElements();
            foreach ($elements as $childElement) {
                $text .= $this->extractTextFromElement($childElement);
            }
        }
        
        return $text;
    }

    private function readDocx($filePath) {
        $phpWord = IOFactory::load($filePath);
        
        $text = '';
        foreach ($phpWord->getSections() as $section) {
            $elements = $section->getElements();
            foreach ($elements as $element) {
                $text .= $this->extractTextFromElement($element);
            }
        }
        
        return $text;
    }
}