$(function(){
	var lmenu = $("div.lmenu");
	var rmenu = $("div.rmenu");
	var imgl = $("div.r");
	var top_menu = $("div.top_menu");
	var slider = $("div.rmenu div.slider");
	var li_glass = $("div.thumbs li.glass");
	var li_boy = $("div.thumbs li.boy");
	var li_grass = $("div.thumbs li.grass");
	var li_umberella = $("div.thumbs li.umberella");
	var li_alone = $("div.thumbs li.alone");
	var bgimg = $(".backimg > div");

	var open_panel ;
	imgl.click(function(){
		
		if(!open_panel){
			lmenu.animate({'width':"25px",});
			rmenu.animate({'width':'915px',});
			imgl.animate({'margin':'270px 0px 0px 10px',});
			top_menu.css({'margin-left':'83px',});
			bgimg.animate({'width':'915px','left':'0px','right':'-30px'});
			open_panel=true;
		}else{
			lmenu.animate({'width':"180px"});
			rmenu.animate({'width':'740px',});
			imgl.animate({'margin':'270px 0px 0px 185px',});
			top_menu.css({'margin-left':'0px',});
			bgimg.animate({'width':'740px','left':'210px','right':'0px'});
			open_panel=false;

		}
	});


	li_glass.click(function(){
		slider.css({
			'background':'url(images/2.jpg)',
		});
	});
	li_boy.click(function(){
		slider.css({
			'background':'url(images/3.jpg)',
		});
	});
	li_grass.click(function(){
		slider.css({
			'background':'url(images/4.jpg)',
		});
	});
	li_umberella.click(function(){
		slider.css({
			'background':'url(images/1.jpg)',
		});
	});
	li_alone.click(function(){
		slider.css({
			'background':'url(images/5.jpg)',
		});
	});
});

//////////////////////////////////// SlideShow
$(function(){
	(slideshow=function (){
		$('.img4').fadeOut(3000,null,function(){
			$('.img3').fadeOut(3000,null,function(){
				$('.img2').fadeOut(3000,null,function(){
					$('.img1').fadeIn(3000,null,function(){
						$('.img2').fadeIn(3000,null,function(){
							$('.img3').fadeIn(3000,null,function(){
								$('.img4').fadeIn(3000,null,function(){
									slideshow();
								})
							})
						})
					})
				})  
			})
		})
	} )();
});

