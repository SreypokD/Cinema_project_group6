<?php 
require '../../database/database.php';
require '../../models/searchs.model.php';

if(isset($_POST['query'])){
    $inputText=$_POST['query'];
    $datas=searchText($inputText);

    foreach($datas as $data){
        echo "<li class='list-none bg-red-500 border w-64 p-2'><a href='#'>".$data['title']."</a></li>";
    }
}