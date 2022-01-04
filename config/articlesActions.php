<?php

function listArticles($articles)
{
    echo "<ul>";
    foreach ($articles as $article) {
        echo "<li><a href=\"?article=" . $article['link'] . "\">" . $article['title'] . "</a></li>";
    }
    echo "</ul>";
}

function listArticlesBySubject($articles, $subject)
{
    echo "<ul>";
    foreach ($articles as $article) {
        if ($article['subject'] == $subject)
            echo "<li><a href=\"?article=" . $article['link'] . "\">" . $article['title'] . "</a></li>";
    }
    echo "</ul>";
}

function listArticleByLink($articles, $link)
{
    foreach ($articles as $article) {
        if($article['link'] === $link)
            return $article;
    }
    return null;
}
