<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js");
?>

<h1>Вопрос-Ответ</h1>

<div class="accordion">
	<?foreach($arResult["SECTIONS"] as $arSection):?>
		<h2><?=$arSection['NAME']?></h2>
		<?foreach($arSection['ITEMS'] as $arElement):?>
			<?
			$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="accordion-item" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
				<div class="accordion-header"><?=$arElement['NAME']?></div>
				<div>
					<p><?=$arElement['DETAIL_TEXT']?></p>
				</div>
			</div> 
		<?endforeach;?>
	<?endforeach;?>
</div>