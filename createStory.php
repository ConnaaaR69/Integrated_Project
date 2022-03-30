<?php
require_once 'classes/DBConnector.php';

try{
    $data = [
        'headline' => $_POST['headline'],
        'short_headline' => $_POST['short_headline'],
        'subtitle' => $_POST['subtitle'],
        'article' => $_POST['article'],
        'summary' => $_POST['summary'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'genre_id' => $_POST['genre'],
        'writer_id' => $_POST['author']
      ];
      
    Post::create('articles', $data);
    header("Location: index.php");
} 
catch (Exception $e) {
    die("Exception: ". $e->getMessage());
}
?>