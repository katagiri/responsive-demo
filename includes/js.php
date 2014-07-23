	<!-- HTML5 patch, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $domain ?>/js/html5ie.js"></script>
    <![endif]-->
    
    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo $domain ?>/js/bootstrap.min.js"></script>
    <!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> THIS WAS FOR THE ACCORDIAN EFFECT-->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> THIS IS FOR RESPONSIVESLIDES, MAYBE DON'T NEED? -->
	<script src="<?php echo $domain ?>/js/responsiveslides.min.js"></script>
    
	<script>
	function toggleIt(div) {
		$('.list').slideUp();
		$('.list').removeClass("ui-state-active");
		$('#'+div).slideToggle();
		$(this).addClass("ui-state-active");
	}

    $(function() {
    	// $( "#sidebar" ).accordion(); needs the jquery-ui.js
		
		$( "li" ).click(function() {
			$( "li" ).removeClass("highlight");
			$(this).addClass("highlight");
		});
    });
	
	
	$(document).ready(function(){
			window.onload = sizeIt;
			window.onresize = sizeIt;
			
			function sizeIt() {
				//$('.product').css('margin', (screen.height-300).toString()+'px');
				if (window.innerWidth > 700) {
					
					displayArea = window.innerWidth-240;
					remainder = displayArea%130;
					numberOfProducts = Math.floor(displayArea/130);
					num = numberOfProducts - 1; // the math just wasn't working out so i created a fix
					newMargin = Math.floor(remainder/num);
					
					
					$('.product').css('margin-left', (newMargin).toString()+'px');
					
					searchWidth = ((num)*(132+newMargin)); 
					$('#searchbox-area').css('width', (searchWidth).toString()+'px');
					$('#products').css('width', (searchWidth).toString()+'px');
					
					
					document.getElementById("value1").value = searchWidth;
					document.getElementById("value2").value = remainder;
					document.getElementById("value3").value = newMargin;
					document.getElementById("value4").value = num;
					document.getElementById("value5").value = displayArea;
					document.getElementById("value6").value = window.innerWidth;
				
				}
				else {
					$('#searchbox-area').css('width', (100).toString()+'%');
					$('#products').css('width', (100).toString()+'%');
					$('.product').css('margin-left', (0).toString()+'px');
				}
				// alert(newMargin);
				// alert(displayArea);
			}
			
	});
	</script>
    
    <script>
	  $(function() {
		$(".rslides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
	  });
	</script>
    
    
    <!-- Google Analytics-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-19226654-12', 'nb-surrogacy.com');
	  ga('send', 'pageview');
	</script>