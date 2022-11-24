<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
 $this->setFrameMode(true);
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text" style="text-align:center;color:green;"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form id="form_order" action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="mf-name">
		<div class="mf-text">
			<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input size="43" type="text" placeholder="Введите Ваше имя в это поле..." name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="mf-email">
		<div class="mf-text">
			<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input size="43" type="text" placeholder="Введите Ваш e-mail в это поле..." name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<div class="mf-message">
		<div class="mf-text">
			<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<textarea id="user_message" placeholder="Введите Ваше сообщение в это поле..." name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
	</div>
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha">		
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
			<input type="text" name="captcha_word" size="30" maxlength="50" value="">
		</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" >
</form>
</div>