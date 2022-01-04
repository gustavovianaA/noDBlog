<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST')
    die();

$search = isset($_POST['search']) && $_POST['search'] != '' ? strtolower(filter_var($_POST['search'], FILTER_SANITIZE_STRING)) : false;

//unset($_POST);

if(!$search)
    header('location: ../');

require_once('../config/articles.php');

$results = [];

foreach(ARTICLES as $id => $article){
            if(strpos(strtolower($article['title']) , $search) === false){
                header('location: ../index.php?page=search&search=' . $search . '&results=');
            }else{
                if($article['count'] === 0)
                    $results[] = $id;
            }
}

$results = implode(',' , $results);

header('location: ../index.php?page=search&search=' . $search . '&results=' . $results);





