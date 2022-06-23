<?php

//model = une ligne dans un tableau. 
//les colonnes

    class Article {

    /** 
     * @var int $id 
     */
    private int $id;

    /** 
     * @var string|null $title 
     */
    private string $title;

    /**
     * @var string $content
     */
    private string $content;

    /**
     * @var string|null $published_date
     */
    private string $date_published;

    /**
     * @var string|null $published_date
     */
    private string $user_id;

    
    /**
     * Artcile constructor
     */
    public function __construct(){
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPublishedDate(): ?string
    {
        
        $date = date_create($this->date_published);        
        return date_format($date, 'd/m/y');

    }

    /**
     * @param string $published_date
     */
    public function setPublishedDate(string $published_date): void
    {
        $this->date_published = $date_published;
    }

        
    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $id
     */
    public function setUserId(int $user_id): void
    {
        $this->id = $user_id;
    }
        
        
}
