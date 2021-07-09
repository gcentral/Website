<?php

/*
echo "Disabling Tomcat server...             ";
$xampp_ini = getcwd() . "\\xampp\\xampp-control.ini";
$ini = parse_ini_file($xampp_ini, true);
$ini['EnableModules']['Tomcat'] = 0;
saveIni($ini, $xampp_ini);
echo "Done.\r";
*/

$xampp_folder = getenv('XAMPP_FOLDER');

echo "Configuring MySQL...                  ";

$search = '/xampp/';
$replace = str_replace('\\', '/', getcwd()) . '/' . $xampp_folder . '/';
$mysql = $replace . 'mysql';

$ini_file = $mysql . '/bin/my.ini';

$ini = file_get_contents($ini_file);

$ini = str_replace($search, $replace, $ini);

file_put_contents($ini_file, $ini);

echo "Done.\r";

/*
function saveIni($config, $path) {
	$output = "";
	
	foreach ($config as $name => $section) {
		$output .= "[" . $name . "]\r\n";
		foreach ($section as $key => $value) {
			$output .= $key . '=' . $value . "\r\n";
		}
		$output .= "\r\n";
	}
	
	file_put_contents($path, $output);
}*/