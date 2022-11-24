<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<ul class="comments">

<?foreach($arResult['ITEMS'] as &$item):?>
	<li>
		<div class="comments-wrap">
			<div class="comments-img">
				<a class="comments-img" href="<?=$item['DETAIL_PICTURE']['SRC']?>">
					<?
						$newWidth = 130; $newHeight = 180;
						$renderImage = Array();
						$renderImage = CFile::ResizeImageGet($item['DETAIL_PICTURE'], Array("width" => $newWidth, "height" => $newHeight));				
					?>
					<img src="<?=$renderImage['src']?>" />
				</a>
			</div>
			<div class="comments-title">
				
				<?=$item['NAME']?>
			
			</div>
		</div>
	</li>
<?endforeach;unset($item);?>

</ul>