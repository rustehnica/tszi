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
?>

<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>

		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">			

			<div class="news-title">
				<?/*div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<? if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
						<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
					<?endif?>
				</div*/?>
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<span><a style="color:#000000;" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-image">
				<div class="row">
					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
									class="preview_picture"
									border="0"
									src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
									width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
									alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
									title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
									style="float:left"
									/></a>
						<?else:?>
							<img
								class="preview_picture"
								border="0"
								src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								width="100px"
								alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
								style="float:left"
								/>
						<?endif;?>
					<?endif?>	
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-description">
				<div class="row">
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<?echo $arItem["PREVIEW_TEXT"];?>
					<?endif;?>
				</div>
			</div>
			
		</div>	

	<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
