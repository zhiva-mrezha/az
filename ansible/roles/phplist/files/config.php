<?php

$database_host = 'localhost';
$database_name = '{{ phplist_db_name }}';
$database_user = '{{ phplist_db_user }}';
$database_password = '{{ phplist_db_password }}';
$pageroot = '';
define ("TEST",0);
define('PHPMAILERHOST', 'smtp.eu.mailgun.org');
$phpmailer_smtpuser = 'postmaster@{{ mail_domain }}';
$phpmailer_smtppassword = '{{ mail_smtppassword }}';
define("PHPMAILERPORT",'465');
define("PHPMAILER_SECURE",'ssl');
define('PHPMAILER_SMTP_DEBUG', 3);
$language_module = 'bulgarian.inc';
