<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?
$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "DETAIL_PICTURE");
$arFilter = Array("ID" => $arResult['PROPERTIES']['UF_PRODUCTS']['VALUE'], "IBLOCK_ID" => "12");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ar = $res->GetNext()):?>
	<div class="catElement product col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<?
            $urlClass = "";
			if(strlen($ar["NAME"])<10 && $APPLICATION->GetCurPage() != '/catalog/index.php')  $urlClass = "s14";
		?>
		<div class="catElementNested">				
			<div class="name"><a href="<?=$ar["DETAIL_PAGE_URL"]?>"><?=$ar["NAME"]?></a></div>
			<div class="separator"></div>
			<div class="img"><a href="<?=$ar["DETAIL_PAGE_URL"]?>"><img src='<?=CFile::ResizeImageGet($ar["DETAIL_PICTURE"], array('width'=>1500000000, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];?>'></a></div>			
			<div class="detailed"><a class="section_detailed" href="<?=$ar["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
		</div>
	</div>
<?endwhile;?>
<div style="clear:both;margin-bottom:1rem;"></div>
<div class="news-detail">	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h1><?=$arResult["NAME"]?></h1>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
 	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
 	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):?>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>			
	<?endforeach;?>
</div>
