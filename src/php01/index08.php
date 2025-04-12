<?php
$people = ["Taro", "Jiro", "hanako"];
$person = ["(25歳 men)", "(20歳 men)", "(16歳 women)"];

$date = array_combine($person, $people);

foreach ($date as $person => $people){
    echo $people, $person, '<br />';
}