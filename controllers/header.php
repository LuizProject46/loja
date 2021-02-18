<?php


session_start();

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

# ---------
# Load all models
$directories = dir(realpath(dirname(__FILE__). "/../models/"));
while($file = $directories -> read()) {

  if(strstr($file, "model.") && substr($file, -4, 4) === ".php") {
    require_once($directories->path . "/" . $file);
  }
}
$directories->close();
# ---------

# ---------
# Start var: $config

$environment = explode('.', $_SERVER['HTTP_HOST'])[0];

if($environment == "develop") {
  $site[url] = "http://lojabeto.com/";

  ini_set('display_errors','on');
  error_reporting( E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
}
else {
  $site[url] = "http://lojabeto.com/";
}


?>