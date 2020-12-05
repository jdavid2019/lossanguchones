$(document).ready(function(){
$('.go-top-button').click(function(){
 $('body,html').animate({
  scrollTop:'0px',
  behavior: 'smooth'
 });
});


$(window).scroll(function(){
	console.log(document.documentElement.scrollTop);
	if(document.documentElement.scrollTop >120){
	document.querySelector('.go-top-container').classList.add('show');	
	}else{
	document.querySelector('.go-top-container').classList.remove('show');	
	}
});

});

