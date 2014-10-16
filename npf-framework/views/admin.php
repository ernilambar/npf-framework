<div class="wrap npf-wrap">

  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>


  <div id="npf-tab-container" class="tab-container">

    <h2 class="nav-tab-wrapper">

     <?php foreach ($this->base_args['tabs'] as $tab_key => $tab_value): ?>

      <span><a href="#npf-<?php echo $tab_value['id']; ?>" class="nav-tab"><?php echo $tab_value['title']; ?></a></span>

     <?php endforeach ?>

    </h2>

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

  </div> <!-- #npf-tab-container -->

</div> <!-- .wrap -->
