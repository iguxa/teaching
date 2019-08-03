<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/**
 * Created by PhpStorm.
 * User: tsybykov
 * Date: 04.06.19
 * Time: 19:20
 */
//echo 'regex';
$str = 'My name is Andrey gr1y';
$pattern = '/gr.y/i';

if(preg_match($pattern,$str,$match)){
    echo 'Есть совпадение';
}else{
    echo 'Нет соввпадения';
};
var_dump($match);