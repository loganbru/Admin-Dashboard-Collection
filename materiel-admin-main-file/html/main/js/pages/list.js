//[Javascript]



$(function () {
    "use strict";   

		// Slim scrolling
  
	  $('.inner-user-div').slimScroll({
		height: '342px'
	  });
		
	  // jQuery UI sortable for the todo list
	  $('.todo-list').sortable({
		placeholder         : 'sort-highlight',
		handle              : '.handle',
		forcePlaceholderSize: true,
		zIndex              : 999999
	  });	

	 /* The todo list plugin */
	  $('.todo-list').todoList({
		onCheck  : function () {
		  window.console.log($(this), 'The element has been checked');
		},
		onUnCheck: function () {
		  window.console.log($(this), 'The element has been unchecked');
		}
	  });
	
  }); // End of use strict