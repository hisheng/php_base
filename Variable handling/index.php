<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/5/18
 * Time: 15:43
 */


//1 获取val
$a = '1.1p'; //$a = 'p1.1p';
var_dump(boolval($a)); //true   // true
var_dump(floatval($a)); //1.1 //0
var_dump(intval($a)); //1  //0
var_dump(strval($a)); // '1.1p' //'p1.1p'

//2 检测变量 类型
$b = '';
gettype($b) ;//获取变量类型
is_array($b);
is_bool($b);
is_object($b);
is_int($b);
is_null($b);
is_string($b);
is_resource($b);

//3 检查变量是否设置
$c = '';
isset($c);

//4 检查变量是否为 空
empty($c);

//4 释放给定的变量
unset($c);

//5 打印
echo $c;
print_r($c);
var_dump($c);
sprintf('hi %s',$c);
