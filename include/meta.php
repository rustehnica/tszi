<?
// подключение служебной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	$APPLICATION->SetPageProperty("title", $arParams['TITLE']);
	$APPLICATION->SetPageProperty("keywords", $arParams['KEYWORDS']);
	$APPLICATION->SetPageProperty("description", $arParams['DESCRIPTION']);

// подключение визуальной части пролога
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
?>