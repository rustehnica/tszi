<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("title", "��� \"�������\" ������������ ���������������� ���������".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("keywords", "������� �������������� ������� ���� ������� ������".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("description", "��� \"�������\" ���������� ���������� ���������������� ��������� ��� ������������ ������������, ��� � ������������ ��������� �������-�������������".(Regions::is_region() ? " � ".Regions::get_name_case_region(5) : ""));
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?><?
global $USER;
/* if ($USER->IsAdmin()):
?>

<div class="banner_main_page_top col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">	
		<p>����� ����������������� ������������ <span>�������</span></p>
		<p>����������� ������������<br>���������������� ���������� � ���������������</p>
	</div>
</div>
<div style="clear:both;height:3rem;"></div>
<h1>������������ ����� ����������������� ������������ �������</h1>

<p>���������������� �������� ������ �������� �������� ���� ��� ������������ ��������������� � �������������� ����������������� ������������. ����������� ��������������������� ������������ ��������� ��������� ������������������ �������� �����������. ��������� ����� ���������� ������� � ����������� ��������� ����� ������� ����������� ��������� ����� ������������ ��������� ��� ����� ��������.</p>

<div class="flex_main">
	
	<div class="sideitem">
		<div class="sideitemin">
			<div class="item item3">�����������<br>���������������� ����������</div>
			<div class="item item4">��������������<br>������� ��������</div>
		</div>
		<div class="item item2">��������������<br>����</div>
		
	</div>
	<div class="mainitem">��������������<br>��� �������� ������</div>
</div>



<h2>������ �������� ������ ���?</h2>

<p>������� �������� ��������� � ������������ �������� "�������" ���������� ��� ����� ������������ �� ��������� ������������ ������� �� �������� ��������� ������� ��������� � �������������� ����������. ����� ����� 10 ��� ���������������� �� ������� ��������������� ���������� ���������� � ����� ���� ��� ����������:</p>
<div style="clear:both;height:3rem;"></div>
<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">1</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">�������� ����� ������������ ������ � ������� �������� ������������ ���������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">2</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������������ ���-��������� �� ����� ����������� ���������������, � ����� ��������, ��� ����� ��������� � �������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">3</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">�������� �� ������������ �������� ���������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">4</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������� ������������� � ������� ����������� ������ � �� ����.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">5</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������ ������� ������ � �������������� ������ � ������� �������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">6</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">����������� � ���������������� ������������ ������������� � ������������� ������������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">7</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">�������� �� ������������ �� 3� ���.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">8</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������� ��������� �� ������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">9</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������� ������������ �������.</div>
	</div>
</div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">10</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">������� �������� ��������.</div>
	</div>
</div>


<div style="clear:both;height:3rem;"></div>

<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	������� ������ ������� - ���� ������������
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		��������
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		��������
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		����������
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
		�������������
	</div>
	<div class="main_page_flex_container col-xs-12 col-sm-12 col-md-12 col-lg-12">
		���������������
	</div>
</div>



<div class="main_page_flex_container col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="row">
		<div class="main_page_number_list col-xs-6 col-sm-6 col-md-6 col-lg-2"><div class="row">1</div></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">�������� ����� ������������ ������ � ������� �������� ������������ ���������.</div>
	</div>
</div>


<div style="clear:both;height:3rem;"></div>






<?else: */?>
<p align="center">
 <span style="font-size: 20px;"><strong>���������� ���������������� ������������</strong></span>
</p>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
		<p align="center">
 <a href="/catalog/transformatory_dlya_progreva_betona_i_grunta/"><img alt="����� 80" src="/upload/medialibrary/1bd/IMG_20181019_092635.jpg" height="200" title="����� 80" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/transformatory_dlya_progreva_betona_i_grunta/">�������������� ��� �������� ������</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<p align="center">
 <a href="/catalog/komplektnye_transformatornye_podstancii/"><img src="/upload/medialibrary/4bd/kmtp_11.jpg" height="200" alt="����" title="����" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/komplektnye_transformatornye_podstancii/">����������� ���������������� ����������</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
		<p align="center">
 <a href="/catalog/transformatory_silovye_all/"><img src="/upload/medialibrary/6ba/TMG-251.jpg" height="200" alt="���" title="���" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/transformatory_silovye_all/">�������������� ������� ��������</a>
		</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
		<p align="center">
 <a href="/catalog/ponizhayushhie_transformatory/"><img src="/upload/medialibrary/148/TSZI-oranzhevye-21.jpg" height="200" alt="����" title="����" border="0"></a>
		</p>
		<p align="center">
 <a href="/catalog/ponizhayushhie_transformatory/">�������������� ����</a>
		</p>
	</div>
</div>
<h1>����� ����������������� ������������ "�������" - ������������ ���������������� ���������� � ���������������</h1>
 <br>
<p>
	 ����� ����������������� ������������ �������� - ��������� ������������� �����������, ����� 20 ��� ������������������ �� ������� ��������������� ���������� ����������.
</p>
<p>
 <strong>��������������� ����������</strong>
</p>
<p>
	 ����� �� ������� ����������� ������������ ������ �������� ���������� � ������������ ����������������� ������������. ������� ������� ������������ ����������������� ������ �������� ����������� �� ���� ��������� ����������� ��������������� ���������� � ����������� ����������. ����������� ���� ������ ���������������� ���� ������ ��������� ������������� ������������� ���������������� ���������, �������� �������������� ����������� ���������� ����������.
</p>
<p>
 <strong>������������</strong>
</p>
<p>
	 ���������������� �������� ������ �������� �������� ���� ��� ������������ ��������������� � �������������� ����������������� ������������. ����������� ��������������������� ������������ ��������� ��������� ������������������ �������� �����������. ��������� ����� ���������� ������� � ����������� ��������� ����� ������� ����������� ��������� ����� ������������ ��������� ��� ����� ��������.
</p>
<p>
 <strong>��������� � �������������</strong>
</p>
<p>
	 ��� ������������ ����������������� ������������ �� �������� ������ �������� ���������: �������� ����������� ������������ �� ������������� �����, ������� � �� ��������, ������������� � �� ������������ ������������������ �����. ������������� ������������������ ������������������ ������������� �� ��������� �������������� ABB, Schneider Electri�, IEK ����������� �������� � ���������� ����� ���������.
</p>
 <a class="more" >������ �����</a>
<div class="hidecontent">
 <strong>���������</strong>
	����������� ���������������� ��������� ������ ��������:
	<ul>
		<li>���������������� ���������� ��� �������� ������ � ������ �����</li>
		<li>����� �������������� ��� �������� ������ � ������ ����</li>
		<li>���������� �������������� ���� �� 100 ���</li>
		<li>������� �������� ������������� ��� �� 1000 ���</li>
		<li>����������� ���������������� ���������� ��������� ������������: ���������, ��������, ���������</li>
		<li>������-����������������� ���������� ���-21</li>
		<li>������ ������� �������������� ������������ ���</li>
		<li>����������� ���������������� ���������� ���������� ��������� ����</li>
		<li>����������� ����������������� ����������</li>
		<li>������ ����������������� ����� ��-70</li>
		<li>������ ������������� ����� �������������� ���</li>
		<li>����������������� ������� ����� ���</li>
	</ul>
	<p>
 <strong>�������� ��������</strong>
	</p>
	 ���������������� ������������, ����������� ������� �������� ���������������, ������������� ������������� �� � �������� ������������ ������������� �����������. �� ��� ��������� ������� ����������� ������������ ���� �� � ���������� � ������������. �������� �������� �� ������ ����������������� ������������ �������� ������� �� ���� ������. �� ������ ����� �������������� ������� �������� �������� ���������� � �������������. ������ ������ �������� ������-��������� ���������, ���������� � ����:
	<ul>
		<li>��������� ������������� �������;</li>
		<li>��������� ������������ ������������� ��������� � �������� ������ ���������� �������;</li>
		<li>��������� ���������� ��������� ���������;</li>
		<li>��������� ������ ��� ��������;</li>
		<li>��������� ������ ���� ��������� ����;</li>
		<li>��������� ��������������� ��������� ��������;</li>
		<li>��������� ���������� �����������;</li>
		<li>��������� ��������� ��������;</li>
		<li>��������� �� ��������� � ��������� ����������� ����������;</li>
		<li>��������� �� ������;</li>
		<li>��������� �� �������� ���������;</li>
		<li>��������� ������ ����.</li>
	</ul>
	 ������� �������� �������� �� ������ �������� ������������ ������������ ����������� ���������������� ��������� ���� ���������� ���������������.
	<p>
 <strong>��� ������ � ��������</strong>
	</p>
	 ����� ����������������� ������������ �������� ������������ � �������������, ������������� � ��������� ����������. �� ������������ ����������� ������������ ����� ���������: �� ���������� �������������� ����������� ������� �� ����������� �������� � ������ �������. ��� ����� ������������ ��������� ������������ ��������� � ������� ����� �������� � � ����������� ������. ������������ ������ � ����
	<ul>
		<li>������������ ���������������� ��������� �� �������������� ����������� ����������� � ��������*</li>
		<li>���������� ���������� �������� ��������� � �������� ������������ � ��������� ����� ����������� �������*</li>
		<li>�������� ���� �� ��������������� ������� �� �������������� � ���� �� ��������</li>
		<li>����������� ��������</li>
		<li>�������� 2 ���� � ��������� ������������.</li>
	</ul>
	 *- � ����������� �� ������ ������. ��������� ������������ �� ��������������� ������, ��������� �������� � �������� � ��������� ����� �������������� ��������.
	<p>
 <strong>�������� ������� ��� ������� �����������</strong>
	</p>
	<ul>
		<li>���� ����������� ���� = ���� ��������������� �������</li>
		<li>������ ������� �� ��������: 40 000 ������ �� ��������������� 20 ���� ����� �� �. ������</li>
		<li>����������� ����� ������������ � ������� �� ������</li>
		<li>���������� ������� ��� ����� ������ ������������: �������� ������������ � ����� ����� � ���������� �������� ��� �������� ����� ��������*</li>
		<li>������� ��������� ������� � ������� ������� ������.</li>
	</ul>
	 *- � ����������� �� ������ ������. ��������� ������������ �� ��������������� ������, ��������� �������� � �������� � ��������� ����� �������������� ��������.
</div>
<div class="break">
</div>
<div class="titlemain">
	 ���� �������
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
 <a href="<?=$ar_fields['DETAIL_PAGE_URL']?>" title="������� ��������"><b><?=substr($ar_fields['ACTIVE_FROM'], 0, 10);?></b></a>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
				 <?=$ar_fields['PREVIEW_TEXT']?>
			</div>
		</div>
	</div>
	 <?}?>
</div>
 <a href="/news/" class="newslistmore">��� �������</a>
 <?//endif;?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>