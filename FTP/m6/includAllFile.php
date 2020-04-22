<?php


$plugin_dir = __DIR__ . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;

$plugin_files = glob($plugin_dir . '*.php');
print_r($plugin_files);
foreach($plugin_files as $plugin_file) {

    include_once($plugin_file);
}

print_var($name);


?>