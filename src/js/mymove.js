$("body").on("click",'[href*="#"]',function(o){$("html,body").stop().animate({scrollTop:$(this.hash).offset().top-43},1e3),o.preventDefault()});