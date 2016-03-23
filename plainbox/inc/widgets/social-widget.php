<?php

/**
 * Social  Widget
 * FlatBox Theme
 */
class flatbox_social_widget extends WP_Widget
{
	 function flatbox_social_widget(){

        $widget_ops = array('classname' => 'flatbox-social','description' => __( "FlatBox Social Widget" ,'flatbox') );
		    $this->WP_Widget('flatbox-social', __('FlatBox Social Widget','flatbox'), $widget_ops);
    }

    function widget($args , $instance) {
    	extract($args);
        $title = ($instance['title']) ? $instance['title'] : __('Follow us' , 'flatbox');

      echo $before_widget;
      echo $before_title;
      echo $title;
      echo $after_title;

		/**
		 * Widget Content
		 */
    ?>

    <!-- social icons -->
    <div class="social-icons sticky-sidebar-social">


    <?php flatbox_social(); ?>


    </div><!-- end social icons -->


		<?php

		echo $after_widget;
    }


    function form($instance) {
      if(!isset($instance['title'])) $instance['title'] = __('Follow us' , 'flatbox');
    ?>

      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title ','flatbox') ?></label>

      <input type="text" value="<?php echo esc_attr($instance['title']); ?>"
                          name="<?php echo $this->get_field_name('title'); ?>"
                          id="<?php $this->get_field_id('title'); ?>"
                          class="widefat" />
      </p>

    	<?php
    }

}

?>