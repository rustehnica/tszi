<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arSelect = array("ID");
$arFilter = array("IBLOCK_ID" => IBLOCK_ID, "CODE" => $arParams['SECTION_CODE_PARENT']);
$arResult['SECTION_ID_PARENT'] = CIBlockSection::GetList(Array(), $arFilter, false, $arSelect)->Fetch()['ID'];

$f = 0;
foreach($arResult['ITEMS'] as $key => $item){
	
	foreach($item['PROPERTIES']['BANNERS_SECTIONS']['VALUE'] as $id){
	
		if($id == $arResult['SECTION_ID_PARENT'])$f = 1;
	
	}unset($id);
	if($f == 0)unset($arResult['ITEMS'][$key]);else $f = 0;

}unset($item);unset($arFilter);unset($arSelect);unset($key);unset($f);
