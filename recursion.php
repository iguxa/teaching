<?php
/**
 * Created by PhpStorm.
 * User: iguxa
 * Date: 09.08.19
 * Time: 16:45
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$arr = [30000000000000000000,34000000,5,70000006,34,678,4,23,56,2];
$start = microtime(true);

function recursion(array $array){
    foreach ($array as $key => $item)
    {
        if(isset($array[$num =$key+1]) and $item > $array[$num]){
            $array[$key] = $array[$num];
            $array[$num] = $item;
            echo ' Внутренняя рекурсия'.$key.'<br>' ;
            break;
        }
    }
    return $array;
}


function bubble_sort(array $array)
{
    foreach ($array as $key => $item)
    {
        if(isset($array[$num =$key+1]) and $item > $array[$num]){
            $array = recursion($array);
            //$array = bubble_sort($array);
            echo ' Внешняя рекурсия'.$key.'<br>' ;

        }
    }
    return $array;
}

$time = microtime(true) - $start;


//echo implode('<br>',$arr)."<br><br><br>";

echo implode('<br>',bubble_sort($arr))."<br>";
echo $time.' время выолнения скрипта доп баб сорт';


$start = microtime(true);

function old_bubble_sort(array &$array){
    foreach ($array as $key => $item)
    {
        if(isset($array[$num =$key+1]) and $item > $array[$num]){
            $array[$key] = $array[$num];
            $array[$num] = $item;
            $array = old_bubble_sort($array);
            echo ' Рекурсия'.$key.'<br>' ;
            break;
        }
    }
    return $array;
}
$time = microtime(true) - $start;

echo implode('<br>',old_bubble_sort($arr))."<br>";
echo $time.' время выолнения скрипта баб сорт';
