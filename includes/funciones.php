<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}
function is_auth():void{
    session_start();
    if(empty($_SESSION) || !$_SESSION['login']){
        header('Location: /');
    }
}
function is_selected($path):bool{
    return str_contains($_SERVER['PATH_INFO'], $path) ? true : false;
}
function is_free($availability):string{
    return $availability ? 'libre': 'ocupada';
}
