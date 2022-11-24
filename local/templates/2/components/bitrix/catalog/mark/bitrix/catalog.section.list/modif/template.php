<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if($APPLICATION->GetCurPage() == "/mcatalog/index.php"):?><h1>Каталог трансформаторной продукции</h1><?endif;?>

<div class="break"></div>
<?if($APPLICATION->GetCurPage() != "/mcatalog/index.php"):?><h1><?=$arResult['SECTION']['NAME']?></h1><?endif;?>
<?if($arResult["SECTION"]["DESCRIPTION"]):?>

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
	<?endif;unset($arSection);?>
	<?=$arResult["SECTION"]["DESCRIPTION"]?>

<?endif;?>
<!--noindex-->
<?if(count($arResult["SECTIONS"]) > 0):?>

	<div class="mark">
		<ul>	
			<?foreach($arResult["SECTIONS"] as &$arSection):?>
				<li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></li>
			<?endforeach;?>
		</ul>
	</div>
	
<?else:?>

	<div class="mark">
		<ul>	
			<?foreach($arResult['SAME_LEVEL'] as $item):?>
				<li><a href="<?=$item["SECTION_PAGE_URL"]?>"><?=$item["NAME"]?></a></li>
			<?endforeach;unset($item);?>
		</ul>
	</div>

<?endif;?><!--/noindex-->