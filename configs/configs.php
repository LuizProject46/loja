<?php

ini_set('memory_limit', '256M');

date_default_timezone_set('America/Sao_Paulo');

if(getenv('APP_ENV') == "develop") {
  ini_set('display_errors','on');
  error_reporting( E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);
}
else {
  error_reporting( ~E_ALL & ~E_NOTICE & ~E_DEPRECATED);
  $ENV = "production";
}

global $url;
global $config;


?>