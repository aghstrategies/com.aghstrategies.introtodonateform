<?php
/**
 * @file
 * Intro to Donate Form
 *
 * Extension to store info entered on a mini-form and on submit take you to a donation page populated appropriately.
 *
 * Copyright (C) 2016, AGH Strategies, LLC <info@aghstrategies.com>
 * Licensed under the GNU Affero Public License 3.0 (see LICENSE.txt)
 */

require_once 'introtodonateform.civix.php';

/**
 * Implements introtodonateform_civicrm_buildform
 *
 */
function introtodonateform_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main') {
    //loads javascript for other amount on same line
    CRM_Core_Resources::singleton()->addScriptFile('com.aghstrategies.introtodonateform', 'js/introtodonate.js');
    if ($form->getAction() == CRM_Core_Action::ADD) {
      if (!empty($_GET["itdf-firstname"])) {
        $defaults['first_name'] = htmlspecialchars($_GET["itdf-firstname"]);
      }
      if (!empty($_GET["itdf-lastname"])) {
        $defaults['last_name'] = htmlspecialchars($_GET["itdf-lastname"]);
      }
      if (!empty($_GET["itdf-email"])) {
        $defaults['email-5'] = htmlspecialchars($_GET["itdf-email"]);
      }
      // TODO: make radio buttons change
      if (!empty($_GET["itdf-amount"]) && !empty($form->_priceSet['fields'])) {
        $found = FALSE;
        foreach ($form->_priceSet['fields'] as $field) {
          if ($field['name'] == 'contribution_amount') {
            $radioId = $field['id'];
          }
          if (!empty($field['options'])) {
            foreach ($field['options'] as $option) {
              if (floatval(CRM_Utils_Array::value('itdf-amount', $option)) == floatval($_GET["itdf-amount"])) {
                //we found the price option that matches the amount
                $defaults['price_' . $field['id']] = $option['id'];
                $found = TRUE;
                break 2;
              }
            }
          }
          if ($field['name'] == 'other_amount') {
            $otherId = $field['id'];
          }
        }
        //handle amount not found
        if (!$found) {
          $defaults['price_' . $radioId] = 0;
          $defaults['price_' . $otherId] = $_GET["itdf-amount"];
        }
      }
      $form->setDefaults($defaults);
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function introtodonateform_civicrm_config(&$config) {
  _introtodonateform_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function introtodonateform_civicrm_install() {
  _introtodonateform_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function introtodonateform_civicrm_enable() {
  _introtodonateform_civix_civicrm_enable();
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *

 // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function introtodonateform_civicrm_navigationMenu(&$menu) {
  _introtodonateform_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'com.aghstrategies.introtodonateform')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _introtodonateform_civix_navigationMenu($menu);
} // */
