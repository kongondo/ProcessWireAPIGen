/***
 *	Simple theme switcher for ProcessWire ApiGen project http://kongondo.github.io/ProcessWireAPIGen/
 *	@author: Francis Otieno (kongondo) 4 February 2016
 *
 *
 *
 */
$(document).ready(function() {
	var b = $('body');
	/* saved state */
	// get the saved theme
	var savedTheme = $.cookie('theme');
	// if saved is 'dark' theme, and class='dark' to body in case it doesn't have it
	if(savedTheme == 'dark' && !b.hasClass('dark')) b.addClass('dark');

	/* switching themes */
	$(document).on("click", "a.themes", function(e) {
		e.preventDefault();
		var switcher = $(this).attr('id');
		// if we are switching to the dark theme, apply class='dark' to body in case it doesn't have it
		if(switcher =='dark' && savedTheme != 'dark' && !b.hasClass('dark')) {
			b.addClass('dark');
			// set a 1 year cookie
			$.cookie('theme', 'dark', {expires: 365});// @note: cookie plugin defined in resources/combined.js
		}
		// otherwise, we want the light theme (default) so remove class='dark' + no need for cookie (delete it)
		else {
			b.removeClass('dark');
			$(b +"[class='']").removeAttr('class');// remove empty class attribute
			$.cookie('theme', null);

		}
	});
});