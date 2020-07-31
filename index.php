<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Post.php';
require 'PostLoader.php';
require 'form.php';

$postLoader = new PostLoader();
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $postLoader->addPost(new Post($_POST['title'], $_POST['content'], $_POST['author']));
    $postLoader->savePost();
}

if (!empty($postLoader->getPosts())) {
    $posts = $postLoader->getPosts();
    foreach ($posts as $post) {
        echo "<div class='mx-5 my-2'><h4>{$post->getTitle()}</h4>
        <p>{$post->getContent()}</p>
        <p><strong>{$post->getAuthor()}</strong> - {$post->getDate()}</p></div><hr>";
    }
}
require 'form2.php';



