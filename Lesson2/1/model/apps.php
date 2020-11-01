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

function addApp($name, $phone) : bool{
    $dt = date("Y-d-m H:i:s");
    $app = ['dt' => $dt, 'name' => $name, 'phone' => $phone];
    $allApps = getApps();
    $allApps[] = $app;
    return saveApps($allApps);

}












?>