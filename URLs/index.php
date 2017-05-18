<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/5/18
 * Time: 16:06
 */
$url = 'http://www.baidu.com';
var_dump(gethostname());
var_dump(get_headers($url)); //获取某个域名的 http response头部

//2 生成  foo=bar&baz=boom&cow=milk&php=hypertext+processor
$data = array('foo'=>'bar',
    'baz'=>'boom',
    'cow'=>'milk',
    'php'=>'hypertext processor');

echo http_build_query($data) . "\n";


//3 urlencode 字符串中除了 -_. 之外的所有非字母数字字符都将被替换成百分号（%）后跟两位十六进制数  --用在 url中

//4  htmlentities  将字符转换为 HTML 转义字符---- 通常用在 文章中


//5  parse_url
$url = '//www.example.com/path?googleguy=googley';

// parse_url 解析url
var_dump(parse_url($url));
//array(3) {
//    ["host"]=>
//  string(15) "www.example.com"
//    ["path"]=>
//  string(5) "/path"
//    ["query"]=>
//  string(17) "googleguy=googley"
//}

//6 仅仅对 其中的 query 解析用  parse_str

$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first;  // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz
