/**
 * @author shrijan
 */
$(document).ready(function() {
    
	Cufon.replace('#featured-test>p,h1,h2');
	$('#menu li a').hover(function(){$(this).addClass('curvy-all')},function(){$(this).removeClass('curvy-all')});
	$('#slider').nivoSlider({
		effect:"sliceUpDown",
        slices:8,
        boxCols:8,
        boxRows:4,
        animSpeed:1000,
        pauseTime:3000,
        startSlide:0,
        directionNav:false,
        directionNavHide:true,
        controlNav:true,
        controlNavThumbs:false,
        controlNavThumbsFromRel:true,
        keyboardNav:true,
        pauseOnHover:true,
        manualAdvance:false
	});
	
		Cufon("ul#menu li.active a",{color:'#fff'});
		Cufon("ul#menu li:not('li.active') a",{
			hover:{color:'#fff'}
	});
	 $('.slideshow').cycle({
		fx: 'fade',
		fit: 1,
		width:'960px',
		height:'103px'
		 // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
	$('#menu li.back-anim').addClass('anim curvy-all');
	
	var int_width = $('#menu li').eq(1).outerWidth() ;
	var poslt = $('#menu li.back-anim').css('width',int_width).css('left');
	$('#menu li').hover(function(){
		var tot_width =10;
		var index = ($(this).attr('rel'));
		if(index!=0)
		{
			for(i=1;i<=index;i++)
			{
				tot_width = parseInt($('#menu li').eq(i).width()) + tot_width + 4;
			}
		}
		$('#menu li.back-anim').animate({'left':tot_width},{queue:false,complete:function(){$(this).siblings().click(function(){poslt = tot_width;int_width = $(this).innerWidth()});}}).css('width',$(this).innerWidth());
		},function(){
			$('#menu li.back-anim').animate({'left':poslt},{queue:false}).css('width',int_width)
		});
});

//,duration:2000,complete:function(){$(this).click(function(){alert('click');poslt=tot_width;int_width=$(this).innerWidth()});}