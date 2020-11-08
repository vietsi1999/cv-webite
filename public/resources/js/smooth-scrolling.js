$(".links-scroll").click(function(){
	// lấy giá trị location từ this (thẻ chứa class links-scroll vừa click)
	var location = $(this).attr('location')
    $('html,body').animate({
      scrollTop: $(location).offset().top}, 
    'slow');
});