<?php
$options['application'] = 'drupal';
$options['deploy-repository'] = 'https://github.com/Goruachev42/KievCamp14.git';
$options['branch'] = "master";
$options['keep-releases'] = 3;
$options['deploy-via'] = 'RemoteCache';


// Initialize, sync, and update submodules with 'git submodule' commands
$options['git_enable_submodules'] = TRUE;
// Run additional tasks after the 'current' symlink has been updated


$options['after']['deploy-symlink'][] = 'deploy_cache_task';


function deploy_cache_task($d) {
    $d->run_once("cd /var/www/vhosts/drushdep.uat.link/httpdocs/ && %s cc all -y", $d->sites[0]['path-aliases']['%drush-script']);
}


//utf8004242