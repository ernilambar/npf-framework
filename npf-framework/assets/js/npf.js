var image_field;

jQuery(document).ready(function($){

	// Tabs
	$('#npf-tab-container').easytabs({
		defaultTab: "span:first-child",
    tabs: "> h2 > span ",
    tabActiveClass: "nav-tab-active",
    updateHash: false,
	});

	// Date picker
	$('input.select-date').datepicker();
	$('input.select-time').timepicker();
	$('input.select-datetime').datetimepicker();

	// Select2
  $("select").select2({
  	width: 'resolve'
  });


  // On Off
  $('input.npf-on-off').onoff();

  // Color picker
  $('input.select-color').each(function(){
      $(this).wpColorPicker();
  });

  // Upload
  $(document).on('click', 'input.select-img', function(evt){
    image_field = $(this).siblings('.img');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
  });
  window.send_to_editor = function(html) {
    imgurl = $('img', html).attr('src');
    image_field.val(imgurl);
    tb_remove();
  }
  $(document).on('click', 'input.btn-remove-upload', function(evt){
    evt.preventDefault();
    var $this = $(this);
    $this.siblings('.img-preview').hide();
    $this.siblings('.img').val('');
    $this.hide();
  });



});
