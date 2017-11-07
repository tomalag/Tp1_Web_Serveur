<?php

/*class Foo 
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
    
    
    function aMemberFunc()
    {
        print 'Inside `aMemberFunc()`';
        echo $this->aMemberVar;
    }
    
}

$foo = new Foo;
echo $foo->aMemberVar;
*/

class Movie
{
    private $title = null;
    private $description = 'une description';
    private $duration = 120;
    private $language = '';
    private $type = '';
    private $producer = '';
    
    public function __construct($title ="")
    {
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title = "")
    {
        $this->title = $title;
    }
    
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = "")
    {
        $this->duration = $duration;
    }
    
    
    public function GetLanguage()
    {
        return $this->language;
    }
    
    public function setLanguage($language = "")
    {
        $this->language = $language;
    }
    
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setType($type = "")
    {
        $this->type = $type;
    }
    
    
    public function getProducer()
    {
        return $this->producer;
    }
    
    public function setProducer($producer = "")
    {
        $this->producer = $producer;
    }
}

$movie = new Movie("Mon film");
echo $movie->getTitle();
echo $movie->getDuration();
$movie->setDuration(90);
echo $movie->getDuration();