$(document).ready(function(){
	
	$(window).scroll(() => {
		
		let scrollDistance = $(window).scrollTop();
		
		
		$("body").each((i, el) => {
			
			if($(el).offset().top - $(".menu-active").outerHeight() <= scrollDistance){
				$("nav a").each((i, el) => {
					if($(el).hasClass("active")){
						$(el).removeClass("active");
					}
				});
			}
			
			   
		});

		
		$(".Section-Animation").each((i, el) => {
			
			if($(el).offset().top - $(".menu-active").outerHeight() <= scrollDistance){
				$("nav a").each((i, el) => {
					if($(el).hasClass("active")){
						$(el).removeClass("active");
					}
				});
				
				$('nav li:eq(' + i + ')').find('a').addClass('active');
			}
			
			   
		});
		
		
		
		
		
		
		
		$(".Section-Anim").each((i, el) => {
			
			if($(el).offset().top - $(".menu").outerHeight() <= scrollDistance){
					if($(el).hasClass("open-active"))
				});
			}
			
			   
		});
		
		
		
	});
	
	
});