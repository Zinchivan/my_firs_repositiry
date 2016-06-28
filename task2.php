<?php 
$php1601 = 6;
const php1601 = 5;
echo $php1601;
echo '<br>';
echo '<br>';
$php1601 += 1;
$php1601 = $php1601 + 1;
echo $php1601 % 3;
echo '<br>';
echo '<br>';
echo $php1601 / 3;
echo '<br>';
echo '<br>';
echo $php1601;
echo '<br>';
echo '<br>';
echo php1601;
$str = 'sadfgasd';
$str.=' dfgsdfgsdf';
$str =' dfgsdfgsdf '.$str;
echo '<br>';
echo '<br>';
echo $str;
echo '<br>';
echo '<br>';
echo false;
echo '<br>';
echo '<br>';
echo ''.(5);
echo true;
echo '<br>';
echo '<br>';
echo '$str';
echo '<br>';
echo '<br>';
echo "$str";
$var = 'str';
echo '<br>';
echo '<br>';
echo $$var;
echo '<br>';
echo '<br>';
echo $$$var;
echo '<br>';
echo '<br>';
echo '12344'/5;
function func($a, $b, $c){
    //global $php1601;
    $php += $php1601 + $php2 + $php3;
    echo '-'.$php.'-';
}
echo '<br>';
echo '<br>';
func(5,3);
$arr1 = ['db'=>6, 'key'=>'5'];
$arr2 = [1=>5, '7'];
echo '<br>';
echo '<br>';
echo $arr1;
echo '<br>';
echo '<br>';
echo $arr1["db"];
echo '<br>';
echo '<br>';
echo $arr2[2];
echo '<br>';
echo '<br>';
var_dump($str);
echo '<br>';
echo '<br>';
var_dump($arr1);
echo '<br>';
echo '<br>';
print_r($arr1);
echo '<br>';
echo '<br>';
echo serialize($arr1);
echo '<br>';
echo '<br>';
echo var_export($arr1);
echo '<br>';

$menu = [
    ['link'=>'/', 'title'=>'home'],
    ['link'=>'/services', 'title'=>'Services', 'children'=>[
         ['link'=>'/serv1', 'title'=>'Serv 1'],
         ['link'=>'/serv2', 'title'=>'Serv 2'],
         ['link'=>'/serv3', 'title'=>'Serv 3'],
    ]],
    ['link'=>'/news', 'title'=>'News'],
    ['link'=>'/contacts', 'title'=>'Write to us']
];

echo '<br>';
$string = "X1:X2";
$arr = explode(':', $string);
var_dump($arr);
echo '<br>';
$string = implode('|', $arr);
var_dump($string);
echo '<br>';
var_dump('X' == 'X');
//strcmp('x','x');
echo '<br>';

var_dump(strpos('1235', '3'));
var_dump(strpos('12335', '3'));
var_dump(strrpos('12335', '3'));
var_dump(strpos('1235', '7')==0);
var_dump(strpos('1235', '7')===0);
echo '<br>';
echo strtolower('sAdfgdf');
echo '<br>';
echo strtoupper('dfdf');
//strip_tags(,'');
echo '<br>';
//echo strlen($string);
echo substr($string,-2,1);
echo '<br>';
echo $str =  htmlentities('<td></td>');
echo $str = html_entity_decode($str);
base64_decode($var);
echo iconv('UTF-8', 'WINDOWS-1251', 'ывапыв');
echo iconv('UTF-8', 'WINDOWS-1251', iconv('WINDOWS-1251','UTF-8','ывапыв'));
echo '<br>';echo '<br>';
$str = '<h1>{title}</h1>';
echo $str;
echo '<br>';
ini_set('display_errors', 1);
ini_set('error_reporting', E_ERROR);
error_reporting(E_ALL);
echo '<br>';
echo '<br>';
echo str_replace('{title}', 'Заголовок', $str);

function fact($n){
    return $n==1?1:$n*fact($n-1);
}
echo fact(3);echo '<br>';
echo fact(5);echo '<br>';
echo fact(7);echo '<br>';
echo fact(2);echo '<br>';
if(fact(3)==6){
    echo var_dump(true);
}

if(true){
    echo 'ложь';
}

switch(fact(6)){
    default:{
        echo '7';
        break;
    }
    case 2:
    case 6:
    case 5:{
        echo '3';
        break;
    }
    case 120:{
        echo '5';
        break;
    }
    
}
/*
time();
date();
mktime();
strtotime();
strftime();
include
require
суперглобальные массивы
ceil
number_format
floor
round
куки 
 */
/*
{title}
function showMenu($menuArray){
    echo '<ul>';
    foreach($menuArray AS $key => $item){
        echo '<li><a href="'.$item['link'].'">'.$item['title'].'</a></li>';
    }
    echo '</ul>';
 
    
    for($i=0; $i<count($menuArray); $i++){
        echo '<li><a href="'.$menuArray[$i]['link'].'">'.$menuArray[$i]['title'].'</a></li>';
        echo '<br>';
    }
    
    for($i=0; $i<5; $i+=2){
        //break;
        //continue;
        $i--;
        echo $i;
        echo '<br>';
    }
    echo '<br>';
    echo '<br>';
    
    $i=0;
    while($i<5){
        echo $i;
        echo '<br>';
        $i++;
    }
    
    echo '<br>';
    $i=0;
    do{
        echo $i;
        echo '<br>';
        $i++;
    }while($i<5);
}
showMenu($menu);*/
//phpinfo();

?>
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/services">Services</a></li>
    <li><a href="/news">News</a></li>
</ul>