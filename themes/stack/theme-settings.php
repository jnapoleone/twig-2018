<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function stack_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['st_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Stack Theme Settings'),
        '#collapsible' => true,
        '#collapsed' => true,
    );
  
  // Theme Color
  $form['st_settings']['tabs']['theme_menu_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('menu setting'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['st_settings']['tabs']['theme_menu_config']['theme_menu'] = array(
    '#type' => 'select',
    '#title' => t('Menu Type'),
    '#default_value' => theme_get_setting('theme_menu','stack'),
    '#options'  => array(
        'menudefault'	=> t('Light - Default'),
        'menuwhite'	=> t('White'),
        'menudark' 	=> t('Dark')
    ),
  );
  
  
  $form['st_settings']['tabs']['theme_menu_config']['menu_sticky'] = array(
    '#type' => 'checkbox',
    '#title' => t('Menu sticky'),
    '#default_value' => theme_get_setting('menu_sticky','stack'),
	'#description' => 'Make the menu sticky',
  );
  
  // Color
  $form['st_settings']['tabs']['them_color_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('Color setting'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['st_settings']['tabs']['them_color_config']['theme_color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => theme_get_setting('theme_color'),
    '#options'  => array(
        'default'           => t('Default'),
        'aqua'              => t('Aqua'),
        'cedar'             => t('Cedar'),
        'charcoal'           => t('Charcoal'),
        'greensea'       => t('Green Sea'),
        'red'            => t('Red'),
        'serpent'            => t('Serpent'),
        'tangerine'             => t('Tangerine'),
        'yeller'           => t('Yeller')
    ),
  );
  
}

