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
<ul class="section-links">

	<?foreach($arResult['ITEMS'] as &$item):?>

		<li>
			<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$item['NAME']?>">
				<?=$item['NAME']?>
			</a>
		</li>

	<?endforeach;unset($item);?>

</ul>