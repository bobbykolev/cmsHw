<?php
register_nav_menu('main_bokeh', 'Bokeh main menu');

register_sidebar(array(
  'name' => __('Right sidebar'),
  'id' => 'right_sidebar',
  'description' => __('Bokeh Widgets'),
  'before_widget' => '<div class="sidebar">',
  'after_widget' => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>' 
    ));
?>