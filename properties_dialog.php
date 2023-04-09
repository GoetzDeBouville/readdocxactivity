<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$currentDocxFilePath = !empty($currentValues['DocxFilePath']) ? $currentValues['DocxFilePath'] : '';
?>

<tr>
    <td align="right" width="40%">
        <span class="adm-required-field"><?= GetMessage("PATH_TO_DOCX_FILE") ?>:</span>
    </td>
    <td width="60%">
        <?= CBPDocument::ShowParameterField("string", 'DocxFilePath', $currentDocxFilePath, Array('size' => 50)) ?>
    </td>
</tr>


<!-- <?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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
    <td align="right" width="40%"><span class="adm-required-field"><?= GetMessage("FILE_TYPE") ?>:</span></td>
    <td width="60%">
        <select name="file_type" id="file_type" onchange="BPDRCA_changeFileType(this.value)">
            <option value="path" <?= selected($arCurrentValues["file_type"] === 'path') ?>><?= GetMessage("PATH_TO_DOCX_FILE") ?></option>
            <option value="url" <?= selected($arCurrentValues["file_type"] === 'url') ?>><?= GetMessage("PATH_TO_DOCX_FILE_URL") ?></option>
        </select>
    </td>
</tr>
<tr>
    <td align="right" width="40%"><span class="adm-required-field"><?= GetMessage("PATH_TO_DOCX_FILE") ?>:</span></td>
    <td width="60%">
        <input type="text" name="docx_file_path" id="docx_file_path" value="<?= htmlspecialcharsbx($arCurrentValues["docx_file_path"]) ?>" size="50">
    </td>
</tr>
<tr>
    <td align="right" width="40%"><span class="adm-required-field"><?= GetMessage("PATH_TO_DOCX_FILE_URL") ?>:</span></td>
    <td width="60%">
        <input type="text" name="docx_file_url" id="docx_file_url" value="<?= htmlspecialcharsbx($arCurrentValues["docx_file_url"]) ?>" size="50">
    </td>
</tr>
<script type="text/javascript">
    var BPDRCA_changeFileType = function(type) {
        document.getElementById('docx_file_path').disabled = (type != 'path');
        document.getElementById('docx_file_url').disabled = (type != 'url');
    }
    setTimeout(function() {
        BPDRCA_changeFileType('<?= CUtil::JSEscape($arCurrentValues["file_type"]) ?>');
    }, 10);
</script> -->
