<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (empty($arResult["ALL_ITEMS"]))
	return;
$k = 0;
$t = 0;
?>

<ul class="tt-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
		<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
		<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
		<li data-id="<?=$k?>" class="level-item">
			<?if($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["UF_LOGO_SECTION"]):?>
				<div class="with_logo"><img data-hover="<?=CFile::GetPath($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["UF_LOGO_SECTION_HOVER"])?>" style="width:32px;" src="<?=CFile::GetPath($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["UF_LOGO_SECTION"]);?>"></div>
				<a class="with_logo_url" href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" itemprop="url">
					<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
					<? if( $arResult["ALL_ITEMS"][$itemID]['IS_PARENT'] == "1"){ echo '';}?>
				</a>
			<?else:?>
				<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" itemprop="url">
					<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
					<? if( $arResult["ALL_ITEMS"][$itemID]['IS_PARENT'] == "1"){ echo '';}?>
				</a>
			<?endif;?>			
		<?if (is_array($arColumns) && count($arColumns) > 0):?>

				<?foreach($arColumns as $key=>$arRow):?>

					<ul class="level2" data-id="<?=$k?>">
					
						<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
						
							<li>
							
								<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>" itemprop="url">
								
									<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
									
								</a>

								<?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>
								
									<ul class="level3" data-id="<?=$k?>">
									
										<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
										
											<li>
											
												<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>" itemprop="url">
												
													<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
												
												</a>

											</li>
											
										<?endforeach;?>
									
									</ul>
									
								<?endif?>
							
							</li>
							
						<?endforeach;?>
					
					</ul>

				<?endforeach;?>
				<?if ($existPictureDescColomn):?>
	
					

				<?endif?>
			
		<?endif?>
		</li>
		<?$k++;?>
	<?endforeach;unset($k);?>
</ul>