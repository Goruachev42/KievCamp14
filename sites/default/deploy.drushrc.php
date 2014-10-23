<?php
$options['application'] = 'goruachev42';
$options['deploy-repository'] = 'https://github.com/Goruachev42/KievCamp14.git';
$options['branch'] = "master";
$options['keep-releases'] = 2;
$options['deploy-via'] = 'RemoteCache';


// Initialize, sync, and update submodules with 'git submodule' commands
$options['git_enable_submodules'] = TRUE;
// Run additional tasks after the 'current' symlink has been updated

$options['after']['deploy-symlink'][] = 'deploy_pull_task';
$options['after']['deploy-symlink'][] = 'deploy_cache_task2';

/**
 * The task needs to be defined with a @task "decorator" in the comment block preceding it
 * @task
 */

$options['shell-aliases']['offline'] = 'variable-set -y --always-set maintenance_mode 1';
function deploy_pull_task($d) {
    $d->run_once("cd /var/www/vhosts/drushdep.uat.link/httpdocs/ && git pull origin master", $d->sites[0]['path-aliases']['%drush-script']);
}
function deploy_cache_task2($d) {
    $d->run_once("cd /var/www/vhosts/drushdep.uat.link/httpdocs/ && %s cc all -y", $d->sites[0]['path-aliases']['%drush-script']);
}


//utf8004242