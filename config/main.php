<?php
//Environment Constants
define('FOLDERS' , ['pages','articles']);

//Main Functions
function notFound(){
    require_once('content/pages/not-found.php');
}

//Require config files
require_once('config/articles.php');
require_once('config/articlesActions.php');

    