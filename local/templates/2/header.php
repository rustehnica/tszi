<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WCNX9MJ');</script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="//tszi.ru/favicon.png" type="image/png">
	<?if(Regions::is_region()):?>
		<?foreach(Regions::get_yandex_ver_region() as $item){echo $item;}?>
	<?else:?>
		<meta name="google-site-verification" content="ZIXubyTe17jNnfVlujIURamyu8VyF7t7HIzaA-KJhhU" />
		<meta name="google-site-verification" content="L4eZYieVtnApITo91swMhCB5qIwb5PDZYv5ccoijBII" />
		<meta name="yandex-verification" content="0088afb5bd1646e7" />
	<?endif;?>
    <title><?$APPLICATION->ShowTitle();?></title>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<?/* <script defer src="<?=SITE_TEMPLATE_PATH."/js/phone.js"?>"></script> */?>
	<script defer src="<?=SITE_TEMPLATE_PATH."/js/jquery-ui.min.js"?>"></script>
	<script defer src="<?=SITE_TEMPLATE_PATH?>/js/pgwslider.min.js"></script>
	<script defer src="<?=SITE_TEMPLATE_PATH."/js/myscript.js"?>"></script>
	<script defer src="<?=SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js"?>"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script defer src="<?=SITE_TEMPLATE_PATH."/js/bootstrap.min.js"?>"></script>	
	
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/magnific-popup.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/responsive.css');?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/pgwslider.min.css');?>
	
	<?$APPLICATION->ShowHead();?>
	<?if(Regions::is_region()):?>
		<meta name="googlebot" content="noindex">
		<meta name="bingbot" content="noindex">
		<meta name="slurp" content="noindex">
		<meta name="Mail.Ru" content="noindex">
	<?endif;?>
	
	<!-- Marquiz script start -->
	<script>
	(function(w, d, s, o){
	  var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
		if (document.readyState !== 'loading') Marquiz.init(o);
		else document.addEventListener("DOMContentLoaded", function() {
		  Marquiz.init(o);
		});
	  };
	  d.head.insertBefore(j, d.head.firstElementChild);
	})(window, document, 'script', {
		host: '//quiz.marquiz.ru',
		region: 'eu',
		id: '5e57917d8f09ba00440aef78',
		autoOpen: false,
		autoOpenFreq: 'once',
		openOnExit: true,
		disableOnMobile: true
	  }
	);
	</script>
	<!-- Marquiz script end -->
</head>

<body itemscope="" itemtype="http://schema.org/WebPage">
	
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCNX9MJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div class="wrap">
<section class="container">

	<header itemscope itemtype="http://schema.org/WPHeader">

		<div class="row">
		
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 logo_header">
				<div>
					<div>
						<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/<?=explode(".", $_SERVER['HTTP_HOST'])[0] == "ekb" ? "logo_ekb" : "logo"?>.png" alt='Завод трансформаторного оборудования "РусТехника"<?if(Regions::is_region()){echo ' в ' . Regions::get_name_case_region(5);}?>'></a>
						<p style="text-align: center;margin-bottom: 0;line-height: 16px;font-size: 16px;margin-top: 5px;text-transform:uppercase;">Барнаульский<br>Завод Трансформаторов</p>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 search">			
				<div>
					<div>
						<?/* span style="color:#94a7ad;font-size: 1.7rem;text-transform:uppercase;">Бесплатный номер</span><br>
						<span style="font-size: 3rem;font-weight:bold;">+7 800 301 79 59</span */?>	
					</div>					
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 phone">
				<div>
					<div>
						<?/* span style="color:#94a7ad;font-size: 1.7rem;text-transform:uppercase;">Бесплатный номер</span><br */?>
						
					</div>
					<div>			
						<?/*span style="font-size: 3rem;font-weight:bold;"><?=explode(".", $_SERVER['HTTP_HOST'])[0] == "ekb" ? "+7 3433 00 93 48" : "+7 3852 22 24 06"?></span*/?>
						<span style="line-height:2.1rem;font-size: 2rem;">transformator1@ruteh.ru</span><br>
						<span style="line-height:2.6rem;font-size: 2.5rem;font-weight:bold;"><a style="text-decoration:none;color:#000;" href="tel:88003017959">+7 800 301 79 59</a></span>	<br>
						<span style="line-height:2.6rem;font-size: 2.5rem;font-weight:bold;"><a style="text-decoration:none;color:#000;" href="tel:89612339992">+7 961 233 99 92</a></span>	
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 hidden-md send">
				<div>				
					<script data-b24-form="click/40/65x2on" data-skip-moving="true">
						(function(w,d,u){
							var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
							var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
						})(window,document,'https://cdn-ru.bitrix24.ru/b196659/crm/form/loader_40.js');
					</script>
					<div><a href="javascript:;">Как с нами связаться?</a></div>
				</div>
			</div>
		
		</div>
		
	</header>
	
</section>

