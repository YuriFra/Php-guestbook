<?php
declare(strict_types=1);

class PostLoader {
    private const FILE_NAME = 'database.txt';
    /** @var Post[] */
    private array $posts;

    public function __construct()
    {
        $file = file_get_contents(self::FILE_NAME);
        $posts = unserialize($file, array('allowed_classes' => ['Post']));

        if (empty($posts)) {
            $this->posts = [];
        } else {
            $this->posts = $posts;
        }
    }

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

    public function savePost() {
        file_put_contents(self::FILE_NAME, serialize($this->posts));
    }

    /**
     * @return Post[]
     */
    public function getPosts(): array
    {
        //limit posts returns & return last 20
        $this->posts = array_reverse($this->posts);
        $this->posts = array_slice($this->posts, 0, 20);
        return $this->posts;
    }
}