<?php

echo "Hello World! \n";

class Movie
{
    private $name = null;
    
    private $duration = 120;
    
    private $description = "une description";

    public function __construct($name = "")
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
     public function setName($name = "")
    {
        $this->name = $name;
    }
    
     public function getDuration()
    {
        return $this->duration;
    }
    
     public function setDuration($duration = 120)
    {
        $this->duration = $duration;
    }
    
     public function getDescription()
    {
        return $this->description;
    }
    
     public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    
}

$movie = new Movie;

echo $movie->getName();
$movie->setName("Taxi 3");
echo $movie ->getName();
    