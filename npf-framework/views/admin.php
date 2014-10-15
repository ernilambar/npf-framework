<div class="wrap npf-wrap">

  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>


  <div id="npf-tab-container" class="tab-container">

    <h2 class="nav-tab-wrapper">

     <?php foreach ($this->base_args['tabs'] as $tab_key => $tab_value): ?>

      <span><a href="#npf-<?php echo $tab_value['id']; ?>" class="nav-tab"><?php echo $tab_value['title']; ?></a></span>

     <?php endforeach ?>

    </h2>




  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">



      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <div class="postbox1">


            <div class="inside1">


            	<form action="options.php" method="post">
							<?php

							settings_fields($this->base_args['option_slug'].'-group');

							foreach ($this->base_args['tabs'] as $tab_key => $tab) {


                echo '<div id="npf-'.$tab['id'].'" class="single-tab-content">';
                do_settings_sections($tab['id'].'-main');
                echo '</div>';

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
                    <p><a href="#" target="_blank">Visit our plugin support page</a></p>
                </div> <!-- .inside -->

            </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables -->
      </div>

    </div> <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div> <!-- #poststuff -->


  </div> <!-- #npf-tab-container -->

</div> <!-- .wrap -->
