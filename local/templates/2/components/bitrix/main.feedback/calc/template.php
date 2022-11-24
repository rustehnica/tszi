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
  $this->setFrameMode(true);
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text" style="text-align:center;color:green;"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form class="form_calc" action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
<?
	$rsSections = CIBlockSection::GetList(	
		Array("SORT"=>"--ASC"),
		Array("IBLOCK_ID" => 12, 'ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1),
		false,
		Array()														
	);
?>
	<fieldset id="fieldset_1">
	
		<legend>�������� ������������ ��� ���������������� ���������</legend>

		<select>
			<option>�������� ��� ���������</option>
			<?
				while ($arSection = $rsSections->Fetch())
				{
					//echo '<pre>';print_r($arSection);echo '</pre>';
					echo '<option value="'.$arSection['NAME'].'" data-level="'.$arSection['DEPTH_LEVEL'].'" data-id="'.$arSection['ID'].'">'.$arSection['NAME'].'</option>';
				}
			?>
			
		</select>

	</fieldset>
	
	<fieldset class="calc_hidden" id="fieldset_2">
	
		<legend>������������ ���������:</legend>
		<div class="spinner"></div>
	
	</fieldset>
	
	<fieldset class="calc_hidden" id="fieldset_3">
	
		<legend>���������� ������:</legend>
		<p><b>������ �����!</b><br>������� ����� ��������, �� ������ �� ���� ����������.</p>
		<input name="MESSAGE" type="text" value="" placeholder="������� ����� ��������" />
		<input type="submit" name="submit" value="������ ���������">
	
	</fieldset>
	
	<?/*<fieldset id="fieldset_2" class="calc_hidden">
	
		<legend>�������� ��������� ����� ��� ��������:</legend>
		
		<p><? $location = $APPLICATION->IncludeComponent(
			"altasib:altasib.geoip",
			"",
			Array(
				"COMPONENT_TEMPLATE" => ".default"
			)
		);?></p>
		
		<input type="text" value="<?=$location?>" />
		
		<a class="calc_back">�����</a>
		<a class="calc_next">�����</a>
		
	</fieldset>*/?>
	
	
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
</form>
</div>