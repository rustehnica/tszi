<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult["MORE_PHOTO"] = array();   
   if(isset($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) && is_array($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]))   
   {   
      foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE)   
      {   
         $FILE = CFile::GetFileArray($FILE);   
         if(is_array($FILE))   
            $arResult["MORE_PHOTO"][]=$FILE;   
      }   
   }
   
if(Regions::is_region()){
	
	$arResult['META_TAGS']['TITLE'] = $arResult['META_TAGS']['TITLE'].' в '.Regions::get_name_case_region(5)];
	$arResult['META_TAGS']['BROWSER_TITLE'] = $arResult['META_TAGS']['BROWSER_TITLE'].' в '.Regions::get_name_case_region(5);
	$arResult['META_TAGS']['KEYWORDS'] = $arResult['META_TAGS']['KEYWORDS'].' в '.Regions::get_name_case_region(5);
	$arResult['META_TAGS']['DESCRIPTION'] = $arResult['META_TAGS']['DESCRIPTION'].' в '.Regions::get_name_case_region(5);
	
}