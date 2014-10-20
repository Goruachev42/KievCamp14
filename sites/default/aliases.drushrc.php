<?php

$aliases['live'] = array(
   'root' => '/var/www/vhosts/drushdep.uat.link/httpdocs/',
    'uri' => 'drushdep.uat.link',
    'remote-user' => 'drushdep',
    'remote-host' => 'drushdep.uat.link',
   'ssh-options' => '-o PasswordAuthentication=yes',
    'rsync' => array (
  'simulate' => '1',
  'ssh-options' => '-o PasswordAuthentication=yes',
  //'ssh-options' => '-p 3877', //port
),

    'path-aliases' => array(
        '%files' => '/var/www/vhosts/drushdep.uat.link/httpdocs/sites/default/files',
        '%drush-script' => 'drush',
    ),

);



$aliases['local'] = array(
    'root' => '/var/www/cam14',
    'uri' => 'drushdep.uat.link',
    'remote-user' => 'drushdep',
    'remote-host' => 'drushdep.uat.link',
    'ssh-options' => '-o PasswordAuthentication=yes',


);
?>