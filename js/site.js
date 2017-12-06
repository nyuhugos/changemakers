jQuery(document).ready(function ($) {
	

/*
---------------------------------------------------------
INITIALIZE VARIABLES
---------------------------------------------------------
*/




/*
---------------------------------------------------------
FUNCTIONS
---------------------------------------------------------
*/


	function removeHoverCSSRuleForTouch() {
		if ('createTouch' in document) {
			try {
				var ignore = /:hover/;
				for (var i = 0; i < document.styleSheets.length; i++) {
					var sheet = document.styleSheets[i];
					if (!sheet.cssRules) {
						continue;
					}
					for (var j = sheet.cssRules.length - 1; j >= 0; j--) {
						var rule = sheet.cssRules[j];
						if (rule.type === CSSRule.STYLE_RULE && ignore.test(rule.selectorText)) {
							sheet.deleteRule(j);
						}
					}
				}
			}
			catch(e) {}
		}
	}


	function bgImageSlider(slideElement){
		$(slideElement).each(function(){
			var images = $(this).data("img").split(';');
			fade = $(this).data("fade") ? $(this).data("fade") : 0 ;
			duration = $(this).data("duration") ? $(this).data("duration") : 5000 ;

			$(this).backstretch(images, {fade: fade, duration: duration, preload: 2,});

		if( $(this).data("bullets") != false ){

				$(slideElement+' #pager').append('<ul class="pagination"></ul>');
				images.forEach(function(){
					$('.pagination').append('<li><i class="fa fa-circle"></i></li>');
				});
			}

		});

		$('.pagination li').on('click', function(){
			$(this).parents(slideElement).backstretch("show", $(this).index());
		});

		$(slideElement).on("backstretch.after", function (e, instance, index) {
				$(e.currentTarget).find('.pagination>li.active').removeClass("active");
				$(e.currentTarget).find('.pagination>li:eq('+index+')').addClass("active");
		});
	}


	function classYears(elementYears){
		if ( $( elementYears ).length ) {
			var minOffset = 0, maxOffset = 97; // Change to whatever you want
			var thisYear = (new Date()).getFullYear();
			var select = $(elementYears);
			for (var i = minOffset; i <= maxOffset; i++) {
				var year = thisYear - i;
				$('<option>', {value: year, text: year}).appendTo(select);
			}
		}
	}



	function loadMore(){
		$(".past-winner-block").slice(0, 8).show();
		$("#load-more").on('click', function (event) {
			event.preventDefault();
			$(".past-winner-block:hidden").slice(0, 4).slideDown();
			if ($(".past-winner-block:hidden").length == 0) {
				$("#load-more").fadeOut('slow');
			}
			$('html,body').animate({
				scrollTop: $(this).offset().top
			}, 1500);
		});
	}


$('input').on('focus', function(){
	$(this).removeClass('error');
	$(this).next().hide();
});
$('textarea').on('focus', function(){
	$(this).removeClass('error');
	$(this).next().hide();
});


$('#nomination-form').submit( function(){
	//Varibles not validated
	$yourSchool = document.nform.your_school;
	$yourClassYears = document.nform.your_classyears;

	$nomineeTitle = document.nform.nominee_title;
	$nomineeIndustry = document.nform.nominee_industry;
	$nomineeEmail = document.nform.nominee_email;
	$nomineeSchool = document.nform.nominee_school;
	$nomineeClassYears = document.nform.nominee_classyears;

	//Varibles to validate	
	$filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
	$yourEmail = document.nform.your_email;
	$yourName = document.nform.your_name;
	$nomineeFirstName = document.nform.nominee_firstname;
	$nomineeLastName = document.nform.nominee_lastname;
	$nomineeInfluenced = document.nform.nominee_influenced;
	$nomineeDriven = document.nform.nominee_driven;
	$nomineeImpact = document.nform.nominee_impact;
	$nomineeRecognized = document.nform.nominee_recognized;

	if ($nomineeRecognized.value == "") {
		$($nomineeRecognized).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($nomineeRecognized).offset().top -150}, 800);
		$($nomineeRecognized).addClass('error');
	} else {
		$($nomineeRecognized).next().hide();
		$($nomineeRecognized).removeClass('error');
	}

	if ($nomineeImpact.value == "") {
		$($nomineeImpact).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($nomineeImpact).offset().top -150}, 800);
		$($nomineeImpact).addClass('error');
	} else {
		$($nomineeImpact).next().hide();
		$($nomineeImpact).removeClass('error');
	}

	if ($nomineeDriven.value == "") {
		$($nomineeDriven).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($nomineeDriven).offset().top -150}, 800);
		$($nomineeDriven).addClass('error');
	} else {
		$($nomineeDriven).next().hide();
		$($nomineeDriven).removeClass('error');
	}

	if ($nomineeInfluenced.value == "") {
		$($nomineeInfluenced).next().slideDown("slow");
		$('html, body').animate({scrollTop: $(nominee_influenced).offset().top -150}, 800);
		$($nomineeInfluenced).addClass('error');
	} else {
		$($nomineeInfluenced).next().hide();
		$($nomineeInfluenced).removeClass('error');
	}

	if ($nomineeFirstName.value == "") {
		$($nomineeFirstName).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($nomineeFirstName).offset().top -150}, 800);
		$($nomineeFirstName).addClass('error');
	} else {
		$($nomineeFirstName).next().hide();
		$($nomineeFirstName).removeClass('error');
	}

	if ($nomineeLastName.value == "") {
		$($nomineeLastName).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($nomineeLastName).offset().top -150}, 800);
		$($nomineeLastName).addClass('error');
	} else {
		$($nomineeLastName).next().hide();
		$($nomineeLastName).removeClass('error');
	}

	if (!$filter.test($yourEmail.value)) {
		$($yourEmail).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($yourEmail).offset().top -150}, 800);
		$($yourEmail).addClass('error');
	} else {
		$($yourEmail).next().hide();
		$($yourEmail).removeClass('error');
	}

	if ($yourName.value == "") {
		$($yourName).next().slideDown("slow");
		$('html, body').animate({scrollTop: $($yourName).offset().top -150}, 800);
		$($yourName).addClass('error');
	} else {
		$($yourName).next().hide();
		$($yourName).removeClass('error');
	}

	if ( ($yourName.value == "") || (!$filter.test($yourEmail.value)) || ($nomineeFirstName.value == "") || ($nomineeLastName.value == "")  ||
		 ($nomineeInfluenced.value == "") || ($nomineeDriven.value == "") || ($nomineeImpact.value == "") || ($nomineeRecognized.value == "")){
		return false;
	} 
	
	if ( ($yourName.value != "") && ($filter.test($yourEmail.value)) && ($nomineeFirstName.value != "") && ($nomineeLastName.value != "")  &&
		($nomineeInfluenced.value != "") && ($nomineeDriven.value != "") && ($nomineeImpact.value != "") && ($nomineeRecognized.value != "")) {
		//hide the form
		/*setTimeout('$("#nomination-form").slideUp("slow")', 1000);*/
	
		//show the loading bar
		$('#loader').css({display:'block'});
	
		//send the ajax request
		$.post('mail.php',{
				yourname:$($yourName).val(), 
				youremail:$($yourEmail).val(),
				yourschool:$($yourSchool).val(),
				yourclassyears:$($yourClassYears).val(),
				nomineefname:$($nomineeFirstName).val(),
				nomineelname:$($nomineeLastName).val(),
				nomineetitle:$($nomineeTitle).val(),
				nomineeindustry:$($nomineeIndustry).val(),
				nomineeemail:$($nomineeEmail).val(),
				nomineeschool:$($nomineeSchool).val(),
				nomineeclassyears:$($nomineeClassYears).val(),
				nomineeinfluenced:$($nomineeInfluenced).val(),
				nomineedriven:$($nomineeDriven).val(),
				nomineeimpact:$($nomineeImpact).val(),
				nomineerecognized:$($nomineeRecognized).val()
			},
		//return the data
		function(data){
			//hide the graphic
			// $("#mail_response").slideDown("slow");
			// $('.bar').css({display:'none'});
			// $('.loader').append(data);
			// $("#nomination-form").slideUp(1000);
			//$('#loader').css({display:'none'});
			//$('#mail-response').slideDown("slow");
		});
		
		//waits 2000, then closes the form and fades out
		/*setTimeout('$("#mail_response").slideUp("slow")', 3000);*/

		setTimeout( function(){

			$('#loader').css({display:'none'});
			$("#nomination-form").slideUp(1000);
			$('#mail-response').slideDown("slow");
			$('html, body').animate({scrollTop: $('#nominations').offset().top -150}, 800);
			// $('#mail-response').slideDown("slow");

		}  , 3000 );
		
		//stay on the page
		return false;
	} 
  });
	

