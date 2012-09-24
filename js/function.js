/*
@author : Guo Yu
@description: Tomato Web Demo Frame / UI function scripts
*/

function setBgImg (u) {
	$.backstretch(u, {speed: 150});
}
function currentNav (s) {
	$(s).click(function() {
		$(this).parent().siblings().removeClass("menu-cur")
		$(this).parent().addClass("menu-cur");
	});
}
function subNav (s) {
	$(s).find("ul").addClass("sub-menu");
	$(s).hover(function () {
		$(this).addClass("sub-parent-cur");
		$(this).find(".sub-menu").show();
	}, function() {
		$(this).removeClass("sub-parent-cur");
		$(this).find(".sub-menu").hide();
	});
}
function resizeImg(s,w) {
	$(s).each(function(){
	    var width=w; // write new width you want to resize
	    var image = $(this);
	    if(image.width()>width){
	        image.height(width/image.width()*image.height());
	        image.width(width);
		}
	});
}
function imgHover(s) {
	$(s).wrapInner('<span class="hover"></span>').each(function () {
	$('span.hover').css('opacity', 0).hover(function () {
		$(this).stop().fadeTo(650, 1);
	}, function () {
		$(this).stop().fadeTo(650, 0);
	});
}