<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<?foreach($arResult["ITEMS"] as $item):?>
	<div class="catElement product col-xs-6 col-sm-6 col-md-4 col-lg-<?=$item['PROPERTIES']['_auto_R_KVA']['VALUE'] ? '3' : '2'?>">
		<?
            $urlClass = "";
			if(strlen($item["NAME"])<10 && $APPLICATION->GetCurPage() != '/catalog/index.php')  $urlClass = "s14";
		?>
		<div class="catElementNested">				
			<div class="name"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><?=$item["NAME"]?></a></div>
			<div class="separator"></div>
			<div class="img"><a href="<?=$item["DETAIL_PAGE_URL"]?>"><img src='<?=CFile::ResizeImageGet($item["DETAIL_PICTURE"], array('width'=>1500000000, 'height'=>300), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src'];?>'></a></div>
			<?if($item['PROPERTIES']['_auto_R_KVA']['VALUE']):?>			
				<div class="char">
					<ul>
						<?foreach($item['PROPERTIES'] as $key => $char):?>
							<?if(strpos($key, '_auto_') !== false && $char["SORT"] < 500):?>
								<li><span style="font-weight:bold;"><?=$char['NAME']?></span>: <?=$char['VALUE']?></li>
							<?endif;?>						
							
						<?endforeach;?>
					</ul>
				</div>
			<?endif;?>
			<div class="detailed"><a class="section_detailed" href="<?=$item["DETAIL_PAGE_URL"]?>">Подробнее</a></div>
		</div>
	</div>

<?endforeach; unset($item);?>
<?if(count($arResult["ITEMS"]) > 0):?><div style="margin-bottom:1rem;" class="break"></div><?endif;?>

