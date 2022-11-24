<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//echo '<pre>';print_r($arResult);echo '</pre>';

if(Regions::is_region()){
	
	$arResult['IPROPERTY_VALUES']['SECTION_META_TITLE'] = $arResult['IPROPERTY_VALUES']['SECTION_META_TITLE'].' в '.Regions::get_name_case_region(5);
	$arResult['IPROPERTY_VALUES']['SECTION_META_KEYWORDS'] = $arResult['IPROPERTY_VALUES']['SECTION_META_KEYWORDS'].' в '.Regions::get_name_case_region(5);
	$arResult['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION'] = $arResult['IPROPERTY_VALUES']['SECTION_META_DESCRIPTION'].' в '.Regions::get_name_case_region(5);
	
}