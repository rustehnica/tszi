<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
	CModule::IncludeModule("iblock");
	$arFilter = Array(
        "IBLOCK_ID"=> 12,
        "SECTION_ID" => $_GET['id_section'],
		"ACTIVE" => "Y"
        );

    if(CIBlockSection::GetCount($arFilter) > 0){
	
		$rsSections = CIBlockSection::GetList(	
			Array("SORT"=>"ASC"),
			Array("IBLOCK_ID" => 12, "SECTION_ID" => $_GET['id_section'], 'ACTIVE' => 'Y'),
			true													
		);

		echo '<select data-levelsection="'.++$_GET['level'].'" data-idrod="'.$_GET['id_section'].'">';
		echo '<option>Выберите вид продукции</option>';
		while ($arSection = $rsSections->Fetch())
		{
			echo '<option data-level="'.$arSection["DEPTH_LEVEL"].'" data-id="'.$arSection['ID'].'">'.$arSection['NAME'].'</option>';
		}
		echo '</select>';
		
	}else{
	
		$rsSections = CIBlockElement::GetList(	
			Array("SORT"=>"ASC"),
			Array("IBLOCK_ID" => 12, "SECTION_ID" => $_GET['id_section'], 'ACTIVE' => 'Y')
		);

		echo '<select name="user_name" data-levelsection="'.++$_GET['level'].'" data-idrod="'.$_GET['id_section'].'">';
		echo '<option>Выберите вид продукции</option>';
		while ($arSection = $rsSections->Fetch())
		{
			echo '<option value="'.$arSection['NAME'].'" data-level="'.$arSection["DEPTH_LEVEL"].'" data-id="'.$arSection['ID'].'" data-type="element">'.$arSection['NAME'].'</option>';
		}
		echo '</select>';
	
	}

?>