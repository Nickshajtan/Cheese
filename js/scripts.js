/*---Initialization custom scrollbar---*/
$(function(){
    //Check window size           
    if(window.screen.width > 1200){
        $('textarea').liimeBar();
    }
    //Check browser
    if ((user.browser.family === 'Firefox') || (user.browser.family === 'Edge') || (user.browser.family === 'IE')){ 
        $(function(){
            $('html').liimeBar();
        });
            }
            });
            

/*---Modal window on main page---*/
$(document).ready(function() {
    $("#modal-form").modal('show');
  });
/*---Modal in footer---*/
$(document).ready(function(){
  $('a#contact-modal').click(function() {
    $('#contact-modal-form').modal('show');
  }); 
});

/*--- Button "Up" ---*/

window.onload = function Click_button_up() { 

	var scrollUp = document.getElementById('up'); // to find element

	scrollUp.onmouseover = function() { // add transparency
		scrollUp.style.opacity=0.7;
		scrollUp.style.filter  = 'alpha(opacity=30)';
	};

	scrollUp.onmouseout = function() { // remove transparency
		scrollUp.style.opacity = 0.8;
		scrollUp.style.filter  = 'alpha(opacity=50)';
	};

	scrollUp.onclick = function() { //click processing
		window.scrollTo(0,0);
	};

// show/hide button

	window.onscroll = function() { //with the scroll to show and hide the block
		if ( window.pageYOffset > 0 ) {
			scrollUp.style.display = 'block';
		} else {
			scrollUp.style.display = 'none';
		}
	};
};


$(".coll button").click(function() {
  if (!$(this).hasClass("dropdown-toggle")) {
    $(".coll").collapse('hide');
  }
});
$(".icon-bar").click(function() {
  if (!$(this).hasClass("dropdown-toggle")) {
    $(".icon-bar").collapse('hide');
  }
});
$(".sr-only").click(function() {
  if (!$(this).hasClass("dropdown-toggle")) {
    $(".sr-only").collapse('hide');
  }
});