/*
---------------------------------------------------------
DOM FUNCTIONS
---------------------------------------------------------
*/

	
	
	$('#header ul').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: ':not(.external)',
		easing: 'swing',
		begin: function() {
			$('body').append('<div id="device-dummy" style="height: 1px;"></div>');
			$('#menu-btn').removeClass('on');
			$('#navigation-wrapper').removeClass('on');
			$('#menu-btn').removeClass('active');
			$('.blackout').removeClass('on');
			$('#header').removeClass('nav-open');
			$('body').removeClass('nav-open');
		},
		end: function() {
			$('#device-dummy').remove();
		},
		scrollChange: function($currentListItem) {
		}
	});


	//Mobile Navigation open and close actions
	$('#menu-btn').click(function() {
		$('#menu-btn').removeClass('on');
		$('#navigation-wrapper').removeClass('on');
		$('#menu-btn').removeClass('active');
		$('.blackout').removeClass('on');
		$('#header').removeClass('nav-open');
		$('body').removeClass('nav-open');

		if($('#navigation-wrapper').css('right') == '-380px') {
			$('#navigation-wrapper').addClass('on');
			$('#menu-btn').addClass('active');
			$('.blackout').addClass('on');
			$('#header').addClass('nav-open');
			$('body').addClass('nav-open');
		} 
	});


	
	$('.filters li').click(function() {
        $('.filters li').removeClass('active');
        $(this).addClass('active');
    });



    $("a.take-me").click(function(event) {
		var section = $(this).attr('href');
		event.preventDefault();
		$('html, body').animate({scrollTop: $(section).offset().top -0}, 800);
	});


    //Fancy Box for Popups
	$('.more-content').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		padding	: 		0,
		helpers : {
			overlay : {
				css : {
					'background' : 'rgba(0, 0, 0, 0.5)'
				},
			}
		}
	});


