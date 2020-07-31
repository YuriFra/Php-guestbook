<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Post.php';
require 'PostLoader.php';

$postLoader = new PostLoader();
var_dump($postLoader);
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    foreach($_POST as $field => $value) {
            $value = trim(htmlspecialchars($value));
        }
    $postLoader->addPost(new Post($_POST['title'], $_POST['content'], $_POST['author']));
    $postLoader->savePost();
    var_dump($postLoader->getPosts());
    $posts = $postLoader->getPosts();
    foreach ($posts as $post => $output) {
        echo "{__toString($output)} <br>";
    }

}

require 'form.php';



