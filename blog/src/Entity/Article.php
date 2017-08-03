<?php

namespace Entity;

class Article
{
    /**
     *
     * @var int 
     */
    private $id;
    
    /**
     *
     * @var string 
     */
    private $title;
    
    /**
     *
     * @var string 
     */
    private $header;
    
    /**
     *
     * @var string 
     */
    private $content;
    
    
    
    
    /**
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * 
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * 
     * @return string
     */
    public function getHeader() {
        return $this->header;
    }
    
    /**
     * 
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * 
     * @param int $id
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @param string $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @param string $header
     * @return $this
     */
    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    /**
     * 
     * @param string $content
     * @return $this
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }


  

}

