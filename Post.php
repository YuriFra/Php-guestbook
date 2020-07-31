<?php
declare(strict_types=1);

class Post {
    private string $title;
    private string $content;
    private string $author;
    private string $date;

    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = (new DateTime())->format(('d-m-Y H:i'));
    }
}