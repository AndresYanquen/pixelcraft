<?php

class Custom_Nav_Walker extends Walker_Nav_Menu {
  public function start_lvl(&$output, $depth = 0, $args = null) {
      $output .= '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      $classes = empty($item->classes) ? array() : (array) $item->classes;
      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
      $class_names = ' class="nav-item ' . esc_attr($class_names) . '"';

      $output .= '<li' . $class_names . '>';

      $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
      $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
      $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
      $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

      $item_output = $args->before;
      $item_output .= '<a class="nav-link' . (in_array('current-menu-item', $classes) ? ' active' : '') . '"' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}

?>