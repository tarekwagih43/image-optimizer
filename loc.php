<?php /*   

$location = $_SERVER['REMOTE_ADDR'];

echo $location;


$ipAddress = gethostbyname($_SERVER['SERVER_NAME']);
echo $ipAddress ;

echo "    ----->>      ";

if($ipAddress == '127.0.0.1' ){
	echo "local host visetor";
	} else echo "not identify";

 $indicesServer = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO') ; 

echo '<table cellpadding="10">' ; 
foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
    } 
    else { 
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
    } 
} 
echo '</table>' ; 
*/
?>


<?php 
$user_ip = [getenv('REMOTE_ADDR'), gethostbyname($_SERVER['SERVER_NAME'])];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
$continent = $geo["geoplugin_continentName"];
$timezone = $geo["geoplugin_timezone"];
$dmaCode = $geo["geoplugin_dmaCode"];
$latitude = $geo["geoplugin_latitude"];
$longitude = $geo["geoplugin_longitude"];
$locationAccuracyRadius = $geo["geoplugin_locationAccuracyRadius"];
$currencyCode = $geo["geoplugin_currencyCode"];
$currencySymbol = $geo["geoplugin_currencySymbol"];
$currencySymbol_UTF8 = $geo["geoplugin_currencySymbol_UTF8"];
$currencyConverter = $geo["geoplugin_currencyConverter"];

echo "City: ".$city."<br>";
echo "Region: ".$region."<br>";
echo "Country: ".$country."<br>";
echo "continent: ".$continent."<br>";
echo "timezone: ".$timezone."<br>";
echo "Designated Market Area Code: ".$dmaCode."<br>";
echo "latitude: ".$latitude."<br>";
echo "longitude: ".$longitude."<br>";
echo "location Accuracy Radius: ".$locationAccuracyRadius."<br>";
echo "currency Code: ".$currencyCode."<br>";
echo "currency Symbol: ".$currencySymbol."<br>";
echo "currency Symbol UTF8: ".$currencySymbol_UTF8."<br>";
echo "currency Converter: ".$currencyConverter."<br>";

$a = date_default_timezone_set($timezone);

echo date("d/m/y h:i:s A");


?>
