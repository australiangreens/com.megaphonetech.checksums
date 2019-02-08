<?php
use CRM_Checksums_ExtensionUtil as E;

/**
 * Contact.Generatechecksum API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_contact_Generatechecksum_spec(&$spec) {
  $spec['id']['api.required'] = 1;
}

/**
 * Contact.Generatechecksum API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 */
function civicrm_api3_contact_Generatechecksum($params) {

  $cid = $params['id'];
  $cs = CRM_Contact_BAO_Contact_Utils::generateChecksum($cid);
  return civicrm_api3_create_success($cs);
}
