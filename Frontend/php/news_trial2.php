<?php
composer jcobhams/newsapi
use jcobhams\NewsApi\NewsApi;

$newsapi = new NewsApi($your_api_key);

# /v2/everything
$all_articles = $newsapi->getEverything($q, $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);
?>