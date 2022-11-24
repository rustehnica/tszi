<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?global $USER;?>


<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	<?if(count($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE']) > 1):?>
		<ul class="pgwSlider">
			<?foreach($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'] as $key => $item):?>
				<li><img src="<?=CFile::GetPath($item)?>" data-description="<?=$arResult['PROPERTIES']['SLIDER_PHOTO']['DESCRIPTION'][$key]?>"></li>
			<?endforeach;unset($item);?>			
		</ul>
		<div style="clear:both;"></div>
	<?else:?>	
		<div style="text-align:center;width:100%;">
			<img
				style="float:none"
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				style="max-width:100%"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
			
			<div style="clear:both;"></div>
		</div>
	<?endif;?>

<?endif?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 3rem;"><div class="row"><span style="color: #000000;font-size: 34px; line-height: 0.95; font-weight: 300;   background-position: center center;   border-color: transparent;   border-style: solid;"><?=$arResult["NAME"]?></span></div></div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-detail" style="margin: 3rem 0;min-height:16rem;"><div class="row"><span style="color: #000000; font-size: 18px;  line-height: 1.55;   font-weight: 400;    background-position: center center;    border-color: transparent;  border-style: solid;"><?=$arResult["DETAIL_TEXT"]?></div></div>

<?if($arResult['PROPERTIES']['NEED']['VALUE']):?>
	<div class="row" style="margin: 12rem 0;">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div style="border-top: 4px solid #ff6b09;padding-top:1rem;"><span style="font-size:23px;font-weight:300;">Потребность клиента</span></div></div>
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8"><span style="font-size: 18px; line-height: 0.95;"><?=$arResult['PROPERTIES']['NEED']['VALUE']?></span></div>
	</div>
<?endif;?>
<?if($arResult['PROPERTIES']['DECISION']['VALUE']):?>
	<div class="row" style="margin: 12rem 0;">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div style="border-top: 4px solid #ff6b09;padding-top:1rem;"><span style="font-size:23px;font-weight:300;">Решение</span></div></div>
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8"><span style="font-size: 18px; line-height: 0.95;"><?=$arResult['PROPERTIES']['DECISION']['VALUE']?></span></div>
	</div>
<?endif;?>
<?if($arResult['PROPERTIES']['BENEFIT']['VALUE']):?>
	<div class="row" style="margin: 12rem 0;">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div style="border-top: 4px solid #ff6b09;padding-top:1rem;"><span style="font-size:23px;font-weight:300;">Выгода</span></div></div>
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8"><span style="font-size: 18px; line-height: 0.95;"><?=$arResult['PROPERTIES']['BENEFIT']['VALUE']?></span></div>
	</div>
<?endif;?>
	<?if($arResult['PROPERTIES']['SUPPLIED']['VALUE']):?>
	<div class="row" style="margin: 12rem 0;">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><div style="border-top: 4px solid #ff6b09;padding-top:1rem;"><span style="font-size:23px;font-weight:300;">Поставленное оборудование</span></div></div>
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8"><span style="font-size: 18px; line-height: 0.95;"><?=$arResult['PROPERTIES']['SUPPLIED']['VALUE']?></span></div>
	</div>
<?endif;?>

<?/* else:?>

<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<?if(count($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE']) > 1):?>
			<ul class="pgwSlider">
				<?foreach($arResult['PROPERTIES']['SLIDER_PHOTO']['VALUE'] as $key => $item):?>
					<li><img src="<?=CFile::GetPath($item)?>" data-description="<?=$arResult['PROPERTIES']['SLIDER_PHOTO']['DESCRIPTION'][$key]?>"></li>
				<?endforeach;unset($item);?>			
			</ul>
			<div style="clear:both;"></div>
		<?else:?>	
			<div style="text-align:center;width:100%;">
				<img
					style="float:none"
					class="detail_picture"
					border="0"
					src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
					style="max-width:100%"
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
				
				<div style="clear:both;"></div>
			</div>
		<?endif;?>
	
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
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
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;?>

	<?if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
<?endif; */?>