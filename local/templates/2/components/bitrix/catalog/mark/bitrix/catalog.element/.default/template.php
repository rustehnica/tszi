<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<span itemscope itemtype="http://schema.org/Product">
<?$GLOBALS['arrFilter'] = array("!ID"=> $arResult['ID']);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"links",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "12",
		"SECTION_ID" => $arResult['IBLOCK_SECTION_ID'],
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"PAGE_ELEMENT_COUNT" => "0",
		"LINE_ELEMENT_COUNT" => "0",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"FILTER_NAME" => "arrFilter",
	)
);?>
<div class="break"></div>
<h1 itemprop="name"><?=$arResult['NAME']?></h1>

<?if(!empty($arResult["MORE_PHOTO"])):?>

	<div class="zoom-section">    	  
		<div class="zoom-small-image" style="margin-right:21px; ">
			
			<?if($arResult["MORE_PHOTO"][0]['HEIGHT'] < 401 || $arResult["MORE_PHOTO"][0]['WIDTH'] < 401):?>
				
				<a onclick="return false;" href="#" class = 'cloud-zoom no_pointer' id='zoom1' rel="adjustX: 10, adjustY:-4">
					<img src="<?=$arResult["MORE_PHOTO"][0]['SRC']?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" itemprop="image">
				</a>
			<?else:?>
			
				<a href='<?=$arResult["MORE_PHOTO"][0]["SRC"]?>' class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">
					<?
						$newWidth = 400; $newHeight = 400;
						$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][0], Array("width" => $newWidth, "height" => $newHeight));
						
					?>
					<img src="<?=$renderImage['src']?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" itemprop="image">
				</a>
				
			<?endif;?>
			
		</div>
		<?if( count($arResult["MORE_PHOTO"]) > 1 ):?>
		<div class="zoom-desc">      
			<p>
									
				<?if($arResult["MORE_PHOTO"][0]['HEIGHT'] < 401 || $arResult["MORE_PHOTO"][0]['WIDTH'] < 401):?>
				
					<a onclick="return false;" href="#" class='cloud-zoom-gallery' rel="useZoom: 'zoom1',<?
								$newWidth = 110; $newHeight = 80;
								$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][0], Array("width" => $newWidth, "height" => $newHeight));				
						?>smallImage: '<?=$arResult["MORE_PHOTO"][0]['SRC']?>'">
						<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
					</a>	
					
				<?else:?>
					
					<a style="text-align: -moz-center;"	href='<?=$arResult["MORE_PHOTO"][0]['SRC']?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1',<?
								$newWidth = 400; $newHeight = 400;
								$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][0], Array("width" => $newWidth, "height" => $newHeight));				
						?>smallImage: '<?=$renderImage["src"]?>'">

						<?
							$newWidth = 110; $newHeight = 80;
							$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][0], Array("width" => $newWidth, "height" => $newHeight));				
						?>
						<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
					</a>
				
				<?endif;?>				
				<?for($i = 1; $i < count($arResult["MORE_PHOTO"]); $i++):?>
									
					<?if($arResult["MORE_PHOTO"][$i]['HEIGHT'] < 401 || $arResult["MORE_PHOTO"][$i]['WIDTH'] < 401):?>
					
						<a onclick="return false;" href="#" class='cloud-zoom-gallery' rel="useZoom: 'zoom1',  smallImage: '<?=CFile::GetPath($arResult["MORE_PHOTO"][$i]['ID'])?>'">
							<?
								$newWidth = 110; $newHeight = 80;
								$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$i], Array("width" => $newWidth, "height" => $newHeight));				
							?>
							<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
						</a>
						
					<?else:?>
					
						<a	href='<?=$arResult["MORE_PHOTO"][$i]["SRC"];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1',<?
								$newWidth = 400; $newHeight = 400;
								$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$i], Array("width" => $newWidth, "height" => $newHeight));									
							?>smallImage: '<?=$renderImage['src']?>'">
							<?
								$newWidth = 110; $newHeight = 80;
								$renderImage = CFile::ResizeImageGet($arResult["MORE_PHOTO"][$i], Array("width" => $newWidth, "height" => $newHeight));				
							?>
							<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
						</a>
					
					<?endif;?>
					
				<?endfor; unset($i);?>
			</p>
		</div>
		<?endif;?>
	</div>

