<?php

class Article{
    private $title;
    private $content;
    private $author;
    private $date;
    private $category;

    public function __construct(string $title, 
    string $content, string $author, string $date, string $category)
    {
        //title, content etc correspondent aux attributs de mon objet
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
        
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getDate(){
        return $this->date;
    }

    public function getCategory(){
        return $this->category;
    }



}

?>