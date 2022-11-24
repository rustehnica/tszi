<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<!--Начало главного меню < 768px-->

<div class="xs-menu hidden-lg hidden-md hidden-sm">

	<a>Меню <span class="caret"></span></a>
	
</div>
	
<ul class="xs-menu-list hidden-lg hidden-md hidden-sm">

	<? $flag = 0;?>

	<?foreach($arResult as &$menu_item):?>

		<?if($menu_item['DEPTH_LEVEL'] == 1 && $flag == 1):?>

			</ul></li>
			<?$flag=0;?>
		<?endif;?>
			
		<?if($menu_item['IS_PARENT'] == 1):?>
			
			<li class="xs-menu-item">
				<a><?=$menu_item['TEXT']?> <span class="caret"></span></a>
			<ul>
			<li><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
			<?$flag = 1;?>
		
		<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] > 1):?>
		
			<li><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
		
		<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] == 1):?>

			<li><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
		
		<?endif;?>
		
	<?endforeach;unset($menu_item);?>


</ul><?unset($flag);?>

<!--Конец главного меню < 768px-->
