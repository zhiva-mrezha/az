<?php

$database_host = 'localhost';
$database_name = '{{ phplist_db_name }}';
$database_user = '{{ phplist_db_user }}';
$database_password = '{{ phplist_db_password }}';
$pageroot = '';
define ("TEST",0);
define('PHPMAILERHOST', '{{ mail_host }}');
$phpmailer_smtpuser = '{{ mail_user }}';
$phpmailer_smtppassword = '{{ mail_password }}';
define("PHPMAILERPORT",'587');
define("PHPMAILER_SECURE",'tls');
$language_module = 'bulgarian.inc';

define('MANUALLY_PROCESS_BOUNCES', 0);
define('MANUALLY_PROCESS_QUEUE', 0);

$bounce_mailbox_host = 'pop.gmail.com';
$bounce_mailbox_user = 'zhivamrezha';
$bounce_mailbox_password = 'mdkjrkpxiyjzrvlq';
$bounce_mailbox_port = "995/pop3/ssl/novalidate-cert";
$message_envelope = "zhivamrezha+sesbounce@gmail.com";

define('VERBOSE', 1);
define('PHPMAILER_SMTP_DEBUG', 2);
