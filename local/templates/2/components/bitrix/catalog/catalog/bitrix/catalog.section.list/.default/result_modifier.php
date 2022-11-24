<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//echo '<pre>';print_r($arResult);echo '</pre>';
$arSections = array();

$nav = CIBlockSection::GetNavChain(false, $arResult['SECTION']['ID']);

while($arRes = $nav->GetNext()){
	
    $arSections[] = $arRes['ID'];

}unset($arRes);

$res = CIBlockSection::GetList(Array(), Array("IBLOCK_ID" => 23, "UF_COMMUN" => $arSections), false, Array("NAME", "SECTION_PAGE_URL"));

while($arRes = $res->GetNext()){

	$arResult['MARK'][] = Array("NAME" => $arRes['NAME'], "SECTION_PAGE_URL" => $arRes['SECTION_PAGE_URL']);

}unset($arRes);