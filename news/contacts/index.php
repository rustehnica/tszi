<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "�������� - ����������".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("keywords", "�������� �������� ����������".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("description", "�������� �� \"����������\"".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));

?><div class="wrapper">

	<h1>��������<?=Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""?></h1>
	<div class="break"></div>
	<div>
	
		<div itemscope="" itemtype="http://schema.org/Organization">
			<?/*<h2>������� ����, �����, ��������� �����:</h2>
			<p>
				<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
					<span itemprop="postalCode">656922</span>,
					<span itemprop="addressLocality">�. �������,</span><span itemprop="streetAddress"> ��. ������, 181</span>
				 </span>
			</p>*/?>
			<p id="contact_phone">
					<span style="font-size:17px;">������ ���������� �����: <span itemprop="globalLocationNumber"><b><?=Helper::phone()['NUMBER']?></b></span></span> <br>
					<?if(!Regions::is_region()):?><span style="font-size:17px;">�������� �� �������� ����������������� ������������<?=Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""?> <span itemprop="globalLocationNumber"><b><?if(!Regions::is_region() || !Regions::get_phone_region()):?>8-3852-22-63-60<?else:?><?=Regions::get_phone_region()?><?endif;?></b></span></span> <br><?endif;?>
					<p style="font-size:17px;">Email: <b>tr@tszi.ru</b></p>						
			</p>	
			
		</div>
		<div class="span4">
		<h2>����� ������</h2>
		<h3>����� ������</h3>
		<table border="1" cellpadding="1" cellspacing="1" width="100%">
			<tbody>
				<tr>
					<td style="text-align: center;">
						 ��-��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						 9:00 - 18:00
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
				</tr>
			</tbody>
		</table>
<h3>����������� � ����� ���������</h3>
		<table border="1" cellpadding="1" cellspacing="1" width="100%">
			<tbody>
				<tr>
					<td style="text-align: center;">
						 ��-��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						 9:00 - 18:00
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
				</tr>
			</tbody>
		</table>
<h3>������������</h3>
		<table border="1" cellpadding="1" cellspacing="1" width="100%">
			<tbody>
				<tr>
					<td style="text-align: center;">
						 ��-��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
					<td style="text-align: center;">
						 ��
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						 8:00 - 17:00
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
					<td style="text-align: center; color: red;">
						 ��������
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<?/*<p><span itemprop="name">��� "����������"</span></p>

			 ���������: <br>
			 ��� 2223594873 <br>
			 ��� 222301001 <br>
			 ��� 040173754 <br>
			 ���� 1132223011084 <br>*/?>

	<div class="span4">
	</div>
	
	<?/*<!--������.�����--><div class="span5">
	
		<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"contact",
	Array(
		"KEY" => "AN9L2lEBAAAAdgM7BwIAMqCOdRi3Br2udNEH3M5_S0-Xhn4AAAAAAAAAAAAnjG8n9AtHyR2Jgxut_I4MQXjQkg==",
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.32300199842138;s:10:\"yandex_lon\";d:83.64280085767888;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:83.642504413635;s:3:\"LAT\";d:53.323018134121;s:4:\"TEXT\";s:15:\"�� \"����������\"\";}}}",
		"MAP_WIDTH" => "400",
		"MAP_HEIGHT" => "400",
		"CONTROLS" => array("TOOLBAR","ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
		"MAP_ID" => ""
	)
);?>
	
	</div><!--����� ������.�����-->*/?>
	
</div><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>