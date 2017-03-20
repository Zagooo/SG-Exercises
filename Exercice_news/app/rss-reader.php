<?php

require_once '../vendor/autoload.php';
require_once '../logs/logger.php';
//require_once '../app/routing.php';

$connect[dns] = 'mysql:host=localhost; dbname=sg-news-db; charset=utf8';
$connect[name] = 'root';
$connect[pass] = '';

try {
    $db = new PDO($connect[dns], $connect[name], $connect[pass]);
} catch (PDOException $e) {
    die('Error connection: ' . $e->getMessage());
}

$que = "INSERT IGNORE INTO news(title,link,description,source,pub_date) VALUES (?,?,?,?,?)";
$sql = $db->prepare($que);

$feed = new SimplePie();
$feed->set_feed_url('https://rss.unian.net/site/news_ukr.rss');
$feed->enable_cache(false);
$feed->init();

$items = $feed->get_items();

foreach ($items as $item) 
{
    $sql->execute([
    $item->get_title(),
    $item->get_link(),
    $item->get_description(),
    $item->get_feed()->get_link(),
    $item->get_date("Y-m-d H:i:s"),
    ]);

    if(!empty($item->get_title())){
        $successLogger->info('At the' . ' ' . date("Y-m-d H:i:s") . ' ' . "this news was added"); 
    }else{
        $errorLogger->error("Wrong thing at" . ' ' . date("Y-m-d H:i:s"));
    }
}

      

     