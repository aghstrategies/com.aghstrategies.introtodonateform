<?php

require_once 'introtodonateform.civix.php';

/**
 * Implements introtodonateform_civicrm_buildform
 *
 */
function introtodonateform_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution_Main') {
    if ($form->getAction() == CRM_Core_Action::ADD) {
      if (!empty($_GET["firstname"])) {
        $defaults['first_name'] = htmlspecialchars($_GET["firstname"]);
      }
      if (!empty($_GET["lastname"])) {
        $defaults['last_name'] = htmlspecialchars($_GET["lastname"]);
      }
      if (!empty($_GET["email"])) {
        $defaults['email-5'] = htmlspecialchars($_GET["email"]);
      }
      // TODO: make radio buttons change
      if (!empty($_GET["amount"]) && !empty($form->_priceset['fields'])) {
        $found = FALSE;
        foreach ($form->_priceset['fields'] as $field) {
          if (!empty($field['options'])) {
            foreach ($field['options'] as $option) {
              if (CRM_Utils_Array::value('amount', $option) == $_GET["amount"]) {
                //we found the price option that matches the amount
                $defaults['price_' . $field['id']] = $option['id'];
                $found = TRUE;
                break 2;
              }
            }
          }
          if ($field['option']['name'] == 'other_amount') {
            $other = $field['option']['name'];
          }
        }
        //handle amount not found
        if (!$found) {
          $defaults['price_' . $field['id']] = $option['id'];
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
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function introtodonateform_civicrm_xmlMenu(&$files) {
  _introtodonateform_civix_civicrm_xmlMenu($files);
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
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function introtodonateform_civicrm_uninstall() {
  _introtodonateform_civix_civicrm_uninstall();
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
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function introtodonateform_civicrm_disable() {
  _introtodonateform_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function introtodonateform_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _introtodonateform_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function introtodonateform_civicrm_managed(&$entities) {
  _introtodonateform_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * @param array $caseTypes
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function introtodonateform_civicrm_caseTypes(&$caseTypes) {
  _introtodonateform_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function introtodonateform_civicrm_angularModules(&$angularModules) {
_introtodonateform_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function introtodonateform_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _introtodonateform_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function introtodonateform_civicrm_preProcess($formName, &$form) {

} // */

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
