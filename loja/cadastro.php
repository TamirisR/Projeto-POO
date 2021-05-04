<?php
session_start();

if($_SESSION['usuario'] == true){
    var_dump($_POST);
}
else{
    echo "não";
    var_dump($_SESSION);
}