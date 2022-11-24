<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
foreach($arResult["SECTIONS"] as $arSection):?>

<?if($CURRENT_DEPTH>=$arSection["DEPTH_LEVEL"]){?>
	<div class="catElement col-xs-12 col-sm-6 col-md-4 col-lg-3">
		<div class="catElementNested">
			<div class="name"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></div>
			<div class="separator"></div>
			<div class="img"><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><img src='<?=CFile::ResizeImageGet($arSection["PICTURE"], array('width'=>1500000000, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];?>'></a></div>
			<div class="detailed"><a class="section_detailed" href="<?=$arSection["SECTION_PAGE_URL"]?>">Подробнее</a></div>
		</div>
	</div>
    <?}?>
<?endforeach?>

<? if($arResult["SECTION"]["DESCRIPTION"]) echo "<p><div>".$arResult["SECTION"]["DESCRIPTION"]."</div></p>"?>