		</article>
	</div>
</section>
</div>
<!--noindex-->
<div style="border:3px solid #eee;padding-top:1rem;">
<section class="container footer">

	<footer itemscope itemtype="http://schema.org/WPFooter">
		
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6"><a href="/"><img src="/bitrix/templates/2/img/logo.png" alt="Завод трансформаторного оборудования &quot;Арктика&quot;"></a></div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
			Вы принимаете условия <a href="/politika-konfidentsialnosti/">политики конфиденциальности</a> и пользовательского соглашения каждый раз, когда оставляете свои данные в любой форме обратной связи на сайте tszi.ru. <a href="/mcatalog/">Метки</a></div></div>
	

	</footer>
	
</section>
</div>




<div class="menuright hidden-xs">

	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"menuright",
		Array(
			"ROOT_MENU_TYPE" => "right",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "N",
			"MENU_CACHE_GET_VARS" => array(""),
			"MAX_LEVEL" => "2",
			"CHILD_MENU_TYPE" => "left_child",
			"USE_EXT" => "Y",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N",
			"MENU_THEME" => "site"
		)
	);?>
	
</div>


<!--/noindex-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<!--??????????? js-->	
	<div style="display: none;max-width:600px;" id="trueModal">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.feedback",
			"main_feedback",
			Array(
		"AJAX_MODE" => "Y",
				"AJAX_OPTION_SHADOW" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"EMAIL_TO" => "transformator1@ruteh.ru",
				"EVENT_MESSAGE_ID" => array("5"),
				"OK_TEXT" => "Спасибо, ваше сообщение принято.",
				"REQUIRED_FIELDS" => array("NAME","EMAIL"),
				"USE_CAPTCHA" => "Y"
			)
		);?>
	</div>
<script>(function(t, p) {window.Marquiz ? Marquiz.add([t, p]) : document.addEventListener('marquizLoaded', function() {Marquiz.add([t, p])})})('Widget', {id: '5e57917d8f09ba00440aef78', position: 'left', delay: 10, autoOpen: 10, disableOnMobile: true})</script>
<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","44a3twpb");
</script>

<script type="text/javascript">
var _ctreq_b24 = function(data) {
    var sid = 44967;
    var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
    var post_data = Object.keys(data).reduce(function(a,k){if(!!data[k]){a.push(k+'='+encodeURIComponent(data[k]));}return a},[]).join('&');
    var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
    request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
};
window.addEventListener('b24:form:submit', function(e){
    var form = event.detail.object;
    if (form.validated){
        var fio = ''; var phone = ''; var email = ''; var comment = '';
        form.getFields().forEach(function(el){
            if(el.name=='LEAD_NAME' || el.name=='CONTACT_NAME'){ fio = el.value(); }
            if(el.name=='LEAD_PHONE' || el.name=='CONTACT_PHONE'){ phone = el.value(); }
            if(el.name=='LEAD_EMAIL' || el.name=='CONTACT_EMAIL'){ email = el.value(); }
            if(el.name=='LEAD_COMMENTS' || el.name=='DEAL_COMMENTS '){ comment = el.value(); }
        });
        var sub = 'Заявка с формы Bitrix24 ' + location.hostname;
        var ct_data = {fio: fio, phoneNumber: phone, email: email, comment: comment, subject: sub, requestUrl: location.href, sessionId: window.call_value};
        console.log(ct_data);
        if (!!phone || !!email) _ctreq_b24(ct_data);
    }
});
</script>
<script>
window.addEventListener('onBitrixLiveChat', function(event){
    var widget = event.detail.widget;
    widget.subscribe({
        type: BX.LiveChatWidget.SubscriptionType.every, callback: function(ev){
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userMessage){
                if (!window.ct_snd_flag && !!window.ct){ ct('goal','b24chat'); window.ct_snd_flag = 1; }
            }
            if (ev.type == BX.LiveChatWidget.SubscriptionType.userForm){
                var sid = 44967;
                var fio = ''; var phone = ''; var email = '';
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.name){ fio = ev.data.fields.name; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.phone){ phone = ev.data.fields.phone; }
                if (!!ev.data && !!ev.data.fields && !!ev.data.fields.email){ email = ev.data.fields.email; }
                var ct_data = {}; ct_data.phoneNumber = phone; ct_data.fio = fio; ct_data.email = email; ct_data.requestUrl = location.href; ct_data.sessionId = window.call_value;
                ct_data.subject = 'Чат Bitrix24 посетитель оставил контакты';
                var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
                var post_data = Object.keys(ct_data).reduce(function(a,k){if(!!ct_data[k]){a.push(k+'='+encodeURIComponent(ct_data[k]));}return a},[]).join('&');
                var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+sid+'/requests/orders/register/';
                request.open("POST", url, true); request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); request.send(post_data);
            }
        }
    });
});
</script>
<!-- calltouch -->
</body>
</html>