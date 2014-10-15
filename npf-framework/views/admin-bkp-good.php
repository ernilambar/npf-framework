<div class="wrap">


  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <h2 class="nav-tab-wrapper">
      <a href="#" class="nav-tab">Tab #1</a>
      <a href="#" class="nav-tab nav-tab-active">Tab #2</a>
      <a href="#" class="nav-tab">Tab #3</a>
    </h2>

  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">



      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <div class="postbox">


            <div class="inside">


            	<form action="options.php" method="post">
							<?php

							settings_fields($this->base_args['option_slug'].'-group');

							foreach ($this->base_args['tabs'] as $tab_key => $tab) {

								do_settings_sections($tab['id'].'-main');

							}
							submit_button(__('Save Changes'));

							 ?>
						 </form>



            </div> <!-- .inside -->

          </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables .ui-sortable -->

      </div> <!-- post-body-content -->

      <div id="postbox-container-1" class="postbox-container">
        <div class="meta-box-sortables">

            <div class="postbox">

                <h3><span>Help &amp; Support</span></h3>
                <div class="inside">
                    <h4>Questions, bugs, or great ideas?</h4>
                    <p><a href="http://wordpress.org/support/plugin/source-affix" target="_blank">Visit our plugin support page</a></p>
                </div> <!-- .inside -->

            </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables -->
      </div>

    </div> <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div> <!-- #poststuff -->

</div> <!-- .wrap -->
