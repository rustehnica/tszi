<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$arFilter = Array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'], "SECTION_ID" => $arResult['SECTION']['ID']);
$ListElements = CIBlockElement::GetList(Array(), $arFilter);
$count = 0;
while($ar_res = $ListElements->GetNext()){

	$count++;

}  
?>

<?if($APPLICATION->GetCurPage() == "/mcatalog/"):?><h1>Каталог трансформаторной продукции</h1><?endif;?>
<?

if($count == 0 || $APPLICATION->GetCurPage() == "/catalog/index.php" || $APPLICATION->GetCurPage() == "/mcatalog/"):
	$CURRENT_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"]+1;
	foreach($arResult["SECTIONS"] as $arSection):?>	
		<?if($CURRENT_DEPTH>=$arSection["DEPTH_LEVEL"]):?>
			<div class="catElement col-xs-12 col-sm-6 col-md-4 col-lg-3">
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