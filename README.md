# com.megaphonetech.checksums

This extension allows creating and validating checksums via the API.  It is inspired by [this Stack Exchange question](https://civicrm.stackexchange.com/questions/4683/get-or-generate-a-contact-checksum-via-api).

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* CiviCRM 5.0+.  Should work on much older versions of CiviCRM but is not tested.

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.megaphonetech.checksums@https://github.com/MegaphoneJon/com.megaphonetech.checksums/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/com.megaphonetech.checksums.git
cv en checksums
```

## Usage

This adds two new actions to the Contact API, `generatechecksum` and `validatechecksum`.

`generatechecksum` takes a single argument (the contact ID) as `id` and generates a checksum.
`validatechecksum` takes two arguments (the contact ID and checksum) as `id` and `checksum`.  It will return `TRUE` for a valid checksum and `FALSE` for an invalid checksum.

```
cv api contact.generatechecksum id=4
cv api contact.validatechecksum id=4 checksum=6399ea2ee978108642bf63fd0fe50cfa_1549648345_168
```
