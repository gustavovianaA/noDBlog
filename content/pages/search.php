<?php

if (isset($_GET['search'], $_GET['results'])) {
    $search = $_GET['search'];
    $results = $_GET['results'];

    $results = $results == '' ? false : $results;
} else {
    header('location: /index.php');
}

function listResults($results)
{
    if (!$results)
        return false;

    $results = explode(',', $results);
    $articles = [];
    foreach ($results as $result) {
        if (array_key_exists($result, ARTICLES))
            $articles[] = ARTICLES[$result];
    }

    return $articles;
}

?>

<h2>Resultados para "<?= $search ?>"</h2>

<?php
$articles = listResults($results);

if ($articles)
    listArticles($articles);
else
    echo 'Nada encontrado';
?>