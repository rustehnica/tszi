<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="mfeedback">
	<div class="title_feedback">Наши контакты</div>
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if(strlen($arResult["OK_MESSAGE"]) > 0)
	{
		?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 contact">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">	
				<div class="row">			
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 pr0"><div class="row"><img src="<?=SITE_TEMPLATE_PATH?>/img/contact_phone.png"></div></div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px"><div class="row">8 800 301 79 59</div></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-1"><div class="row"><img src="<?=SITE_TEMPLATE_PATH?>/img/time.png"></div></div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px"><div class="row">С 9:00 ДО 18:00</div></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-1"><div class="row"><img src="<?=SITE_TEMPLATE_PATH?>/img/contact_email.png"></div></div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px"><div class="row">transformator1@ruteh.ru</div></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12">
		<div class="row">
						<script id="bx24_form_inline" data-skip-moving="true">
				(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
						(w[b].forms=w[b].forms||[]).push(arguments[0])};
						if(w[b]['forms']) return;
						var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
						var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
				})(window,document,'https://ruteh.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

				b24form({"id":"62","lang":"ru","sec":"zkvq4t","type":"inline"});
		</script> 
		</div>
	</div>
		
	
</div>