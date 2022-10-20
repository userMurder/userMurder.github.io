<?php
$str = file_get_contents('https://samp-stats.ru/web/api-18792.js');
$str = substr($str, strpos($str, "players"));
$str = substr($str, 0, strpos($str, ",maxplayers:"));
$str = preg_replace('/[^0-9 ,]/', '', $str);
if(!$str) $str = 0;
echo '{"query":[{"number":1,"name":"Cladman","ip":"46.174.51.153","port":7777,"online":' .$str .',"maxplayers":1000,"password":false}]}';
