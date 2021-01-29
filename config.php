<?php
error_reporting(E_ALL);

define('SILENTC_TOKEN', '1393818383:AAEJv53xDYRPvxBE7pdiNnKf4WgofVf8EmE');
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		276145711,
	],
	'api_id' => 1580449,
	'api_hash' => 'fa7e6ec2f1772f55f000d0997fd464ea',
];

# User that will receive the error reports
define('SILENTC_ADMIN', 276145711);
