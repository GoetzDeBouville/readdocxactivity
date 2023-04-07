<?
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Bizproc\FieldType;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;

/** @var array $arCurrentValues */
/** @var string $formName */

Loc::loadMessages(__FILE__);

function selected($condition) {
    if ($condition) {
        echo 'selected';
    }
}

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arDocumentFields = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("DOCUMENT", 0, LANGUAGE_ID);
?>
<tr>
    <td align="right" width="40%"><span class="adm-required-field"><?= GetMessage("PATH_TO_DOCX_FILE") ?>:</span></td>
    <td width="60%">
        <input type="text" name="docx_file_path" id="docx_file_path" value="<?= htmlspecialcharsbx($arCurrentValues["docx_file_path"]) ?>" size="50">
    </td>
</tr>
<script type="text/javascript">
    var BPDRCA_changeFileType = function(type) {
        document.getElementById('docx_file_path').disabled = (type != 'path');
    }
    setTimeout(function() {
        BPDRCA_changeFileType('<?= CUtil::JSEscape($arCurrentValues["file_type"]) ?>');
    }, 10);
</script>