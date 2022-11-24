<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $item):?>
	<div class="catElement bottom col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<div class="catElementNested">
			<div class="name"><a href="<?=$APPLICATION->GetCurPage(false);?>"><?=$item["NAME"]?></a></div>
			<div class="separator"></div>
			<div class="img"><?=CFile::ShowImage($item["DETAIL_PICTURE"]["SRC"], 150, 120, "", $item["SECTION_PAGE_URL"])?></div>
			<?/* div class="char_bottom">				
				<ul><?=$item['PROPERTIES']['CHAR']['~VALUE']?></ul>
			</div */?>
			<div class="price_bottom">Цена: <?=explode(".", $item['CATALOG_PRICE_1'])[0]?> руб</div>
			<div class="detailed"><a class="section_detailed" href="#top">Купить</a></div>
		</div>
	</div>

<?endforeach; unset($item);?>