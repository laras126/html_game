$(document).ready(function() {


	// jQuery UI widgets

    $('.sortable').sortable({
		revert: true
	});

	// Possible solution
	// http://stackoverflow.com/questions/705250/is-there-a-jquery-plugin-which-combines-draggable-and-selectable

	$('.pos-puz li').draggable({
		//helper: "clone",
		stack: ".pos-puz li",
		scroll: true,
		//snap: true,
		//containment: 'parent'
	}).resizable();

	$('.draggable').selectable();

	$('.droppable').droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass('');
      }
    });

    $('ul, li').disableSelection();

	

	// Button actions

	var piece = '.pos-puz li';


	// Change the float value 

	$('#floatLeft').click(function(){
		$('.floats span').removeClass('selected');
		$(piece).css('float', 'left');
		$(this).addClass('selected');
	});

	$('#floatRight').click(function(){
		$('.floats span').removeClass('selected');
		$(piece).css('float', 'right');
		$(this).addClass('selected');
	});

	$('#clear').click(function(){
		$('.floats span').removeClass('selected');
		$(piece).css('float', 'none');
		$(this).addClass('selected');
	});


	var marginActive = false;
	var paddingActive = false;


	// Add margin/padding

	$('#addMargin').click(function(){
		$('.box-model span').removeClass('selected');
		marginActive = true;
		checkState();
		console.log(marginActive);
	});
	
	$('#removeMargin').click(function(){
		marginActive = false;
		return marginActive;
		checkState();
		console.log(marginActive + 'asdasd');
	});

	$('#addPadding').click(function(){
		$('.box-model span').removeClass('selected');
		$(piece).css('padding', '10px');

		$(this).addClass('selected');
		$(this).text('remove padding').attr('id','paddingActive');
	});

	$('#contentBox').click(function(){
		$('.box-sizing span').removeClass('selected');
		$(piece).css('box-sizing', 'content-box');
		$(this).addClass('selected');
	});

	$('#borderBox').click(function(){
		$('.box-sizing span').removeClass('selected');
		$(piece).css('box-sizing', 'border-box');
		$(this).addClass('selected');
	});



	function checkState() {
		if(marginActive==true) {
			$('#addMargin').addClass('selected').attr('id', 'removeMargin');
			$(piece).css('margin', '10px');
		} 

		if (marginActive==false) {
			$('#removeMargin').removeClass('selected').attr('id', 'addMargin');
			$(piece).css('margin', '0');
		}
	}



	// Positioning

	$('#posAbs').click(function(){
		resetPos('absolute');
		$(this).addClass('selected');
	});

	$('#posFix').click(function(){
		resetPos('fixed');
		$(this).addClass('selected');
	});

	$('#posRel').click(function(){
		resetPos('relative');
		$(this).addClass('selected');
	});

	$('#posStat').click(function(){
		resetPos('static');
		$(this).addClass('selected');
	});



	// Display

	$('#disInline').click(function(){
		resetDis('inline');
		$(this).addClass('selected');
	});

	$('#disBlock').click(function(){
		resetDis('block');
		$(this).addClass('selected');
	});

	$('#disInlBlock').click(function(){
		resetDis('inline-block');
		$(this).addClass('selected');
	});



	// Utilities
	$('#reset').click(function(){
		resetCoords();
	});

	$('#reload').click(function(){
		location.reload();
	});

	$('#done').click(function(){
		$('.puzzle').fadeOut(200);
		$('.kudos').fadeIn(200);
	});







	function resetPos(pos) {
		$('.positions span').removeClass('selected');
		$(piece).css({
			position: pos
		});
	}

	function resetDis(dis) {
		$('.display span').removeClass('selected');
		$(piece).css({
			display: dis
		});
	}

	function resetCoords() {
		$(piece).css({
			top: '0',
			right: '0',
			bottom: '0',
			left: '0'
		});
	}

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


