
/* ----------------------------------

Name: shinchan.js
Author: Vaibhav Sharma


------------------------------------- */


jQuery(document).ready(function($) {
	
	"use strict";

	
	
/*======================

	01. Loading Screen 

========================*/



	setTimeout(function(){
		
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 5);
	
	

	


/*======================

	02. Sliders 

========================*/




/* Image Slider 
-------------------------*/


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
	
	

	
	

/*======================

	04. Countdown Timer 

========================*/





	var endDate = "March 26, 2016 3:26:16";
		
		
		

		$(".countdown.simple").countdown({ date: endDate });

			$(".countdown.styled").countdown({
					
				date: endDate,
				render: function(data) { 
					
					$(this.el).html("<div>"+ this.leadingZeros(data.days, 3) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hours</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>mins</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>secs</span></div>");
				  
				}
				  
			});

			$(".countdown.callback").countdown({
					
				date: +(new Date) + 10000,
				render: function(data) {
				
					$(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
					
				},
				
				onEnd: function() {
	 
					$(this.el).addClass("ended");
				}
				  
			}).on("click", function() {
					
				$(this).removeClass("ended").data("countdown").update(+(new Date) + 10000).start();
				  
			});

			
			
    // End time for diff purposes
    var endTimeDiff = new Date().getTime() + 15000;
		
    // This is server"s time
    var timeThere = new Date();
		
    // This is client"s time (delayed)
    var timeHere = new Date(timeThere.getTime() - 5434);
		
    // Get the difference between client time and server time
    var diff_ms = timeHere.getTime() - timeThere.getTime();
		
    // Get the rounded difference in seconds
    var diff_s = diff_ms / 1000 | 0;
        
    var notice = [];
		notice.push("Server time: " + timeThere.toDateString() + " " + timeThere.toTimeString());
		notice.push("Your time: " + timeHere.toDateString() + " " + timeHere.toTimeString());
		notice.push("Time difference: " + diff_s + " seconds (" + diff_ms + " milliseconds to be precise). Your time is a bit behind.");
        
		
			$(".offset-notice").html(notice.join("<br />"));
				
				
        
			$(".offset-server .countdown").countdown({
					
				date: endTimeDiff,
				offset: diff_s * 1000,
				onEnd: function() {
					
					$(this.el).addClass("ended");
				}
					
			});
				
        
			$(".offset-client .countdown").countdown({
					
				date: endTimeDiff,
				onEnd: function() {
						
					$(this.el).addClass("ended");
						
				}
			});
		
	  
	  
	 
     

	
});