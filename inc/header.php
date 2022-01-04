<?php
if (!empty($_GET)) {

  $folder = filter_var(array_key_first($_GET), FILTER_SANITIZE_STRING);
  $target = filter_var($_GET[$folder], FILTER_SANITIZE_STRING);
  
  $data = listArticleByLink(ARTICLES,$target); 
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title'] ?? 'gvaProgramador' ?></title>
  <meta name="description" content="<?= $data['title'] ?? 'Blog sobre computação, programação e matemática'?>">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>

<body>
  <header>
    <div id="banner" style="padding: 10px 20px 0 20px">
      <!-- <img src="img/main/jogo_da_velha.gif" alt="logo" style="width: 80px; height: 80px"> -->
      <div style="display: inline-block">
        <h1 style="margin: 0;"><span style="color: rgb(218,165,32)">noDBlog</span></h1>
        <h5 style="margin: 0;">Databeseless Blog</h5>
      </div>

      <div style="display: inline; float: right">
        <h3>Simple Databaseless Blog For Programmers</h3>
      </div>
      <hr style="border-color: rgb(218,165,32); margin-bottom: 0" />
    </div>


    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="?page=topic-1">Topic 1</a></li>
        <li><a href="?page=topic-2">Topic 2</a>
        <li><a href="?page=topic-3">Topic 3</a></li>
      </ul>
    </nav>
  </header>