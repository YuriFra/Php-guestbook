<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
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
