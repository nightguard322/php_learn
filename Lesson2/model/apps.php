<?php

function getApps() : array{
    $str = file_get_contents('db/apps.txt');
    return json_decode($str, true);
}


function saveApps(array $apps) : bool{
    $str = json_encode($apps);
    file_put_contents('db/apps.txt', $str);
    return true;
}












?>