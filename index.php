<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "ООО \"Арктика\" качественная трансформаторная продукция".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("keywords", "арктика трансформаторы станции тсзи прогрев бетона".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("description", "ООО \"Арктика\" занимается поставками трансформаторной продукции как собственного производства, так и производства известных заводов-изготовителей".(Regions::is_region() ? " в ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?><?
global $USER;
/* if ($USER->IsAdmin()):
?>

<div class="banner_main_page_top col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">	
		<p>Завод трансформаторного оборудования <span>Арктика</span></p>
		<p>Собственное производство<br>трансформаторных подстанций и трансформаторов</p>
	</div>
</div>
<div style="clear:both;height:3rem;"></div>
<h1>Барнаульский завод трансформаторного оборудования Арктика</h1>

<p>Производственный комплекс завода «Арктика» включает цеха для изготовления высоковольтного и низковольтного трансформаторного оборудования. Современное металлообрабатывающее оборудование позволяет создавать высококачественные элементы конструкций. Установка новых намоточных станков и специальных сушильных камер помогла существенно сократить сроки изготовления продукции для наших клиентов.</p>

<div class="flex_main">
	
	<div class="sideitem">
		<div class="sideitemin">
			<div class="item item3">Комплектные<br>трансформаторные подстанции</div>
			<div class="item item4">Трансформаторы<br>силовые масляные</div>
		</div>
		<div class="item item2">Трансформаторы<br>ТСЗИ</div>
		
	</div>
	<div class="mainitem">Трансформаторы<br>для прогрева бетона</div>
</div>



<h2>Почему выбирают именно нас?</h2>

<p>Система качества продукции и производства компании "Арктика" охватывает все этапы производства от получения технического задания до передачи заказчику готовой продукции и сопровождающих документов. Завод более 10 лет специализируется на выпуске трансформаторов различного назначения и имеет свой ряд достоинств:</p>
<div style="clear:both;height:3rem;"></div>
<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">1</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Короткие сроки изготовления заказа и высокое качество производимой продукции.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">2</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Изготовление ОЕМ-продукции по вашим техническим характеристикам, с вашим дизайном, под вашим логотипом и брендом.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">3</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Доставка до транспортных компаний бесплатно.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">4</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Дешевый автотранспорт в сторону Центральной России и на Урал.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">5</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Гибкая система скидок и индивидуальный подход к каждому клиенту.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">6</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Гарантийное и послегарантийное обслуживание производимого и поставляемого оборудования.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">7</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Гарантия на оборудование до 3х лет.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">8</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Наличие продукции на складе.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">9</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Широкая номенклатура изделий.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">10</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Строгий контроль качества.</div>
	</div>
</div>


<div style="clear:both;height:3rem;"></div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	Правила завода Арктика - наши Преимущества
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Качество
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Гибкость
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Надежность
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		Оперативность
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-12 col-md-12 col-lg-12">
		Профессионализм
	</div>
</div>



<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">1</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">Короткие сроки изготовления заказа и высокое качество производимой продукции.</div>
	</div>
</div>


<div style="clear:both;height:3rem;"></div>






<?else: */?>
<p align="center">
 <span style="font-size: 20px;"><strong>Предлагаем трансформаторное оборудование</strong></span>
</p>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
		<p align="center">
 <a href="/catalog/transformatory_dlya_progreva_betona_i_grunta/"><img alt="ктпто 80" src="/upload/medialibrary/1bd/IMG_20181019_092635.jpg" height="200" title="ктпто 80" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/transformatory_dlya_progreva_betona_i_grunta/">Трансформаторы для прогрева бетона</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<p align="center">
 <a href="/catalog/komplektnye_transformatornye_podstancii/"><img src="/upload/medialibrary/4bd/kmtp_11.jpg" height="200" alt="ктпм" title="ктпм" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/komplektnye_transformatornye_podstancii/">Комплектные трансформаторные подстанции</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<p align="center">
 <a href="/catalog/transformatory_silovye_all/"><img src="/upload/medialibrary/6ba/TMG-251.jpg" height="200" alt="тмг" title="тмг" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/transformatory_silovye_all/">Трансформаторы силовые масляные</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
		<p align="center">
 <a href="/catalog/ponizhayushhie_transformatory/"><img src="/upload/medialibrary/148/TSZI-oranzhevye-21.jpg" height="200" alt="ТСЗИ" title="ТСЗИ" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/ponizhayushhie_transformatory/">Трансформаторы ТСЗИ</a>
		</p>
	</div>
</div>
<h1>Завод трансформаторного оборудования "Арктика" - изготовитель трансформаторных подстанций и трансформаторов</h1>
 <br>
<p>
	 Завод трансформаторного оборудования «Арктика» - динамично развивающееся предприятие, более 20 лет специализирующееся на выпуске трансформаторов различного назначения.
</p>
<p>
 <strong>Конструкторские разработки</strong>
</p>
<p>
	 Одним из главных направлений деятельности завода является разработка и изготовление трансформаторного оборудования. Высокий уровень производства трансформаторного завода «Арктика» достигается за счет сочетания собственных конструкторских разработок и современных технологий. Многолетний опыт работы конструкторского бюро завода позволяет изготавливать нестандартную трансформаторную продукцию, учитывая индивидуальные технические требования заказчиков.
</p>
<p>
 <strong>Производство</strong>
</p>
<p>
	 Производственный комплекс завода «Арктика» включает цеха для изготовления высоковольтного и низковольтного трансформаторного оборудования. Современное металлообрабатывающее оборудование позволяет создавать высококачественные элементы конструкций. Установка новых намоточных станков и специальных сушильных камер помогла существенно сократить сроки изготовления продукции для наших клиентов.
</p>
<p>
 <strong>Материалы и комплектующие</strong>
</p>
<p>
	 Для производства трансформаторного оборудования мы выбираем только надежные материалы: элементы конструкции производятся из высокопрочной стали, обмотка – из алюминия, магнитопровод – из качественной электротехнической стали. Использование высококачественных электротехнических комплектующих от известных производителей ABB, Schneider Electriс, IEK гарантирует качество и надежность нашей продукции.
</p>
 <a class="more" >читать далее</a>
<div class="hidecontent">
 <strong>Продукция</strong>
	Ассортимент трансформаторной продукции завода «Арктика»:
	<ul>
		<li>Трансформаторные подстанции для прогрева бетона и грунта КТПТО</li>
		<li>Сухие трансформаторы для прогрева бетона и грунта ТСЗП</li>
		<li>Понижающие трансформаторы ТСЗИ до 100 кВт</li>
		<li>Силовые масляные трасформаторы ТМГ до 1000 кВт</li>
		<li>Комплектные трансформаторные подстанции различной комплектации: столбовые, мачтовые, киосковые</li>
		<li>Вводно-распределительные устройства ВРУ-21</li>
		<li>Камеры сборные одностороннего обслуживания КСО</li>
		<li>Комплектные трансформаторные подстанции внутренней установки КТПВ</li>
		<li>Комплектные распределительные устройства</li>
		<li>Панели распределительных щитов ЩО-70</li>
		<li>Пункты коммерческого учета электроэнергии ПКУ</li>
		<li>Распределительные силовые шкафы ШРС</li>
	</ul>
	<p>
 <strong>Контроль качества</strong>
	</p>
	 Трансформаторное оборудование, выпускаемое заводом «Арктика» сертифицировано, соответствует Госстандартам РФ и проходит обязательную предпродажную диагностику. На всю продукцию имеются сертификаты соответствия ГОСТ РФ и Декларация о соответствии. Контроль качества на заводе трансформаторного оборудования «Арктика» состоит из двух этапов. На первом этапе осуществляется входной контроль качества материалов и комплектующих. Вторым этапом являются приемо-сдаточные испытания, включающие в себя:
	<ul>
		<li>измерение сопротивления обмоток;</li>
		<li>измерение коэффициента трансформации измерение и контроль группы соединения обмоток;</li>
		<li>измерение напряжения короткого замыкания;</li>
		<li>измерение потерь при нагрузке;</li>
		<li>измерение потерь тока холостого хода;</li>
		<li>испытания диэлектрической прочности изоляции;</li>
		<li>испытания наведенным напряжением;</li>
		<li>измерение частичных разрядов;</li>
		<li>испытание на стойкость к грозовому импульсному напряжению;</li>
		<li>испытание на нагрев;</li>
		<li>испытание на короткое замыкание;</li>
		<li>измерение уровня шума.</li>
	</ul>
	 Система контроля качества на заводе «Арктика» обеспечивает соответствие выпускаемой трансформаторной продукции всем заявленным характеристикам.
	<p>
 <strong>Наш подход к клиентам</strong>
	</p>
	 Завод трансформаторного оборудования «Арктика» сотрудничает с промышленными, строительными и торговыми компаниями. Мы осуществляем комплексное обслуживание наших партнеров: от разработки индивидуальных технических решений до организации доставки в регион клиента. Наш завод осуществляет сервисное обслуживание продукции в течение срока гарантии и в последующий период. Преимущества работы с нами
	<ul>
		<li>Комплектация трансформаторной продукции по индивидуальным техническим требованиям и условиям*</li>
		<li>Размещение фирменного логотипа заказчика и покраска оборудования в фирменные цвета организации клиента*</li>
		<li>Выгодные цены по предварительным заявкам на трансформаторы с июня по сентябрь</li>
		<li>Организация доставки</li>
		<li>Гарантия 2 года и сервисное обслуживание.</li>
	</ul>
	 *- В зависимости от объема заказа. Стоимость комплектации по индивидуальному заказу, нанесение логотипа и покраска в фирменные цвета рассчитывается отдельно.
	<p>
 <strong>Выгодные условия для оптовых покупателей</strong>
	</p>
	<ul>
		<li>Наши специальные цены = Ваша гарантированная прибыль</li>
		<li>Низкие затраты на доставку: 40 000 рублей за транспортировку 20 тонн груза до г. Москва</li>
		<li>Оперативные сроки изготовления и наличие на складе</li>
		<li>Уникальный внешний вид вашей партии оборудования: покраска оборудования в любые цвета и размещения логотипа или название вашей компании*</li>
		<li>Наличие сервисных центров в крупных городах России.</li>
	</ul>
	 *- В зависимости от объема заказа. Стоимость комплектации по индивидуальному заказу, нанесение логотипа и покраска в фирменные цвета рассчитывается отдельно.
</div>
<div class="break">
</div>
<div class="titlemain">
	 Наши проекты
</div>
<div class="break">
</div>
<div class="row newslist">
	 <? 	
		$res = CIBlockElement::GetList(Array("active_from"=>"desc"), Array("IBLOCK_ID" => 19), false, Array ("nTopCount" => 2));
		while($ar_fields = $res->GetNext()){
	?>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 newslistitem">
		<div class="row">
			<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <img src="<?=CFile::GetPath($ar_fields['DETAIL_PICTURE']);?>" style="max-width: 125px;">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
 <a href="<?=$ar_fields['DETAIL_PAGE_URL']?>" title="Новость подробно"><b><?=substr($ar_fields['ACTIVE_FROM'], 0, 10);?></b></a>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
				 <?=$ar_fields['PREVIEW_TEXT']?>
			</div>
		</div>
	</div>
	 <?}?>
</div>
 <a href="/news/" class="newslistmore">все проекты</a>
 <?//endif;?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>