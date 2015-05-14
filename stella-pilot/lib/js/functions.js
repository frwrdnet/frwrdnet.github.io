/* JS Functions */

$(document).ready(function(){
	
	// menu item actions
	$('.menu-item').click(function(){
		$('.menu-item.selected').removeClass('.selected')
		$(this).addClass('.selected')
	})
		
	// make conversations clickable
	$('.clickable')
		.hover(
			function(){ $(this).css('background-color','rgba(255,255,255,0.5)') },
			function(){ $(this).css('background-color','rgba(255,255,255,0.0)') }
		)
		.css('cursor','pointer')
		.click(function(){
			console.log(this.id+' [clicked]')
			return false
		})
	
	// close alerts
	$('.close')
		.click(function(){
			$(this).parent().fadeOut();
		})

	$('#sparkicon').click(function(){
		//$('#spark').addClass('.on')
		$('#spark').css('right','10px')
		$('#sparkbox').fadeIn()
		$(this).fadeOut()
	});
	
	$('#sparkbox .close').click(function(){
		$('#sparkicon').fadeIn()
		$('#sparkbox').fadeOut()
		$('#spark').css('right','-1000px')
		//$('#spark').removeClass('.on')
		//$('#sparkbox').removeClass('.on')
	})
	
	// toggle user account menu
	$('#account-toggle').click(function(){
		$('#account-menu').toggleClass('open');
	});
	
	// edit wiki
	$('#wiki-edit-btn').click(function(){
		$('#wiki-edit').show();
		$('#wiki-edit-btn').hide();
		$('#wiki-html').hide();
	});
	// save wiki
	$('#wiki-save').click(function(){
		$('#wiki-edit').hide();
		$('#wiki-edit-btn').show();
		$('#wiki-html').show();
	});
	
});




