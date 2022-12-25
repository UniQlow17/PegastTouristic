<?php

$connect = mysqli_connect(host:'localhost', user:'root',password:'',database:'pegastourist');

if(!$connect){
    die('Ошибка подключения БД!!!');
}
