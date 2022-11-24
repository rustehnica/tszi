<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if (count($arResult) != 0):?>

	<ul>
		<li style="font-weight:bold;"><a href="/poddelka/">ОСТОРОЖНО<br>ПОДДЕЛКИ!</a></li>
		<li><script id="bx24_form_button" data-skip-moving="true">
        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                (w[b].forms=w[b].forms||[]).push(arguments[0])};
                if(w[b]['forms']) return;
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://ruteh.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

        b24form({"id":"30","lang":"ru","sec":"uswljg","type":"button","click":""});
</script><a class="b24-web-form-popup-btn-30">Заказ онлайн</a></li>
		<?/* li><a class="popup-with-form" href="#calc_feedback">Калькулятор</a></li */?>
		<?foreach($arResult as &$item):?>

			<li><a href="<?=$item['LINK']?>"><?=$item['TEXT']?></a></li>

		<?endforeach;?>

	</ul>

<?endif;?>