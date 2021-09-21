$(function(){
	$("a[href='#'").click(function(e){
		e.preventDefault();
	})
	var swiper = new Swiper(".mySwiper", {
        cssMode: true,
		autoplay: {
			delay: 6000,
			disableOnInteraction: false,
		},
		loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
		  clickable: true,
        },
        mousewheel: true,
        keyboard: true,
      });
	$(window).scroll(function(){
		var wt = $(window).width();
		var sc = $(window).scrollTop();
		var hd = $('header').height();
		if(wt>415 && sc>hd){
			$('header .top').stop().css('display','none');
		}else{
			$('header .top').stop().css('display','flex');
		};
	});
	$('.topBtn').click(function(){
		$('html,body').stop().animate({
			scrollTop:0
		},500)
	});
	// var wt = $('body').width();
	// if(wt<=414){
	// 	var click = 0;
	// 	$('h2').on('click',function(){
	// 		if(click==0){
	// 			$(this).siblings('.slideUp').stop().slideDown();
	// 			$(this).siblings('.arrow').css('-webkit-transform','rotate('+180+'deg)');
	// 			click=1;
	// 		}else {
	// 			$(this).siblings('.slideUp').stop().slideUp();
	// 			$(this).siblings('.arrow').css('-webkit-transform','rotate('+0+'deg)');
	// 			click=0;
	// 		}
	// 	});
	// }
	// $('.hamBtn').click(function(){
	// 	$('.gnb').animate({left:0},500);
	// });
	// $('.close').click(function(){
	// 	$('.gnb').animate({left:-100+"%"});
	// })
});
function filter(){
	var value, name, item, i;

	value = document.getElementById("value").value.toUpperCase();
	item = document.getElementsByClassName('item');

	for(i=0;i<item.length; i++){
		name = item[i].getElementsByClassName("name");
		if(name[0].innerHTML.toUpperCase().indexOf(value) > -1){
			item[i].style.display = "flex";
		}else{
			item[i].style.display = "none";
		}
	}
}