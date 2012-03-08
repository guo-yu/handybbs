$(document).ready(function() {
	// submenu hover
	$(".sub-menu").parent().addClass("sub-parent");
	$(".sub-parent").hover(function () {
		$(this).addClass("sub-parent-cur");
		$(this).find(".sub-menu").show();
	}, function() {
		$(this).removeClass("sub-parent-cur");
		$(this).find(".sub-menu").hide();
	});
	// resize post img width
	$('.entry img').each(function(){
    var width=690; //输入指定宽度,图片高度自动适应
    var image = $(this);
    if(image.width()>width){
        image.height(width/image.width()*image.height());
        image.width(width);
		}
	});
});