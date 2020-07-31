<?php
declare(strict_types=1);

class Post {
    private string $title;
    private string $content;
    private string $author;
    private string $date;

    public function __construct(string $title, string $content, string $author)
    {
        $this->title = trim(htmlspecialchars($title));
        $this->content = trim(htmlspecialchars($content));
        $this->author = trim(htmlspecialchars($author));
        $this->date = (new DateTime())->format(('d-m-Y H:i'));
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

}