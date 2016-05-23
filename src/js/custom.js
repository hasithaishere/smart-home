$(function(){
	"use strict";

	/**
	 * gallery
	 */
	$('.gallery').each(function(){

		$(this).magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
		  	type: 'image',
			gallery:{
			    enabled:true
			}
		});

	})



	/**
	 * Maps
	 */
	$( '.js-where-we-are' ).each( function () {
		new SimpleMap( $( this ), {
			markers: mapMarkers,
			zoom:    $( this ).data( 'zoom' ),
			type:    $( this ).data( 'type' ),
			styles:  [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#1f425d"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#979797"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]}],
		}).renderMap();
	});

	$( '.route' ).each( function () {
		new SimpleMap( $( this ), {
			zoom:    $( this ).data( 'zoom' ),
			type:    $( this ).data( 'type' ),
			styles:  [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#1f425d"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#979797"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]}],
		}).renderMap();
	});


	/**
	 * Number Counter Widget JS code
	 */
	// Get all number counter widgets
	var $counterWidgets = $( '.widget-number-counters' );

	if ( $counterWidgets.length ) {
		$counterWidgets.each( function () {
			new NumberCounter( $( this ) );
		} );
	}



	/**
	 * Menu height on large screens, break point
	 */
	(function () {
		$( 'head' ).append( '<style type="text/css" id="main-nav-css"></style>' );

		var $menu = $( '.js-main-nav' ),
			$css = $( '#main-nav-css' );

		if ( ! $menu || ! $css ) {
			return;
		}

		var isMultilineMenu = function () {
			return $menu.height() > 45;
		};

		var updateMenuStyle = function () {
			if ( Modernizr.mq( '(min-width: 1200px)' ) && isMultilineMenu() ) {
				var lines = Math.round( $menu.height() / 60 );
				$css.text( '@media (min-width: 1200px) { .header__container::before { bottom: ' + (lines * 60 - 30) + 'px; } .header__container::after { bottom: ' + (lines * 60 ) + 'px; } }' );
			}
			else if ( Modernizr.mq( '(min-width: 992px)' ) && isMultilineMenu() ) {
				$css.text( '@media (min-width: 992px) { .header__container::before, .header__container::after { bottom: ' + $menu.height() + 'px; } }' );
			}
			else {
				$css.text( '' );
			}
		};

		updateMenuStyle();
		$( window ).on( 'resize', _.debounce( updateMenuStyle, 250 ) );
	})();


	/**
	 * Quick quote form submission
	 */

	var theForm

	$('form.aSubmit').validator().on('submit', function (e) {

		theForm = $(this);

		if (e.isDefaultPrevented()) {

			alert('Please fill out the Quick Quote form');

		} else {

			$('#loader').fadeIn();

			$.ajax({
				url: $(this).attr('action'),
				method: 'post',
				data: $(this).serialize()
			}).done(function(ret){

				$('#loader').fadeOut();

				if( ret == "Message sent!" ) {

					theForm.find('.response.success').fadeIn();

				} else {

					theForm.find('.response.error').fadeIn();

				}

				setTimeout(function(){ theForm.find('.response').fadeOut() }, 7000)

			})

		}

		return false;

	})


	/**
	 * Request quote scroll
	 */
    $('#button_requestQuote').on('click', function(){

        $('html, body').animate({
	        scrollTop: $("#quickQuoteForm_wrapper").offset().top
	    }, 2000);

    });

		/*
		* Datatable rendering
		*/
		$('.datatable').DataTable();
		/*$('.datatable').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );*/

		/*
		* Zoomify
		*/

		$('.zoomify-img').zoomify();


		/*
		* VehicleInfo.php - Start
		*/
		$('.delete-img').click(function(event){
			event.preventDefault();

	    if (confirm("Do you want to delete this image!") == true) {

				var imgIndex = $(this).attr("img-index");
				var imgType = $(this).attr("img-type");

				$.ajax({
					url: "http://learners.hp/app/helper/delete-image.php",
					method: 'post',
					data: {"img-url": $(this).attr("img-path")}
				}).done(function(response){

					if(response.status == 1) {
						$( "#" + imgIndex ).remove();
						if($('a[img-Type="'+ imgType +'"]').length == 0) {
							if(imgType === 'showcase-img') {
								$('.showcase-img-block').replaceWith("<p>No vehicle's images uploaded.</p>");
							} else if (imgType === 'doc-img') {
								$('.doc-img-block').replaceWith("<p>No documents uploaded.</p>");
							}
						}
					} else {
						alert('Failed to delete this image.');
					}

				});
	    }
		});
		
		/*
		* create the back to top button
		*/
		$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

		var amountScrolled = 300;

		$(window).scroll(function() {
			if ( $(window).scrollTop() > amountScrolled ) {
				$('a.back-to-top').fadeIn('slow');
			} else {
				$('a.back-to-top').fadeOut('slow');
			}
		});

		$('a.back-to-top, a.simple-back-to-top').click(function() {
			$('html, body').animate({
				scrollTop: 0
			}, 700);
			return false;
		});

	$('.all-user-info .ctrl-btn').on('click', function(){

		var confirmResult = confirm("Do you want to perform this action !");
	    if (confirmResult != true) {
	        return false;
	    }

	});

	$('.single-device-unit .sub-device-switch').change(function(){
		var changeState = 0;
		if ($(this).is(':checked')) {
			changeState = 1;
		};

		var subDeviceId = $(this).attr('sub-device-id');

		var stateString = "";
		for (var i = 1; i <= 4; i++) { 
		    if(subDeviceId == i) {
		    	stateString += changeState;
		    } else {
		    	stateString += 2;
		    }
		    stateString += ',';
		}

		stateString = stateString.substring(0, stateString.length - 1);

		$.ajax({
        	url: "http://nodered-hasitha.rhcloud.com:8000/api/devicecontrol",
        	data: { did: $(this).attr('main-device-id'), state: stateString },
        	dataType : 'jsonp',   
        	beforeSend: function(xhr){
        		xhr.setRequestHeader("Authorization", "Basic Z3Vlc3Q6MXFhejJ3c3hA");
        	},
        	success: function(data) { console.log('Success!', data); }
      	});

	});

});