<section class="container">

	<span itemscope itemtype="http://schema.org/SiteNavigationElement">
		<nav class="menuhorizontal hidden-xs">
		
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"main", 
				array(
					"ROOT_MENU_TYPE" => "left",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "2",
					"CHILD_MENU_TYPE" => "left_child",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
			
		</nav>
	</span>
	
	<span itemscope itemtype="http://schema.org/SiteNavigationElement">
		<nav class="menuhorizontal hidden-sm hidden-md hidden-lg">
		
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"main_mobile", 
				array(
					"ROOT_MENU_TYPE" => "left",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "2",
					"CHILD_MENU_TYPE" => "left_child",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?>
			
			
			
		</nav>
	</span>

</section>

<?//if($APPLICATION->GetCurPage(false) !== '/' && strpos($APPLICATION->GetCurDir(), 'mcatalog') === false):?>

<?if($APPLICATION->GetCurPage(false) != '/mcatalog/'):?>

	<section class="container">
		
		<div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
			<?if(defined('IS_PAGE') == true && IS_PAGE != "YES" && $APPLICATION->GetCurPage(false) !== '/catalog/'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb", 
					"", 
					array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s3",
						"COMPONENT_TEMPLATE" => "template",
						"COMPOSITE_FRAME_MODE" => "A",
						"COMPOSITE_FRAME_TYPE" => "AUTO"
					),
					false
				);?>
			<?endif;?>
			
		</div>

	</section>

<?endif;?>

<? if (strpos($APPLICATION->GetCurDir(), SITE_DIR . 'catalog/') === 0):?>
	<div class="show-for-xlarge" style="color:#ffffff;padding:1rem 0;font-size:1.2rem;text-transform:uppercase;">	
		<div class="container wrap">
			<div class="head_catalog">
				<div class="large-12 xlarge-3"><div>Наличие на складе</div></div>
		
				<div class="large-12 xlarge-3"><div><a style="color:#000;" href="/dostavka/">Гибкая система<br>оплаты, возможность<br>отсрочки</a></div></div>
		
				<div class="large-12 xlarge-3"><div>Поставки напрямую<br>с производства</div></div>			
		
				<div class="large-12 xlarge-3"><div><a style="color:#000;" href="/oplata/">Доставка по РФ и<br>странам СНГ</a></div></div>
			</div>
		</div>
	</div>
<?endif; ?>

<section class="container wrap">


	
	<div class="row">
	
		<aside class="col-xs-12 col-lg-3" itemscope itemtype="http://schema.org/WPSideBar" >
		
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"catalog_vertical2", 
				array(
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "N",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MAX_LEVEL" => "4",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "Y",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N",
					"MENU_THEME" => "site"
				),
				false
			);?>
		
			<?if($section[1] == "catalog"):?>
			
				<div class="contact-catalog">Консультация специалиста<br><?if(Regions::is_region()){echo ' в ' . Regions::get_name_case_region(5);}?></div>
				<div>
				
					<table>
						<?$arManager = Helper::manager();?>
						<tr><td><tr><td class="cname"><?=$arManager['NAME']?> <?=$arManager['LAST_NAME']?></td></tr></td></tr>
						<tr>
							
							<?if($arManager["PERSONAL_PHOTO"]):?><td><img src="<?=CFILE::GetPath($arManager["PERSONAL_PHOTO"])?>" /></td><?endif;?>
							<td>
							
								<table id="manager_phone">									
									
									<?$frame = new \Bitrix\Main\Page\FrameHelper("manager_phone"); $frame->begin();?>	
																
										<tr><td><img src="/bitrix/templates/2/img/cphone.png" /> <span class="zphone"><?=$arManager['PERSONAL_PHONE']?></span></td></tr>
										
									<?$frame->beginStub();?>
										
									<?$frame->end();?>
									<tr><td><img src="/bitrix/templates/2/img/cemail.png" /> <a href="mailto:<?=$arManager['EMAIL']?>"><?=$arManager['EMAIL']?></a></td></tr>
								</table>
							
							</td>							
								
						</tr>
						<?if($arManager['WORK_DEPARTMENT']) $operator = $arManager['WORK_DEPARTMENT'];?>
					</table>	
				</div>
				<?unset($manager);?>
			<?endif;?>
			
			<?if($APPLICATION->GetCurPage(false) != "/" && stripos($APPLICATION->GetCurPage(false), '/news/') === false):?><br>
			<div class="titlemain"><a href="/news/" title="Новости">Наши проекты</a></div>
			<div class="break"></div>
			<div class="newslist">
				<? 	
					$res = CIBlockElement::GetList(Array("active_from"=>"desc"), Array("IBLOCK_ID" => 19), false, Array ("nTopCount" => 2));
					while($ar_fields = $res->GetNext()){
				?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 newslistitemside">
						<div class="row">
							<div class="col-xs-4 col-sm-5 col-md-4 col-lg-4">
								<div class="row">
										<img src="<?=CFile::GetPath($ar_fields['DETAIL_PICTURE']);?>" style="width: 100%;">
								</div>
							</div>
							<div class="col-xs-8 col-sm-7 col-md-8 col-lg-8">
								<a href="<?=$ar_fields['DETAIL_PAGE_URL']?>" title="Новость подробно"><b><?=substr($ar_fields['ACTIVE_FROM'], 0, 10);?></b></a>
							</div>
							<div class="col-xs-8 col-sm-7 col-md-8 col-lg-8">
								 <?=$ar_fields['PREVIEW_TEXT']?>
							</div>
						</div>
					</div>
				 <?}?>
			</div>
			<?endif;?>
			
		</aside>
		<article class="col-xs-12 col-lg-9">