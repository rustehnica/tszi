<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? // �������� ������������ ����� �������
//echo '<pre>';print_r($arResult);echo '</pre>';
$arSection = Array();
$rsSections = CIBlockSection::GetList(	
										Array("SORT"=>"��ASC"),
										Array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'], "ID" => $arResult['SECTION']['ID']),
										false,
										Array('UF_AVERGATION')														
									);

$arSection = $rsSections->Fetch();
unset($rsSections);
?>
<? // �������� ��� ������� ���� �� ������, ���� ��� �������� �������� ��� ������� �������

if(count($arResult["SECTIONS"]) == 0){

	$rsSections = CIBlockSection::GetList(Array(), Array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'],"!ID" => $arResult['SECTION']['ID'],  "SECTION_ID" => $arResult['SECTION']['IBLOCK_SECTION_ID']));

	while($arRes = $rsSections->GetNext()){

		$arResult['SAME_LEVEL'][] = $arRes;

	 }unset($arRes);unset($rsSections);

}

if(Regions::is_region()){
	
	$APPLICATION->SetPageProperty("title", $arResult['SECTION']['IPROPERTY_VALUES']['SECTION_META_TITLE'].' � '.Regions::get_name_case_region(5));
	$APPLICATION->SetPageProperty("keywords", $arResult['SECTION']['IPROPERTY_VALUES']['SECTION_META_KEYWORDS'].' � '.Regions::get_name_case_region(5));
	$APPLICATION->SetPageProperty("description", $arResult['SECTION']['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION'].' � '.Regions::get_name_case_region(5));
	
}