/*
---------------------------------------------------------
WINDOW EVENTS
---------------------------------------------------------
*/

	$(window).load(function() {

		if (window.innerWidth > 775) {


		}

		if (window.innerWidth < 775) {

			$("#bio-headshot").after($("#bio-header"));

		}

	});// End of Custom Window Load Events




	$(window).scroll (function () {

		//Change header navigation size on scroll
		var sT = $(this).scrollTop();
		if (sT >= 95) {
			$('#header').addClass('scroll')
		} else {
			$('#header').removeClass('scroll')
		}

	});// End of Window Scroll Events



	$(window).resize(function(){


		// This runs for mobile to handle mobile navigation resizing
		var w = $(window).width();
		if (typeof checkw == 'undefined') checkw = w;
		if (w!=checkw) {

			if (window.innerWidth > 1200) {
				//Mobile navigation if resize from mobile to desktop
				$('#menu-btn').removeClass('on');
				$('#navigation-wrapper').removeClass('on');
				$('#menu-btn').removeClass('active');
				$('.blackout').removeClass('on');
				$('#header').removeClass('nav-open');
				$('body').removeClass('nav-open');
			}

			
			if (window.innerWidth > 775) {

				$("#bio-header").after($("#bio-headshot"));

			}

			if (window.innerWidth < 775) {

				$("#bio-headshot").after($("#bio-header"));

			}

			checkw = w;

		}// end if

		
	});//End of Window resize functions



/*
---------------------------------------------------------
TIME CALLS
---------------------------------------------------------
*/


	setTimeout( function(){

		removeHoverCSSRuleForTouch();
		bgImageSlider('#overview');

		if(!ie9){
			$('.filter-container').filterizr();
		}
		if(ie9){
			$('#nomination-form input, #nomination-form textarea').placeholder();
		}

		loadMore();
		classYears('select#your_classyears');
		classYears('select#nominee_classyears');
		//$("#nomination-form").validate();

	}  , 500 );


	setTimeout( function(){

		$('.se-pre-con').fadeOut('slow');

	}  , 1000 );



	
});