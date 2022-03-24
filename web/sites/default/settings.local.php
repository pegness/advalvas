<?php


// Settings that override the active configuration..
$config['environment_indicator.indicator']['bg_color'] = '#555555';
$config['environment_indicator.indicator']['fg_color'] = '#FFFFFF';
$config['environment_indicator.indicator']['name'] = 'Omgeving: Local';
$config['system.logging']['error_level'] = 'all';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Php config overrides.
ini_set('memory_limit', '20G');
ini_set('max_execution_time', 10000);
ini_set('xdebug.max_nesting_level', 2048);

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['extension_discovery_scan_tests'] = FALSE;
$settings['skip_permissions_hardening'] = TRUE;


/*$settings['trusted_host_patterns'] = array(
  '^advalvas.localhost$',
  '^advalvas\.localhost$',
  '^www\.advalvas\.localhost$',
  '^https://www\.advalvas\.localhost$',
  'localhost:8888',
  'localhost:8888/advalvas_latest/',
  'localhost:8888/advalvas_latest_drupal9$'
);*/

$databases['default']['default'] = array (
    //'database' => 'advalvas_drupal7_2',
    'database' => 'advalvas_latest_update9',
    'username' => 'root',
    'password' => 'root',
    'prefix' => '',
    'host' => 'localhost',
    'port' => '8889',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
);
    
$settings['config_sync_directory'] = '../config/sync';
$settings['maintenance_theme'] = 'seven';


$config['reroute_email.settings']['enable'] = TRUE;
$config['reroute_email.settings']['address'] = "pegness@gmail.com";

