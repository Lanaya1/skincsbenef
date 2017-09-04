<?php

foreach ($articles as $article) {
	// Suppresion du 's'
	$article['type'] = rtrim($article['type'], 's');
	
	require('./views/loop_article.phtml');
}

?>