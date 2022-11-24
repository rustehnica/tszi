<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult)):?>

<!--Начало главного меню--><ul>
<? $flag = 0;?>
<?foreach($arResult as &$menu_item):?>

	<?if($menu_item['DEPTH_LEVEL'] == 1 && $flag == 1):?>

		</ul></li>
		<?$flag=0;?>
	<?endif;?>
		
	<?if($menu_item['IS_PARENT'] == 1):?>
		
		<li class="dropdown" <?if($menu_item['SELECTED'] == 1): echo 'class="active"'; endif;?>>
			<a data-toggle="dropdown" class="dropdown-toggle-js" href="<?=$menu_item['LINK']?>"><?=$menu_item['TEXT']?></a>
		<ul class="dropdown-menu">
		<?$flag = 1;?>
	
	<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] > 1):?>
	
		<li><a href="<?=$menu_item['LINK']?>"><?=$menu_item['TEXT']?></a></li>
	
	<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] == 1):?>

		<li <?if($menu_item['SELECTED'] == 1): echo 'class="active"'; endif;?>><a href="<?=$menu_item['LINK']?>"><?=$menu_item['TEXT']?></a></li>
	
	<?endif;?>
	
<?endforeach;unset($menu_item);?>
</ul><?unset($flag);?><!--Конец главного меню-->

<?endif;?>