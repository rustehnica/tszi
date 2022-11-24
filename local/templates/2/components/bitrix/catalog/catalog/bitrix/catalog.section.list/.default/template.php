<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$arFilter = Array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'], "SECTION_ID" => $arResult['SECTION']['ID']);
$ListElements = CIBlockElement::GetList(Array(), $arFilter);
$count = 0;
while($ar_res = $ListElements->GetNext()){$count++;}
?>

<?if($APPLICATION->GetCurPage() == "/catalog/index.php" || $APPLICATION->GetCurPage() == "/mcatalog/index.php"):?><h1>Каталог трансформаторной продукции</h1><?endif;?>
<?

if($count == 0 || $APPLICATION->GetCurPage() == "/catalog/index.php" || $APPLICATION->GetCurPage() == "/mcatalog/index.php"):
	$CURRENT_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"]+1;
	foreach($arResult["SECTIONS"] as $arSection):	
		if($CURRENT_DEPTH>=$arSection["DEPTH_LEVEL"]):?>
			<div class="catElement product col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<div class="catElementNested">
					<div class="name"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></div>
					<div class="separator"></div>
					<div class="img"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><img src='<?=CFile::ResizeImageGet($arSection["PICTURE"], array('width'=>1500000000, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];?>'></a></div>
					<div class="detailed"><a class="section_detailed" href="<?=$arSection["SECTION_PAGE_URL"]?>">Подробнее</a></div>
				</div>
			</div>
		<?endif;?>
	<?endforeach;unset($arSection);unset($CURRENT_DEPTH);?>
<?endif;unset($count);?>
<?if(count($arResult["SECTIONS"]) > 0):?><div class="break"></div><?endif;?>

<?if($arResult["SECTION"]["DESCRIPTION"]):?>

	<?$rsSections = CIBlockSection::GetList(	
										Array("SORT"=>"­­ASC"),
										Array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'], "ID" => $arResult['SECTION']['ID']),
										false,
										Array('UF_AVERGATION', "UF_BOTTOM_CATALOG")														
									);
	$arSection = Array();
	$arSection = $rsSections->Fetch();?>
	<?if(!empty($arSection['UF_AVERGATION'])):?>
		<div class="avergation-category">
			<div id="tabs">
			  <ul>
				<li class="active">Преимущества оборудования</li>
			  </ul>
			  <div id="tabs-1">
				<table class="table table-striped">
				<tbody>

					<?foreach($arSection['UF_AVERGATION'] as &$item):?>
						<tr>
							<td>
								<?=$item;?>
							</td>
						</tr>				
					<?endforeach; unset($item);?>

				</tbody>
				</table>
			  </div>
			</div>
		</div>
	<?endif;?>
	<?=$arResult["SECTION"]["DESCRIPTION"]?>

<?endif;?>
<?/*
<!--noindex-->
<?$frame = $this->createFrame()->begin();?>
	<div class="mark">
		<ul>
			<?if(count($arResult['MARK']) < 25):?>
			
				<?for( $i = 0; $i < count($arResult['MARK']); $i++):?>
					<li><a href="<?=$arResult['MARK'][$i]['SECTION_PAGE_URL']?>"><?=$arResult['MARK'][$i]['NAME']?></a></li>
				<?endfor;unset($i);?>
				
			<?else:?>
			
				<?for( $i = 0; $i < 25; $i++):?>
					<?$rand = rand(0, count($arResult['MARK']) - 1);?>
					<li><a href="<?=$arResult['MARK'][$rand]['SECTION_PAGE_URL']?>"><?=$arResult['MARK'][$rand]['NAME']?></a></li>
				<?endfor;unset($i);?>
			
			<?endif;?>
		</ul>
	</div>
<?$frame->end();?>
<!--/noindex-->*/?>
<?if($arSection["UF_BOTTOM_CATALOG"]):?>
<div class="catalog_bottom">

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"bottom",
	Array(
		"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => $arParams["BASKET_URL"],
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "",
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "66",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INCLUDE_SUBSECTIONS" => "N",
		"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
		"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGE_ELEMENT_COUNT" => "60",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array("BASE"),
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PROPERTY_CODE" => array("CHAR", "={$arParams["LIST_PROPERTY_CODE"]}", ""),
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"SECTION_ID" => $arSection["UF_BOTTOM_CATALOG"] ? $arSection["UF_BOTTOM_CATALOG"] : false,
		"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"SECTION_USER_FIELDS" => array("", ""),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
</div>
<?endif;?>