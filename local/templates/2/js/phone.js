var params = window		
				.location
				.search
				.replace('?','')
				.split('&')
				.reduce(
					function(p,e){
						var a = e.split('=');
						p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
						return p;
					},
					{}
				);
				
if(params['utm_source'] === undefined){
	
	var strparams = "";
	
}else{
	
	var strparams = "utm_source=" + params['utm_source'];
	
}

$.ajax({
	type: "GET",
	url: "/ajax/ajax_phone.php",
	cache: false,
	data: strparams,
	success: function(html){
		$("#phone img").remove();
		$("#phone").append(html);
	}
});

