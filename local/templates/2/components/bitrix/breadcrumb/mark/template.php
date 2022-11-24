<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(empty($arResult))
	return;?>
<?for($index = 0, $itemSize = count($arResult); $index < $itemSize - 1; $index++)
{
    $indexplus = $index + 1;
    if($index > 0)
		$strReturn .= ' &#8594; ';
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);   
	/*if($indexplus == $itemSize)
	{
	
		$strReturn .= '<span typeof="v:Breadcrumb"><span property="v:title">'.$title.'</span></span>';
	
	}
	else{*/
		
		$strReturn .= '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="'.$arResult[$index]["LINK"].'" title="'.$title.'"><span itemprop="name">'.$title.'</span></a><meta itemprop="position" content="'.$indexplus.'" /></span>';
		
	//}
}
return $strReturn;
?>