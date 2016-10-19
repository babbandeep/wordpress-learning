<?php
  $sidebar_count = 0;
  for ($i=1; $i <= 4; $i++) {
        if( is_active_sidebar('footer_area_'.$i )){
          $sidebars_count++;
        }
      }
      $sidebar_class = '';
          switch( $sidebars_count ){
          case 2: $sidebar_class = 'one-second'; break;
          case 3: $sidebar_class = 'one-third'; break;
          case 4: $sidebar_class = 'one-fourth'; break;
          default: $sidebar_class = 'one';
        }
        for( $i = 1; $i <= 4; $i++ ){
            if( is_active_sidebar('footer_area_'.$i) ) {
              echo '<div class="column '. $sidebar_class .'">';
                dynamic_sidebar('footer_area_'.$i);
              echo '</div>';
    }
  }
?>

</div>
</body>
