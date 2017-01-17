jQuery(document).ready(function() {
	function sidebarHeight() {
		$(".sidebar").css({'height':($(".entry-content").height()+ 60 +'px')});
		$(".sidebar").css({'height':($(".default-content.inner").height() +'px')});
	};

	function backgroundImgHeight() {
		$(".top-img").css({'height':($(".copy-holder").height() +'px')});
	};
	
	$(".menu-icon").click(function() {
		$("#menu-mobile-nav").toggleClass("opened");
	});
	
	$(window).on("resize", sidebarHeight);
	sidebarHeight();
	$(window).on("resize", backgroundImgHeight);
	backgroundImgHeight();
});