<?php

require_once('Article.php');

$article = new Article;
$article -> getDate();
Article::getCounter();
echo $article -> name;
$article->name = "Nouveau nom";
echo $article->name;
isset($article -> name);
$str = serialize($article);
unserialize($str);
$article();