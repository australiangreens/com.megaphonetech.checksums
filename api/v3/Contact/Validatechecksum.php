<?php
use CRM_Checksums_ExtensionUtil as E;

/**
 * Contact.Validatechecksum API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRMDOC/API+Architecture+Standards
 */
function _civicrm_api3_contact_Validatechecksum_spec(&$spec) {
  $spec['id']['api.required'] = 1;
  $spec['checksum']['api.required'] = 1;
}

/**
 * Contact.Generatechecksum API
 *
 * @param array $params
 * @return array API "values" is false is checksum is invalid, true if calid.
 * @see civicrm_api3_create_success
 */
function civicrm_api3_contact_Validatechecksum($params) {

  $cid = $params['id'];
  $cs = $params['checksum'];
  $result = CRM_Contact_BAO_Contact_Utils::validChecksum($cid, $cs);
  return civicrm_api3_create_success($result);
}
