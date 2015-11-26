$.mainContent = $('.main');
$.panelIconOpened = 'icon-arrow-up';
$.panelIconClosed = 'icon-arrow-down';

$(document).ready(function($){

	$('ul.nav-sidebar').find('a').each(function(){
		if ($(this).parent().hasClass('active')) {
			$(this).parents('ul').add(this).each(function(){
				$(this).show().parent().addClass('opened');
			});
		}
	});
	
	$('.nav-sidebar').on('click', 'a', function(e){
				
		if (!$(this).parent().hasClass('hover')) {
			if ($(this).parent().find('ul').size() != 0) {

                e.preventDefault();

				if ($(this).parent().hasClass('opened')) {
					$(this).parent().removeClass('opened');
				} else {
					$(this).parent().addClass('opened');
				}

				$(this).parent().find('ul').first().slideToggle('slow',function(){
					dropSidebarShadow();
				});

				$(this).parent().parent().find('ul').each(function(){
					if (!$(this).parent().hasClass('opened')) {
						$(this).slideUp();
					}


				});

				if (!$(this).parent().parent().parent().hasClass('opened')) {
					$('.nav a').not(this).parent().find('ul').slideUp('slow', function(){
						$(this).parent().removeClass('opened').find('.opened').each(function(){
							$(this).removeClass('opened');
						});
					});
				}

                return false;

			} else {

				if (!$(this).parent().parent().parent().hasClass('opened')) {					
					$('.nav a').not(this).parent().find('ul').slideUp('slow', function(){
						$(this).parent().removeClass('opened').find('.opened').each(function(){
							$(this).removeClass('opened')
						});
					});
				}				
			}
		} 
	});
		
	$('.nav-sidebar > li').hover(
		function(){
			if($('body').hasClass('sidebar-minified')) {
				$(this).addClass('opened hover');
			}
		}, function() {
		    if($('body').hasClass('sidebar-minified')) {
				$(this).removeClass('opened hover');
			}
		}
	);
	
	/* ---------- Main Menu Open/Close, Min/Full ---------- */		
	$('#main-menu-toggle').click(function(){
		
		if($('body').hasClass('sidebar-hidden')){
									
			$('body').removeClass('sidebar-hidden');
			
		} else {
						
			$('body').addClass('sidebar-hidden');
			
		}				
		
	});
	
	$('#sidebar-menu').click(function(){
		
		$(".sidebar").trigger("open");				
		
	});
		
	$('#sidebar-minify').click(function(){
		
		if($('body').hasClass('sidebar-minified')){
						
			$('body').removeClass('sidebar-minified');
			$('#sidebar-minify i').removeClass('fa-list').addClass('fa-ellipsis-v');
						
		} else {
						
			$('body').addClass('sidebar-minified');
			$('#sidebar-minify i').removeClass('fa-ellipsis-v').addClass('fa-list');
		}
		
	});
	
	widthFunctions();
	dropSidebarShadow();
	init();
		
});

$(document).on('click', '.panel-actions a', function(e){
	e.preventDefault();
	
	if ($(this).hasClass('btn-close')) {
		$(this).parent().parent().parent().fadeOut();
	} else if ($(this).hasClass('btn-minimize')) {
		var $target = $(this).parent().parent().next('.panel-body');
		if($target.is(':visible')) $('i',$(this)).removeClass($.panelIconOpened).addClass($.panelIconClosed);
		else 					   $('i',$(this)).removeClass($.panelIconClosed).addClass($.panelIconOpened);
		$target.slideToggle('slow', function() {
		    widthFunctions();
		});
	} else if ($(this).hasClass('btn-setting')) {
		$('#myModal').modal('show');
	}
	
});

function init() {
	
	/* ---------- Minimized panel ---------- */
	$('.panel-minimized').find('.panel-actions i.' + $.panelIconOpened).removeClass($.panelIconOpened).addClass($.panelIconClosed);
	
	/* ---------- Tooltip ---------- */
	$('[rel="tooltip"],[data-rel="tooltip"]').tooltip({"placement":"bottom",delay: { show: 400, hide: 200 }});

	/* ---------- Popover ---------- */
	$('[rel="popover"],[data-rel="popover"],[data-toggle="popover"]').popover();
	
}

$('.sidebar-menu').scroll(function() {
   dropSidebarShadow();
});

function dropSidebarShadow() {
	
	if ($('.nav-sidebar').length) {
		var topPosition = $('.nav-sidebar').offset().top - $('.sidebar').offset().top;	
	}
		
	if (topPosition < 60) {
		$('.sidebar-header').addClass('drop-shadow');
	} else {
		$('.sidebar-header').removeClass('drop-shadow');
	}
	
	var bottomPosition = $(window).height() - $('.nav-sidebar').outerHeight() - topPosition;
	
	if (bottomPosition < 130) {
		$('.sidebar-footer').addClass('drop-shadow');
	} else {
		$('.sidebar-footer').removeClass('drop-shadow');
	}
}

$(window).bind("resize", widthFunctions);

function widthFunctions(e) {
	
	var headerHeight = $('.navbar').outerHeight();
	var footerHeight = $('footer').outerHeight();
	
    var winHeight = $(window).height();
    var winWidth = $(window).width();

	if(!$('body').hasClass('static-sidebar')) {
		var sidebarHeaderHeight = $('.sidebar-header').outerHeight();
		var sidebarFooterHeight = $('.sidebar-footer').outerHeight();
		
		if (winWidth < 992) {
			var otherHeight = sidebarHeaderHeight + sidebarFooterHeight;
		} else {
			var otherHeight = headerHeight + sidebarHeaderHeight + sidebarFooterHeight;
		}
		$('.sidebar-menu').css('height', winHeight - otherHeight);		
	}
	
	if (winWidth < 992) {	
		if ( $('body').hasClass('sidebar-hidden') ) {
			$('body').removeClass('sidebar-hidden').addClass('sidebar-hidden-disabled');
		}
		
		if ( $('body').hasClass('sidebar-minified') ) {
			$('body').removeClass('sidebar-minified').addClass('sidebar-minified-disabled');
		}
		$('#sidebar-minify i').removeClass('fa-list').addClass('fa-ellipsis-v');
	} else {
		if ( $('body').hasClass('sidebar-hidden-disabled') ) {
			$('body').removeClass('sidebar-hidden-disabled').addClass('sidebar-hidden');
		}
		
		if ( $('body').hasClass('sidebar-minified-disabled') ) {
			$('body').removeClass('sidebar-minified-disabled').addClass('sidebar-minified');
		}
	}
	
	if (winWidth > 768) {
		$('.main').css('min-height',winHeight-footerHeight);
	}
}