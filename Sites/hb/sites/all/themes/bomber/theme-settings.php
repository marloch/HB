<?php

/**
 * Implementation of themehook_settings().
 */
function bomber_form_system_theme_settings_alter(&$form, $form_state) {  
  $form['bomber'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bomber Settings'),
  );
  $form['bomber']['breadcrumb_delimiter'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb delimiter'),
    '#size' => 4,
    '#default_value' => theme_get_setting('breadcrumb_delimiter'),
    '#description' => t("Don't forget spaces at either end... if you're into that sort of thing."),
  );
  $form['bomber']['use_twitter'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use Twitter for site slogan'),
    '#default_value' => theme_get_setting('use_twitter'),
    '#description' => t("Choose a random status update using the search term below."),
  );
  $form['bomber']['twitter_search_term'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter search term'),
    '#default_value' => theme_get_setting('twitter_search_term'),
    '#description' => t("Pull a random tweet from search.twitter.com using this search query."),
  );
}