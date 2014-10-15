jQuery(document).ready(function($){

	$('#npf-tab-container').easytabs({
		defaultTab: "span:first-child",
    tabs: "> h2 > span ",
    tabActiveClass: "nav-tab-active"
	});

	$('input.select-date').datepicker();
	$('input.select-time').timepicker();
	$('input.select-datetime').datetimepicker();

});
