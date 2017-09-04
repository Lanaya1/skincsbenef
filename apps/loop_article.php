<?php

foreach ($articles as $article) {
	// Suppresion du 's'
	$article['type'] = substr($article['type'], 0, -1);
	require('./views/loop_article.phtml');
}

?>