<?else:?>
	<?
		$rsSections = CIBlockSection::GetList(	
											Array("SORT"=>"­­ASC"),
											Array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult['IBLOCK_SECTION_ID']),
											false,
											Array('UF_PHOTO')														
										);
		$arSection = $rsSections->Fetch();
		$rsFile = CFile::GetByID($arSection['UF_PHOTO'][0]);
		$arFile = $rsFile->Fetch();
	?>
	<div class="zoom-section">    	  
		<div class="zoom-small-image" style="margin-right:21px;">
		
			<?if($arFile['HEIGHT'] < 401 || $arFile['WIDTH'] < 401):?>
				
				<a onclick="return false;" href="#" class = 'cloud-zoom no_pointer' id='zoom1' rel="adjustX: 10, adjustY:-4">
					<img src="<?=CFile::GetPath($arFile['ID'])?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" itemprop="image">
				</a>
				
			<?else:?>
				<a href='<?=CFile::GetPath($arFile['ID'])?>' class = 'cloud-zoom' id='zoom1' rel="adjustX: 10, adjustY:-4">
					<?
						$newWidth = 400; $newHeight = 400;
						$renderImage = CFile::ResizeImageGet($arFile, Array("width" => $newWidth, "height" => $newHeight));
						
					?>
					<img src="<?=$renderImage['src']?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" itemprop="image">
				</a>
				
			<?endif;?>
			
		</div>
		<?if( count($arSection['UF_PHOTO']) > 1 ):?>
			<div class="zoom-desc">  
				<p>		
					<?/*(if($arFile['HEIGHT'] < 400 || $arFile['HEIGHT'] < 400):?>
					
						<a onclick="return false;" href="#" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?=CFile::GetPath($arFile['ID'])?>'">
							<?
								$newWidth = 110; $newHeight = 80;
								$renderImage = CFile::ResizeImageGet($arFile, Array("width" => $newWidth, "height" => $newHeight));				
							?>
							<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
						</a>	
						
					<?else:?>
						
						<a	href='<?=CFile::GetPath($arFile['ID'])?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1',<?
									$newWidth = 330; $newHeight = 240;
									$renderImage = CFile::ResizeImageGet($arFile, Array("width" => $newWidth, "height" => $newHeight));				
							?>smallImage: '<?=$renderImage["src"]?>'">

							<?
								$newWidth = 110; $newHeight = 80;
								$renderImage = CFile::ResizeImageGet($arFile, Array("width" => $newWidth, "height" => $newHeight));				
							?>
							<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
						</a>
					
					<?endif;*/?>				
					
					<?for($i = 1; $i < count($arSection['UF_PHOTO']); $i++):?>
										
						<?if($arSection['UF_PHOTO'][$i]['HEIGHT'] < 401 || $arSection['UF_PHOTO'][$i]['WIDTH'] < 401):?>
							<a onclick="return false;" href="#" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?=CFile::GetPath($arSection['UF_PHOTO'][$i])?>'">
								<?
									$newWidth = 110; $newHeight = 80;
									$renderImage = CFile::ResizeImageGet($arSection['UF_PHOTO'][$i], Array("width" => $newWidth, "height" => $newHeight));				
								?>
							
								<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
							</a>
							
						<?else:?>
						
							<a	href='<?=$arSection['UF_PHOTO'][$i]["SRC"]?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1',<?
										$newWidth = 400; $newHeight = 400;
										$renderImage = CFile::ResizeImageGet($arSection['UF_PHOTO'][$i], Array("width" => $newWidth, "height" => $newHeight));			
									?>smallImage: '<?=$renderImage["src"]?>'">
								<?
									$newWidth = 110; $newHeight = 80;
									$renderImage = CFile::ResizeImageGet($arSection['UF_PHOTO'][$i], Array("width" => $newWidth, "height" => $newHeight));				
								?>
								<img src='<?=$renderImage['src']?>' class="zoom-tiny-image">
							</a>
						
						<?endif;?>
						
					<?endfor; unset($i);?>
				</p>
			</div>
		<?endif;?>
	</div>

<?endif;?>

