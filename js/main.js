$(document).ready(function() {


	// jQuery UI widgets

    $('.sortable').sortable({
		revert: true
	});

    $('ul, li').disableSelection();


    // Show the previous and next divs when hovered over
	/*$('.sortable li').hover(function(){
		$(this).prev().addClass('before');
		$(this).next().addClass('after');
	}, function() {
		$('.sortable li').each(function(){
			$(this).removeClass('before after');
		});
	}
	);*/

	var element = $('.container');
	setInterval(function(){
		// Doesn't work!
		if( element.offsetHeight < element.scrollHeight || element.offsetWidth < element.scrollWidth){
			// element has overflow
			console.log('overflow');
		}
		else { 
		  // element doesn't have overflow
		  console.log('all good!');
		}
	}, 1000);


	
	// Button actions

	var obj = { 'whole-horiz':'width:100%', 
				'whole-vert':'height:100%', 
				'half-horiz':'width:50%',
				'half-vert':'height:50%',
				'fourth-horiz':'width:25%',
				'fourth-vert':'height:25%',
				'eighth-horiz':'width:12.5%',
				'eighth-vert':'height:12.5%',
			};

 	$('#showSizes').click(function(){
		$.each(obj, function(i, val) {
			$("." + i).append(val+'<br />');
    	});
 	});

	$('#reset').click(function(){
		location.reload();
	});

	$('#done').click(function(){
		$('.puzzle').fadeOut(200);
		$('.kudos').fadeIn(200);
	});

});



// function removeBorders(el) {
// 	$(el).removeClass('before after');
// }

// function showBorders(el) {
// 	$(el).prev().addClass('before');
// 	$(el).next().addClass('after');
// }

// function showHideBordersOnClick(el) {
// 	removeBorders(el);
// 	$(this).click(function(i){
// 		showBorders(i);
// 		$(this).css('background', 'green');
// 		console.log('clicked');
// 	});
// }


// // Print markup into a window
// function printMarkup(el) {
// 	var html = $(el).html();
// 	$('.source')
// 		.text(html)
// 		.snippet('html',{style:"typical"});
// }


