<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<!--Начало главного меню > 768px-->

<ul class="hidden-xs">

<? $flag = 0;?>

<?foreach($arResult as &$menu_item):?>

	<?if($menu_item['DEPTH_LEVEL'] == 1 && $flag == 1):?>

		</ul></li>
		<?$flag=0;?>
	<?endif;?>
		
	<?if($menu_item['IS_PARENT'] == 1):?>
		
		<li class="dropdown<?if($menu_item['SELECTED'] == 1): echo ' active_menu_main'; endif;?>" >
			<a data-toggle="dropdown" class="dropdown-toggle-js" href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?> <span class="caret"></span></a>
		<ul class="dropdown-menu">
		<li class="hidden-lg"><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
		<?$flag = 1;?>
	
	<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] > 1):?>
	
		<li><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
	
	<?elseif($menu_item['IS_PARENT'] != 1 && $menu_item['DEPTH_LEVEL'] == 1):?>

		<li <?if($menu_item['SELECTED'] == 1): echo 'class="active_menu_main"'; endif;?>><a href="<?=$menu_item['LINK']?>" itemprop="url"><?=$menu_item['TEXT']?></a></li>
	
	<?endif;?>
	
<?endforeach;?>
<?unset($menu_item);unset($flag);?>
</ul>

<!--Конец главного меню > 768px-->
