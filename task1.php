<?php

$menu = [
    ['link'=>'/','title'=>'home','children'=>[
        ['link'=>'/home1','title'=>'home 1'],
        ['link'=>'/home2','title'=>'home 2'],
        ['link'=>'/home3','title'=>'home 3'],
    ]],
    ['link'=>'/servise','title'=>'servise', 'children1'=>[
        ['link'=>'/serv1','title'=>'serv 1'],
        ['link'=>'/serv2','title'=>'serv 2'],
        ['link'=>'/serv3','title'=>'serv 3'],
    ] ],
    ['link'=>'/news','title'=>'news'],
    ['link'=>'/contacts','title'=>'Write to us']
];
function showMenu($menuArray){
    echo "<ul>";
    
    foreach ($menuArray AS $item){
        echo '<li><a href="'.$item["Link"].'">'.$item["title"].'</a>;';
                if(isset($item['children'])){
                 showMenu($item['children']);
                }
                echo '</li>';            
   
    }
    
    echo "</ul>";
    
    }

showMenu($menu)

?>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/servise">Servise</a></li>
    <li><a href="/news">News</a></li>
    <li><a href="/contacts">Contacts</a></li>
    
</ul>