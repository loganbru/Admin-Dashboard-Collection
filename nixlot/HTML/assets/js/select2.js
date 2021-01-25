// Additional code for adding placeholder in search box of select2
(function($) {
	var Defaults = $.fn.select2.amd.require('select2/defaults');
	$.extend(Defaults.defaults, {
		searchInputPlaceholder: ''
	});
	var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');
	var _renderSearchDropdown = SearchDropdown.prototype.render;
	SearchDropdown.prototype.render = function(decorated) {
		// invoke parent method
		var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));
		this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));
		return $rendered;
	};
})(window.jQuery);
$(function() {
	'use strict'
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: 'Choose one',
			searchInputPlaceholder: 'Search'
		});
		$('.select2-no-search').select2({
			minimumResultsForSearch: Infinity,
			placeholder: 'Choose one'
		});
	});
});