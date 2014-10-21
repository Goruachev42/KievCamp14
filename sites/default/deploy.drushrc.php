<?php
$options['application'] = 'goruachev42';
$options['deploy-repository'] = 'git@github.com:Goruachev42/KievCamp14.git';
$options['branch'] = "master";
$options['keep-releases'] = 3;
$options['deploy-via'] = 'RemoteCache';
$options['docroot'] = '/var/www/vhosts/drushdep.uat.link/httpdocs/';

//$options['ssh-options'] = '-o PasswordAuthentication=yes';
//$options['git_enable_submodules'] = TRUE;
// Run additional tasks after the 'current' symlink has been updated
//$options['after']['deploy-symlink'][] = 'my_custom_task';
//
//  22
//
///**
// * The task needs to be defined with a @task "decorator" in the comment block preceding it
// * @taskss
// */
//function my_custom_task($d) {
//    $d->run("ln -s /var/www/vhosts/drushdep.uat.link/deploy/shared/settings.php %s/sites/default/settings.php", $d->latest_release());
//    $d->run("ln -s /var/www/vhosts/drushdep.uat.link/deploy/shared/files %s/sites/default/files", $d->latest_release());
//}

