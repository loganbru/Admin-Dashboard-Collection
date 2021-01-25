/*!
 * Bootstrap 4 multi dropdown navbar ( https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar/ )
 * Copyright 2017.
 * Licensed under the GPL license
*/

$(document).ready(function(){
	$('.dropdown-menu a.dropdown-toggle').on('click', function (e){
		var $el = $(this);
		var $parent = $(this).offsetParent(".dropdown-menu");
		if (!$(this).next().hasClass('show')){
			$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
		}
		var $subMenu = $(this).next(".dropdown-menu");
		$subMenu.toggleClass('show');
		
		$(this).parent("li").toggleClass('show');

		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e){
			$('.dropdown-menu .show').removeClass("show");
		});
		
		if (!$parent.parent().hasClass('navbar-nav')){
			$el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
		}
		return false;
	});
});





// Todays Date
$(function() {
	var interval = setInterval(function() {
		var momentNow = moment();
		$('#today-date').html(momentNow.format('DD') + ' ' + ' '
		+ momentNow.format('- dddd').substring(0, 12));
	}, 100);
});


$(function() {
	var interval = setInterval(function() {
		var momentNow = moment();
		$('#todays-date').html(momentNow.format('DD MMMM YYYY'));
	}, 100);
});




// Loading
$(function() {
	$("#loading-wrapper").fadeOut(3000);
});



// Textarea characters left
$(function() {
	$('#characterLeft').text('140 characters left');
	$('#message').keydown(function () {
		var max = 140;
		var len = $(this).val().length;
		if (len >= max) {
			$('#characterLeft').text('You have reached the limit');
			$('#characterLeft').addClass('red');
			$('#btnSubmit').addClass('disabled');            
		} 
		else {
			var ch = max - len;
			$('#characterLeft').text(ch + ' characters left');
			$('#btnSubmit').removeClass('disabled');
			$('#characterLeft').removeClass('red');            
		}
	});
});


// Todo list
$('.todo-body').on('click', 'li.todo-list', function() {
	$(this).toggleClass('done');
});



// Tasks
(function($) {
	var checkList = $('.task-checkbox'),
	toDoCheck = checkList.children('input[type="checkbox"]');
	toDoCheck.each(function(index, element) {
		var $this = $(element),
		taskItem = $this.closest('.task-block');
		$this.on('click', function(e) {
			taskItem.toggleClass('task-checked');
		});
	});
})(jQuery);


// Tasks Important Active
$('.task-actions').on('click', '.important', function() {
	$(this).toggleClass('active');
});


// Tasks Important Active
$('.task-actions').on('click', '.star', function() {
	$(this).toggleClass('active');
});


// Quick Links Sidebar
(function($) {
	// Collaboration Yammer Sidebar
	$('.quick-links-btn').click(function(){
		// Slide Box Toggle
		$('.quick-links-box').toggleClass("quick-links-box-show");
		$('.screen-overlay').toggleClass("show");
		$('body').css('overflow', 'hidden');
	});
	$('.quick-links-box-close').click(function(){
		// Slide Box Toggle
		$('.quick-links-box').toggleClass("quick-links-box-show");
		$('.screen-overlay').toggleClass("show");
		$('body').css('overflow', 'auto');
	});
})(jQuery);


// Quick Settings Sidebar
(function($) {
	// Collaboration Yammer Sidebar
	$('.quick-settings-btn').click(function(){
		// Slide Box Toggle
		$('.quick-settings-box').toggleClass("quick-settings-box-show");
		$('.screen-overlay').toggleClass("show");
		$('body').css('overflow', 'hidden');
	});
	$('.quick-settings-box-close').click(function(){
		// Slide Box Toggle
		$('.quick-settings-box').toggleClass("quick-settings-box-show");
		$('.screen-overlay').toggleClass("show");
		$('body').css('overflow', 'auto');
	});
})(jQuery);





// Countdown
$(document).ready(function(){
  countdown();
  setInterval(countdown, 1000);
  function countdown () {
  var now = moment(), // get the current moment
    // May 28, 2013 @ 12:00AM
    then = moment([2020, 2, 7]),
    // get the difference from now to then in ms
    ms = then.diff(now, 'milliseconds', true);
    // If you need years, uncomment this line and make sure you add it to the concatonated phrase
    /*
    years = Math.floor(moment.duration(ms).asYears());
    then = then.subtract('years', years);
    */
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    // get the duration as months and round down
    // months = Math.floor(moment.duration(ms).asMonths());
 
    // // subtract months from the original moment (not sure why I had to offset by 1 day)
    // then = then.subtract('months', months).subtract('days', 1);
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    days = Math.floor(moment.duration(ms).asDays());
 
    then = then.subtract(days, 'days');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    hours = Math.floor(moment.duration(ms).asHours());
 
    then = then.subtract(hours, 'hours');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    minutes = Math.floor(moment.duration(ms).asMinutes());
 
    then = then.subtract(minutes, 'minutes');
    // update the duration in ms
    ms = then.diff(now, 'milliseconds', true);
    seconds = Math.floor(moment.duration(ms).asSeconds());
    
    // concatonate the variables
    diff = '<div class="num">' + days + ' <span class="text"> Days Left</span></div>';
    $('#daysLeft').html(diff);
  }
 
});






// Bootstrap JS ***********

// Tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

$(function () {
	$('[data-toggle="popover"]').popover()
})
