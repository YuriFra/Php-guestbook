<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <title>My guestbook</title>
</head>
<body>
<header>
    <h1 class="text-center my-4">Welcome my guestbook!</h1>
</header>
<main>
    <!-- posts -->
    <section>
        <h2 class="text-center">Recent articles</h2>
        <p class="mx-5 my-2">Article</p>
        <p class="mx-5 my-2">Article</p>
    </section>

    <!-- input new post -->
    <section class="mt-3">
        <form class="mx-5" method="post">
            <h3>Add a post to my guestbook</h3>
            <!-- input fields -->
            <div class="form-group w-50">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group w-50">
                <label for="content">Message
                    <textarea rows="4" name="content" class="form-control" required></textarea>
                </label>
            </div>
            <div class="form-group w-50">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</main>
</body>
</html>