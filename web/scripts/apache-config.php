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

echo "Configuring Apache...                  ";
$httpd_conf = getcwd() . '\\' . $xampp_folder . '\\apache\\conf\\httpd.conf';
$httpd_file = fopen($httpd_conf, 'r+');

$count = 0;
$docroot = '/(DocumentRoot ")([^"]+)(".*)/';
$dirpat = '/(<Directory ")([^"]+)(".*)/';
$docrepl = '${1}' . str_replace('\\', '/', getcwd()) . '/public' . '${3}';

$svrdef = '/(Define SRVROOT ")([^"]+)(".*)/';
$svrroot = '/(ServerRoot ")([^"]+)(".*)/';
$svrrepl = '${1}' . str_replace('\\', '/', getcwd()) . '/' . $xampp_folder . '/apache' . '${3}';

$out = "";
while (($line = fgets($httpd_file)) !== false) {
	$fixed = preg_replace($docroot, $docrepl, $line, -1, $count);
	if ($count > 0) {
		$out .= $fixed;
		continue;
	}
	
	$fixed = preg_replace($dirpat, $docrepl, $line, -1, $count);
	if ($count > 0) {
		$out .= $fixed;
		continue;
	}
	
	$fixed = preg_replace($svrdef, $svrrepl, $line, -1, $count);
	if ($count > 0) {
		$out .= $fixed;
		continue;
	}
	
	$fixed = preg_replace($svrroot, $svrrepl, $line, -1, $count);
	if ($count > 0) {
		$out .= $fixed;
		continue;
	}
	
	$out .= $line;
}

//print_r($out);

ftruncate($httpd_file, 0);
rewind($httpd_file);
fwrite($httpd_file, $out);
fclose($httpd_file);

echo "Done.\r";


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
}