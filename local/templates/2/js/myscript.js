//$ = jQuery.noConflict();
$(document).ready(function(){

    $( "#tabs" ).tabs();
	$(".linkrep").each(function(){
	
		if($("a", this).length>0)
		
			$(this).replaceWith('<a href="'+$(this).attr("title")+'" rel="v:url" property="v:title" class="' + $(this).attr("class") + '"  id="' + $(this).attr("id") + '" >'+ $("a", this).html()+'</a>');
		 
		else{
		
			$(this).replaceWith('<a href="'+$(this).attr("title")+'" rel="v:url" property="v:title" class="' + $(this).attr("class") + '"   id="' + $(this).attr("id") + '">'+$(this).html()+'</a>');
			
		}
	});
	
	$(".catalog_bottom").hide();

//версия для печати
 
	$('a.print').click(function(){
       var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
           disp_setting+="scrollbars=yes,width=1024, height=800, left=100, top=25";
       var docprint=window.open("","",disp_setting);
       docprint.document.open();     
       docprint.document.write('<html><head><title>'+document.title+'</title>');
       docprint.document.write('<link rel="stylesheet" href="/bitrix/templates/2/css/contact.css" type="text/css">');
       docprint.document.write('<link rel="stylesheet" href="/bitrix/templates/2/css/lay.css" type="text/css">');
       docprint.document.write('<link rel="stylesheet" href="/bitrix/templates/2/css/style.css" type="text/css"></head><body>');
       docprint.document.write($("#table").html());
       docprint.document.write('</body></html>');
       docprint.document.close(); 
       docprint.focus(); 
       docprint.print();
   });

//модальные окна
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
	
	$("a.comments-img").fancybox({		
		'showCloseButton' : true,
		'showNavArrows' : true,
		'overlayColor' : '#000'		
	});
	
	$("article a.fimg").fancybox({		
		'showCloseButton' : true,
		'showNavArrows' : true,
		'overlayColor' : '#000'		
	});
	
	$(".dropdown-toggle-js").dropdown();
	
	$(".more").click(function(){
	
		$(".hidecontent").show('slow');
		$(this).hide();
	
	});
	
	//$('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
	
	// меню разрешение 0-1200
	if (screen.width <= '1200' && screen.width >= '0') {
	
		$('.level-item').click(function(){
		
			if($(this).children("ul").length){
				if($("aside").children("[data-id="+$(this).data("id")+"]").length){
				
					$("aside").find(".level2").not("[data-id="+$(this).data("id")+"]").hide();
					$("[data-id="+$(this).data("id")+"]").not(".level3").show();
					
				}else{
				
					if($("aside").is(".level2 [data-id="+$(this).data("id")+"]")){
						alert('работает 2');
						$("aside").find(".level2").not("[data-id="+$(this).data("id")+"]").hide();
						$("aside").show(".level2 [data-id="+$(this).data("id")+"]");
					
					}else{
						
						if($("aside").children(".level2").length){
						
							$("aside").children("ul").not(".tt-menu").hide();
						
						}
						var elements = $(this).children("ul.level2");
						$(".tt-menu").after(elements);
						elements.css('display', 'block');					
					
					}		
				
				}
			}else{
			
				$(this).click();
				e.preventDefault();
			
			}
			
			return false;
		
		});
		
		$('.xs-menu').click(function(){
	
			if($('.xs-menu-list').is(":visible")){
			
				$('.xs-menu-list').hide();
			}
			else{
			
				$('.xs-menu-list').show();
			
			}
	
		});
		
		$('.xs-menu-item').click(function(){
		
			if($("> ul", this).is(":visible")){
			
				$("> ul", this).hide();
			}
			else{
			
				$("> ul", this).show();
			
			}
		
		});
	
	}else if(screen.width > '1200'){
	
		// Вертикальное меню
		$(".tt-menu li").hover(
			function() {
				$(this).find("ul:first").fadeIn(200);
				$(this).addClass("active");
			}, function() {
				$(this).find("ul:first").fadeOut(0);
				$(this).removeClass("active");
		});
		
		$(".tt-menu li:has(ul)").addClass("level-item");
	
	}

	//калькулятор
	
	$(document).on('change', '#fieldset_1 select', function(){
	
		$level = $(this).find('option:selected').data("level");
		if(typeof $('[data-idrod=' + $(this).find('option:selected').data("id") + ']').data("idrod") == 'undefined' && $(this).find('option:selected').data("type") != 'element'){
			$(this).find('option:selected').parent().nextAll('select').remove();
			$.ajax({
				type: "GET",
				url: "/ajax/ajax_calc.php",
				cache: false,
				data: "id_section="+$(this).find('option:selected').data("id")+"&level="+$level,
				success: function(html){
					calc_form(html, $level)
				}
			});
		} else if($(this).find('option:selected').data("type") == 'element'){
		
			$('#fieldset_1').hide("slow");
			$('#fieldset_2').show("slow");
			setTimeout( function(){$('#fieldset_2').hide("slow"); $('#fieldset_3').show("slow");}, 3000);
		
		}
		
	});
	
	function calc_form(html, $level){	

			$level_section = ++$level;
			$('[data-levelsection=' + $level_section + ']').each(function(){
			
				$(this).remove();
			
			});
			

		$("#fieldset_1").append(html);
	
	}
	
	$(".hadress").hide();
	
	$('#main_feedback_header, #calc_feedback').fancybox({
		closeExisting: true,
		 buttons : [ 
			'close'
		  ],		 
		 lang: "ru",
		 i18n: {
			ru: {
			  CLOSE: "Закрыть",
			},
		  }
	});
	$('[data-fancybox="images"]').fancybox({
		closeExisting: true,
		 buttons : [ 
			'slideShow',
			'share',
			'zoom',
			'fullScreen',
			'download',
			'close'
		  ],		 
		 lang: "ru",
		 i18n: {
			ru: {
			  CLOSE: "Закрыть",
			},
		  }
	});
	
	// слайдер в новостях
    $('.pgwSlider').pgwSlider({
		
		autoSlide: true,
		displayControls: false,
		intervalDuration: 2000,
		adaptiveHeight: false,
		maxHeight: 600,
	
	});

	
});