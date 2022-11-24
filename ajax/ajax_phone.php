<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?

$Phone = array('DETAIL_PICTURE' => SITE_TEMPLATE_PATH."/img/phone-rustehnica.png", 'NUMBER' => '8 800 700 46 53');
//$Phone = array('DETAIL_PICTURE' => "/upload/iblock/dda/telefon_2.png", 'NUMBER' => '8 3852 22 63 60');

if (CModule::IncludeModule("iblock")){

	if($_SERVER['SERVER_NAME'] != 'tszi.ru'){
	
		$arFilter = array("IBLOCK_ID" => PHONE_IBLOCK_ID, 'PROPERTY_92' => $_SERVER['SERVER_NAME']);
		$arSelect = array('DETAIL_PICTURE', 'PROPERTY_89');	
		
		$rsPhone = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
		
		if($arPhone = $rsPhone->Fetch()){
		
			$Phone['DETAIL_PICTURE'] = CFile::GetPath($arPhone['DETAIL_PICTURE']);
			$Phone['NUMBER'] = $arPhone['PROPERTY_89_VALUE'];				
			$Phone['CITY'] = $arPhone['PROPERTY_92_VALUE'];
			
		}
		
		echo "<img class='number-header' src='{$Phone['DETAIL_PICTURE']}' />";
		return;
		
	}else{
	
		if(isset($_GET['utm_source']) && !empty($_GET['utm_source'])){
		
			$_GET['utm_source'] = addslashes($_GET['utm_source']);
			$_GET['utm_source'] = htmlspecialchars ($_GET['utm_source']);
		
			$arFilter = array("IBLOCK_ID" => PHONE_IBLOCK_ID, 'PROPERTY_88' => $_GET['utm_source']);
			$arSelect = array('DETAIL_PICTURE', 'PROPERTY_89');	
			
			$rsPhone = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
			
			if($arPhone = $rsPhone->Fetch()){
			
				$Phone['DETAIL_PICTURE'] = CFile::GetPath($arPhone['DETAIL_PICTURE']);
				$Phone['NUMBER'] = $arPhone['PROPERTY_89_VALUE'];				
				$Phone['CITY'] = $arPhone['PROPERTY_92_VALUE'];
				
			}
			
			setcookie ("NUMBER", $Phone['NUMBER'], time() + 2592000, '/', 'tszi.ru');
			setcookie ("SRC", $Phone['DETAIL_PICTURE'], time() + 2592000, '/', 'tszi.ru');	
			
			echo "<img class='number-header' src='{$Phone['DETAIL_PICTURE']}' />";
			return;
		
		}elseif(isset($_COOKIE['NUMBER']) && !empty($_COOKIE['NUMBER']) && isset($_COOKIE['SRC']) && !empty($_COOKIE['SRC'])){
			
			$_COOKIE['NUMBER'] = addslashes($_COOKIE['NUMBER']); 
			$_COOKIE['NUMBER'] = htmlspecialchars ($_COOKIE['NUMBER']); 
			
			$_COOKIE['DETAIL_PICTURE'] = addslashes($_COOKIE['DETAIL_PICTURE']); 
			$_COOKIE['DETAIL_PICTURE'] = htmlspecialchars ($_COOKIE['DETAIL_PICTURE']); 
			
			$Phone['NUMBER'] = $_COOKIE['NUMBER'];			
			$Phone['DETAIL_PICTURE'] = $_COOKIE['SRC'];
			
			echo "<img class='number-header' src='{$Phone['DETAIL_PICTURE']}' />";
			return;
			
		}else{
		
			echo "<img class='number-header' src='{$Phone['DETAIL_PICTURE']}' />";
			return;
		
		}
	}
	
}unset($arFilter);unset($arSelect);unset($rsPhone);unset($arPhone);