$(function(){
   'use strict'

	// Message
	$("#eval-js1").on("click", function(e){
		$.toast('Here you can put the text of the toast');
	});
	$("#eval-js7").on("click", function(e){$.toast({text: 'This will become the toast message'});});
	
	$("#eval-js8").on("click", function(e){
		$.toast({
			heading: 'How to contribute?!',
			text: [
			'Fork the repository', 
			'Improve/extend the functionality', 
			'Create a pull request'
			],
			icon: 'info'
		});
	});		
	
	$("#eval-js10").on("click", function(e){
		$.toast({
			heading: 'Headings',
			text: 'You can use the `heading` property to specify the heading of the toast message.',
		});
	});
	
	$("#eval-js13").on("click", function(e){
		$.toast({
			text: 'Set the `showHideTransition` property to fade|plain|slide to achieve different transitions',
			heading: 'Slide transition',
			showHideTransition: 'slide'
		});
	});
	$("#eval-js15").on("click", function(e){
		$.toast({
			text: 'Set the `showHideTransition` property to fade|plain|slide to achieve different transitions',
			heading: 'Fade transition',
			showHideTransition: 'fade'
		});
	});										
	$("#eval-js16").on("click", function(e){
		$.toast({
			text: 'Set the `showHideTransition` property to fade|plain|slide to achieve different transitions',
			heading: 'Plain transition',
			showHideTransition: 'plain'
		});
	});
	$("#eval-js17").on("click", function(e){
		$.toast({
			heading: 'Closeable Toast',
			text: 'Set the `allowToastClose` property to true|false to make the toast closeable or not',
			allowToastClose: true
		});
	});
	$("#eval-js18").on("click", function(e){
		$.toast({
			heading: 'Non closeable Toast',
			text: 'Set the `allowToastClose` property to true|false to make the toast closeable or not',
			allowToastClose: false
		});
	});
	$("#eval-js19").on("click", function(e){
		$.toast({
			heading: 'Stack',
			text: 'If set to a number, it will show that number of toasts at max at a time',
			stack: 4
		});
	});
	$("#eval-js20").on("click", function(e){
		$.toast({
			heading: 'No stacking',
			text: 'If set to false, there will be only one toast at once.',
			stack: false
		});
	});
	
	$("#eval-js21").on("click", function(e){
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Specify the custom position object or use one of the predefined ones',
			position: 'bottom-left',
			stack: false
		});
	});
	$("#eval-js22").on("click", function(e){
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Specify the custom position object or use one of the predefined ones',
			position: 'bottom-right',
			stack: false
		});
	});
	
	$("#eval-js23").on("click", function(e){
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Use the predefined ones, or specify a custom object',
			position: 'bottom-center',
			stack: false
		});
	});
	$("#eval-js24").on("click", function(e) {
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Use the predefined ones, or specify a custom object',
			position: 'top-left',
			stack: false
		});
	});
	$("#eval-js25").on("click", function(e) {
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: 'top-right',
			stack: false
		});
	});
	$("#eval-js26").on("click", function(e) {
	$.toast().reset('all');
	$.toast({
	heading: 'Positioning',
		text: 'Use the predefined ones, or specify a custom position object.',
		position: 'top-center',
		stack: false
	});
	});
	$("#eval-js27").on("click", function(e) {
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: 'mid-center',
			stack: false
		});
	});
	$("#eval-js28").on("click", function(e) {
		$.toast().reset('all');
		$.toast({
			heading: 'Positioning',
			text: 'Use the predefined ones, or specify a custom position object.',
			position: {
				right: 120,
				top: 120
			},
			stack: false
		});
	});
	$("#eval-js29").on("click", function(e) {
		$.toast().reset('all');;
	});
	$("#eval-js30").on("click", function(e) {
		$.toast({
			heading: 'Warning',
			text: 'Now you can seemlessly generate warnings using the icon property in the options',
			icon: 'warning'
		});
	});
	$("#eval-js31").on("click", function(e) {
		$.toast({
			heading: 'Success',
			text: 'Here is some kind of success message with a success icon that you can notice at the right side.',
			icon: 'success'
		});
	});
	$("#eval-js32").on("click", function(e) {
		$.toast({
			heading: 'Error',
			text: 'An unexpected error occured while trying to show you the toast! ..Just kidding, it is just a message, toast is left in front of you.',
			icon: 'error'
		});
	});
	$("#eval-js33").on("click", function(e) {
		$.toast({
			heading: 'Information',
			text: 'Now you can add icons to the toasts as well.',
			icon: 'info'
		});
	});
	$("#eval-js34").on("click", function(e) {
		$.toast({
			heading: 'Colors',
			text: 'Colors are specified using `bgColor` and `textColor` properties.',
			bgColor: '#FF1356',
			textColor: 'white'
		});
	});
	$("#eval-js35").on("click", function(e) {
		$.toast({
			text: 'Processing! Please wait..',
			textAlign: 'center'
		});
	});
	$("#eval-js36").on("click", function(e) {
		$.toast({
			heading: 'Custom Classes',
			text: 'Custom classes are specified using the `class` option.',
			class: 'larger-font'
		});
	});
	$("#eval-js37").on("click", function(e) {
		$.toast({
			text: 'Triggers the events',
			beforeShow: function() {
				alert('The toast is about to appear');
			},
			afterShown: function() {
				alert('Toast has appeared.');
			},
			beforeHide: function() {
				alert('Toast is about to hide.');
			},
			afterHidden: function() {
				alert('Toast has been hidden.');
			}
		});
	})
});