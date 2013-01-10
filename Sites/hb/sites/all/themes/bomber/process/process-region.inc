<?php

/*
 * process for the region templates.
 */
function bomber_alpha_process_region(&$vars) {
  // custom functionality here
    
    $theme = alpha_get_theme();
  // Variables for brandingregion
    $vars['main_menu'] = $theme->page['main_menu'];
    $vars['front_page'] = $theme->page['fornt_page'];
}

