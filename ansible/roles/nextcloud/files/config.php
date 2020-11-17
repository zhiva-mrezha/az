<?php
$CONFIG = array (
  'instanceid' => '{{ nextcloud_instance_id }}',
  'passwordsalt' => '{{ nextcloud_password_salt }}',
  'secret' => '{{ nextcloud_secret }}',
  'trusted_domains' => 
  array (
    0 => '{{ nextcloud_domain }}',
  ),
  'datadirectory' => '{{ nextcloud_root }}/data',
  'dbtype' => 'pgsql',
  'version' => '20.0.1.1',
  'overwrite.cli.url' => 'https://{{ nextcloud_domain }}',
  'dbname' => '{{ nextcloud_db_name }}',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => '{{ nextcloud_db_user }}',
  'dbpassword' => '{{ nextcloud_db_password }}',
  'installed' => true,
);
