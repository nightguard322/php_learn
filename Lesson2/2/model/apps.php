<?php

function getApps() : array{
    $lines = file('db/apps.txt');
    $apps = [];

    foreach($lines as $line){
        $apps[] = appStringToArr($line);
    }

    return $apps;


    //return json_decode($str, true);
}


function addApp(string $name, string $phone) : bool{
    $dt = date("Y-d-m H:i:s");
    $app = "$dt;$name;$phone\n";
    file_put_contents('db/apps.txt', $app, FILE_APPEND);
    return true;

}

function appStringToArr($str){

    return


}











?>