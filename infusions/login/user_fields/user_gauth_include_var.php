<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: login/user_fields/user_gauth_include_var.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}

$user_field_api_version = "1.0.2";
$user_field_name = $locale['uf_gauth'];
$user_field_desc = $locale['uf_gauth_desc'];
$user_field_dbname = "user_gauth";
$user_field_group = 1;
$user_field_dbinfo = "VARCHAR(20) NOT NULL";
$user_field_default = '';
$user_field_options = '';
$user_field_error = '';
// add new parameter for reader
$user_field_auth = ["GoogleAuthenticator", "login_authenticate"];
$user_field_auth_type = "2FA";
//$user_field_login = "GoogleAuthenticator";
require_once __DIR__.'/google_auth/google_auth.php';
