<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $item):?>
	<div class="catElement">
		<?
            $urlClass = "";
			if(strlen($item["NAME"])<10 && $APPLICATION->GetCurPage() != '/catalog/index.php')  $urlClass = "s14";
		?>
		<a href="<?=$item["DETAIL_PAGE_URL"]?>">
			<div class="catElementBG">
				<div class="img"><?=CFile::ShowImage($item["DETAIL_PICTURE"]["SRC"],100,70,"",$item["SECTION_PAGE_URL"])?></div>
				<div class="name <?=$urlClass?>"><?=$item["NAME"]?></div>
			</div>
		</a>
	</div>
<?endforeach; unset($item);?>