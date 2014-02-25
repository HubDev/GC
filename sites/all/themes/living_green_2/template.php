<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Living Green 2 theme.
 */
 
 //overide menu_link to render the description as well for the main menu
function living_green_2_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $element['#localized_options']['html'] = TRUE;

  /* Even/odd class on menu items */
  static $count = 0;
  $zebra = ($count % 2) ? 'even' : 'odd';
  $count++;
  $element['#attributes']['class'][] = $zebra;
  
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  /**
   * Add menu item's description below the menu title
   * Source: fusiondrupalthemes.com/forum/using-fusion/descriptions-under-main-menu
   */
  if ($element['#original_link']['menu_name'] == "main-menu" && isset($element['#localized_options']['attributes']['title'])){
    $element['#title'] .= '<em class="menu-item-tagline">' . $element['#localized_options']['attributes']['title'] . '</em>';
  }
  
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

//remove the welcome from the front page
function living_green_2_preprocess_html(&$variables) {
  if (drupal_is_front_page()) { $variables['head_title']="Welcome to ArtOfLivingGreen"; } 
}