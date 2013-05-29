$(document).ready(function() {


	// jQuery UI widgets

 //    $('.sortable').sortable({
	// 	revert: true
	// });
	
	// Possible solution
	// http://stackoverflow.com/questions/705250/is-there-a-jquery-plugin-which-combines-draggable-and-selectable

	$('.sortable li').draggable({
		//helper: "clone",
		//stack: ".draggable li",
		scroll: true,
		snap: true
	});

	$('.draggable').selectable();

	$('.droppable').droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass('');
      }
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

	$('#floatLeft').click(function(){
		$('.sortable li').css('float', 'left');
	});

	$('#posAbs').click(function(){
		$('.sortable li').css('position', 'absolute');
	});

	$('#posFix').click(function(){
		$('.sortable li').css('position', 'fixed');
	});

	$('#posRel').click(function(){
		$('.sortable li').css('position', 'relative');
	});

	$('#posStat').click(function(){
		$('.sortable li').css('position', 'static');
	});

	$('#floatRight').click(function(){
		$('.sortable li').css('float', 'right');
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


