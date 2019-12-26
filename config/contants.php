<?php
/**
 * Created by PhpStorm.
 * User: Hoang Anh Tuan
 * Date: 3/14/2019
 * Time: 9:27 AM
 */
if (!defined('APP_NAME')) define('APP_NAME', 'Margin Coupon');
if (!defined('APP_VERSION')) define('APP_VERSION', '1.0.0');
if (!defined('APP_COPYRIGHT')) define('APP_COPYRIGHT', '2019');

if (!defined('ADMIN_DEFAULT_LIMIT')) define('ADMIN_DEFAULT_LIMIT', 15);
if (!defined('ADMIN_DEFAULT_LIMITS_DISPLAY')) define('ADMIN_DEFAULT_LIMITS_DISPLAY', serialize(
    [5 => 5, 10 => 10, 15 => 15, 20 => 20, 30 => 30, 50 => 50, 100 => 100, 200 => 200]
));
if (!defined('ADMIN_STATUS_DISABLED')) define('ADMIN_STATUS_DISABLED', 0);
if (!defined('ADMIN_STATUS_ENABLED')) define('ADMIN_STATUS_ENABLED', 1);
if (!defined('ADMIN_ALERTS')) define('ADMIN_ALERTS', serialize([
    'danger'    => ['icon' => 'ban', 'title' => 'danger'],
    'warning'   => ['icon' => 'warning', 'title' => 'warning'],
    'success'   => ['icon' => 'check', 'title' => 'success'],
    'info'      => ['icon' => 'info', 'title' => 'info']
]));
if (!defined('GENDER_FEMALE')) define('GENDER_FEMALE', 0);
if (!defined('GENDER_MALE')) define('GENDER_MALE', 1);
if (!defined('RULE_MASTER_ADMIN')) define('RULE_MASTER_ADMIN', 0);
if (!defined('RULE_STORE_ADMIN')) define('RULE_STORE_ADMIN', 1);