<div class="right-gallery" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<div class="info">
		<?$rsSections = CIBlockSection::GetList(	
													Array("SORT"=>"­­ASC"),
													Array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult['IBLOCK_SECTION_ID']),
													false,
													Array('UF_INFO')														
												);
		$arSection = $rsSections->Fetch();?>
		<?foreach($arSection['UF_INFO'] as &$item):?>
			<div class="wrap-info">
				<div class="img-info"><img src="<?=SITE_TEMPLATE_PATH?>/img/shield.png"></div>
				<div class="desc-info"><?=$item?></div>
			</div>
		<?endforeach;unset($item);?>
	</div>
	<div class="break"></div>
	<div class="request"><a class="popup-with-form" href="#header_feedback"><img src="<?=SITE_TEMPLATE_PATH?>/img/request.png" /></a></div>
	<div class="boast">
	
		<ul>
			<?$rsSections = CIBlockSection::GetList(	
													Array("SORT"=>"­­ASC"),
													Array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arResult['IBLOCK_SECTION_ID']),
													false,
													Array('UF_AVERGATION', 'UF_PRICE_REMARKS', 'UF_QL', 'UF_CERT')														
												);
			$arSection = $rsSections->Fetch();
			foreach($arSection['UF_AVERGATION'] as &$item):?>
				<li>
					<?=$item;?>
				</li>				
			<?endforeach; unset($item);?>
			
		</ul>
	
	</div>
	<div class="price">
		<?$tmg = explode("/", $APPLICATION->GetCurDir());?>		
		ЦЕНА*:<div class="value"><? echo $tmg[2] == "tmg" ? "от " :"";?><?echo $arResult['PROPERTIES']['PRICE']['VALUE'] ? $arResult['PROPERTIES']['PRICE']['VALUE'] : 'По запросу';?>
		<?echo $arResult['PROPERTIES']['PRICE']['VALUE'] ? 
		'<meta itemprop="price" content="'.str_replace( array('руб', ' '), "",$arResult['PROPERTIES']['PRICE']['VALUE']).'">
		<meta itemprop="priceCurrency" content="RUB">' : '';?>
		</div>
	
	</div>
	<?if(in_array($arResult['ID'], array(731, 732, 789, 790, 791, 792))):?>
		<div class="remarks">*Торгующим и строительным организациям<br>предоставляемзначительные скидки.</div>
	<?elseif($arResult['PROPERTIES']['PRICE']['VALUE'] != '' && $arSection['UF_PRICE_REMARKS'] == "1" && $arSection['IBLOCK_SECTION_ID'] != '312' && $arResult['PROPERTIES']['PRICE']['VALUE'] != 'по запросу'):?>
		<div class="remarks">*Цена указана розничная,<br>возможны значительные скидки от объёма.<br />Оптовым компаниям специальные условия.</div>
	<?elseif($arResult['PROPERTIES']['PRICE']['VALUE'] != '' && $arSection['UF_PRICE_REMARKS'] == "1" && $arSection['IBLOCK_SECTION_ID'] == '312'):?>
		<div class="remarks">*Оптовые скидки уточняйте у менеджеров.</div>
	<?elseif(($arResult['PROPERTIES']['PRICE']['VALUE'] == 'по запросу' || !$arResult['PROPERTIES']['PRICE']['VALUE']) && $arSection['UF_PRICE_REMARKS'] == "1"):?>
	
		<div class="remarks">*Цена расчитывается на основе<br>заполненного опросного листа.</div>
	
	<?endif;?>

</div>
<div class="break"></div>


<div class="linebreak"></div>

<?if($arSection['UF_QL'] != "" || $arSection['UF_CERT'] != ""):?>
	<p class="dql">
		
		<?if($arSection['UF_QL'] != ""):?>
			<a href="<?=CFile::GetPath($arSection['UF_QL']);?>"><b>Скачать опросный лист</b></a>
		<?endif;?>
		
		<?if($arSection['UF_CERT'] != ""):?>
			<a class="nostyle" target="blank" href="<?=CFile::GetPath($arSection['UF_CERT']);?>"><b>Сертификат</b></a>
		<?endif;?>
		
	</p>
<?endif;?>

<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Описание</a></li>
		<li><a href="#tabs-2"><?=$arResult['PROPERTIES']['CHARACTER']['NAME']?></a></li>
	</ul>
	<div id="tabs-1">
		<span itemprop="description">
			<?if($arResult["DETAIL_TEXT"]):?>
				<?=$arResult["DETAIL_TEXT"]?>
			<?elseif($arResult["PREVIEW_TEXT"]):?>
				<?=$arResult["PREVIEW_TEXT"]?><br />
			<?endif;?>
		</span>
	</div>
  <div id="tabs-2">
    <table class="table table-striped table-bordered">
	<tbody>
		<?for($i = 0; $i < count($arResult['PROPERTIES']['CHARACTER']['VALUE']); $i++):?>
			<?if($arResult['PROPERTIES']['CHARACTER']['VALUE'][$i] && $arResult['PROPERTIES']['CHARACTER']['DESCRIPTION'][$i]):?>
				<tr>
				
					<td>
						<?=$arResult['PROPERTIES']['CHARACTER']['VALUE'][$i]?>
					</td>
					<td>
						<?=$arResult['PROPERTIES']['CHARACTER']['DESCRIPTION'][$i]?>
					</td>
				
				</tr>
			<?endif;?>
		<?endfor;unset($i);?>
	</tbody>
	</table>
  </div>
</div>
</span>