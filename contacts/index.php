<?
define("IS_PAGE", "YES");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "Контакты - Арктика".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("keywords", "контакты компания Арктика".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("description", "Контакты ООО \"Арктика\"".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
?><h1>Контакты<?=Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""?></h1>
<div class="break" style="margin-bottom:15px;">
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="contacts_div">
			<div>
 <img src="/bitrix/templates/2/img/sbit.png">
			</div>
			<div class="title-h2">
				 Отдел продаж
			</div>
			<div class="time">
				 С 8:00 ДО 18:00
			</div>
			<div class="separator">
			</div>
			<div class="row text-left">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 title-h3">
					 Менеджеры по продажам:
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pr0">
 <img src="/bitrix/templates/2/img/contact_phone.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 ptb3px">
							 +7 800 301 79 59
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 ptb3px">
						</div>
					</div>
				</div>
			</div>
			<div class="row text-left">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
 <img src="/bitrix/templates/2/img/contact_email.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px">
 <a href="mailto:transformator1@ruteh.ru">transformator1@ruteh.ru</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="contacts_div">
			<div>
 <img src="/bitrix/templates/2/img/proiz.png">
			</div>
			<div class="title-h2">
				 Производство
			</div>
			<div class="time">
				 С 8:00 ДО 17:00
			</div>
			<div class="separator">
			</div>
			<div class="row text-left">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-12 title-h3">
					 Технический отдел:
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pr0">
 <img src="/bitrix/templates/2/img/contact_phone.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px">
					 +7 800 301 79 59
				</div>
			</div>
			<div class="row text-left">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
 <img src="/bitrix/templates/2/img/contact_email.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px">
 <a href="mailto:transformator1@ruteh.ru">transformator1@ruteh.ru</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
 <img src="/bitrix/templates/2/img/adress.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px">
					 г. Барнаул, проезд Южный, 31Г, корпус 1
				</div>
			</div>
		</div>
	</div>
</div>
<div class="break" style="margin-bottom:15px;"></div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="contacts_div" style="height: 495px;">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aca250ed2e563c44e112df595ef6fd3862f2dccd618c8abb79725b42ec92bd8a7&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true&amp;apikey=adedbc89-17e9-40e2-ba0f-36fb3ab1baec"></script>

</div>
</div>
</div>
<div class="break" style="margin-bottom:15px;"></div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="contacts_div" style="height: 700px;">
			<div>
 <img src="/bitrix/templates/2/img/pred.png">
			</div>
			<div class="title-h2">
				 Представительство в Екатеринбурге
			</div>
			<div class="time">
				 С 9:00 ДО 18:00
			</div>
			<div class="separator">
			</div>
			<div class="break" style="margin-bottom:15px;">
			</div>
			 <?/* div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
 <img src="/bitrix/templates/2/img/contact_email.png">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px" style="text-align:left;">
 <a href="mailto:ekb@ruteh.ru">ekb@ruteh.ru</a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 pr0">
 <img src="/bitrix/templates/2/img/contact_phone.png">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-10 pl0 ptb3px">
				 8 (3433) 00-93-48
			</div>
		</div */?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-1 pr0" style="text-align:right;">
 <img src="/bitrix/templates/2/img/adress.png">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-11 ptb3px" style="text-align:left;">
					 г. Екатеринбург, площадь 1-ой Пятилетки, литер 95
				</div>
			</div>
			<div class="break" style="margin-bottom:15px;">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				 <iframe src="https://yandex.ru/map-widget/v1/-/CCQ3BYWdlB" width="100%" frameborder="1" allowfullscreen="true" style="position:relative;height:400px;border:0;"></iframe>
			</div>
		</div>
	</div>
</div>
<p>
	 ООО АРКТИКА ОГРН: 1192225011791
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>