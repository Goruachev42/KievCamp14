<?php

$aliases['live'] = array(
   'root' => '/var/www/vhosts/drushdep.uat.link/httpdocs/',
    'uri' => 'http://drushdep.uat.link',
    'remote-user' => 'drushdep',
    'remote-host' => 'drushdep.uat.link',
//   'ssh-options' => '-o PasswordAuthentication=yes',



);



$aliases['local'] = array(
    'root' => '/var/www/cam14',
    'uri' => 'drushdep.uat.link',
    'remote-user' => 'drushdep',
    'remote-host' => 'drushdep.uat.link',
    'ssh-options' => '-o PasswordAuthentication=yes',


);
?>
