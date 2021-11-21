<?php
$json_file = file_get_contents("https://www.whenisthenextmcufilm.com/api");   
$json_str = json_decode($json_file);


// var_dump($json_str);
echo "Faltam " . $json_str->following_production->days_until . " dias";
?>