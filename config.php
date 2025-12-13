<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => 'hqArYleqiw/P12NUXSV9V43NpudJfM',
  'secret' => 'wvNT1Jk4sU/9uI7YheXtaKQ5U+GGYrHAgjkHEwfIH/oJZjUJ',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'cloud.jerkins.net',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '32.0.3.2',
  'overwrite.cli.url' => 'https://cloud.jerkins.net',
  'overwriteprotocol' => 'https',
  'overwritehost' => 'cloud.jerkins.net',
  'trusted_proxies' => 
  array (
    0 => '173.245.48.0/20',
    1 => '103.21.244.0/22',
    2 => '103.22.200.0/22',
    3 => '103.31.4.0/22',
    4 => '141.101.64.0/18',
    5 => '108.162.192.0/18',
    6 => '190.93.240.0/20',
    7 => '188.114.96.0/20',
    8 => '197.234.240.0/22',
    9 => '198.41.128.0/17',
    10 => '162.158.0.0/15',
    11 => '104.16.0.0/13',
    12 => '104.24.0.0/14',
    13 => '172.64.0.0/13',
    14 => '131.0.72.0/22',
  ),
  'forwarded_for_headers' => 
  array (
    0 => 'HTTP_CF_CONNECTING_IP',
  ),
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => '1Gt1B1AZTN1yBL4DhY1XtwT8wc7Lsd',
  'installed' => true,
  'instanceid' => 'oc9zg4wok9vy',
  'mail_smtpmode' => 'smtp',
  'mail_smtpauth' => true,
  'mail_sendmailmode' => 'smtp',
  'mail_smtphost' => 'email-smtp.us-east-1.amazonaws.com',
  'mail_smtpport' => '25',
  'mail_from_address' => 'noreply',
  'mail_domain' => 'jerkins.net',
  'mail_smtpname' => 'AKIATAX5ZM6KOTPEPRXZ',
  'mail_smtppassword' => 'BPpPzcsPOb/Qf9ujsS5bes+T76Nun49DB5Jt2ju5xcJe',
  'mail_smtpsecure' => 'ssl',
  'loglevel' => 2,
  'maintenance' => false,
);
