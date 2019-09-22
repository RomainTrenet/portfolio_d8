<?php
/**
 * @file
 * Enables modules and site configuration for a standard site installation.
 */

use Drupal\Core\Form\FormStateInterface;
//use Drupal\contact\Entity\ContactForm;

/**
 * Implements hook_install_tasks().
 */
/*
function portfolio_install_tasks(&$install_state) {
  return [
    'manage_themes' => [
      'display_name' => t('Manage themes'),
      'display' => TRUE,
      'type' => 'form',
      'function' => 'Drupal\portfolio\Form\ManageThemeForm',
    ],
  ];
}*/

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
function portfolio_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['site_information']['site_name']['#attributes']['placeholder'] = t('Developpement Drupal');
  $form['site_information']['site_name']['#default_value'] = 'Développeur Drupal';
  $form['site_information']['site_mail']['#default_value'] = 'romain.trenet@gmail.com';

  $form['admin_account']['account']['name']['#default_value'] = 'Romain Trenet';
  $form['admin_account']['account']['mail']['#default_value'] = 'romain.trenet@gmail.com';


  $form['regional_settings']['site_default_country']['#default_value'] = 'FR';
  $form['regional_settings']['date_default_timezone']['#default_value'] = 'Europe/Paris';

  $form['update_notifications']['update_status_module']['#default_value'] = array();
}
