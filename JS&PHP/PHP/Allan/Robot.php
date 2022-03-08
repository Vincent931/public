<?php 

class Robot
{
    private $name;
    private $number;
    private $moral;

    public function __construct($name = "VX", $number = -1, $moral = -1)
    {
        if($number == -1) {
            $this->number = $this->randon(1, 9999);
        }
        if($moral == -1){
            $this->moral = $this->randon(1, 3);
        } else {
            $this->moral = $moral;
        }
        
        $this->name = $name."-".$this->number;
        
    }


    private function randon(int $min, int $max)
    {
        return rand($min, $max);
    }

    public function display()
    {
        echo("Salut, humain. Je suis ".$this->name."<br>");
        
        $date = getdate();
        echo("Nous sommes le ".$date['mday']." ".$date['mon']." ".$date['year'].", il est ".$date['hours'].":".$date['minutes'].":".$date['seconds']."<br>");
        
        $r = $this->randon(1, 10);
        $p = $r % 2 == 1 ? "impair" : "pair";
        echo "J'ai choisi le nombre ".$r.". C'est un nombre ".$p."<br>";
        echo "Mon nom à l'envers s'écrit ".strrev($this->name).". Ah. Ah. Ah."."<br>";

        
        $tue = $this->moral == 1 ? "<span style='color:red'> Extermination ! Extermination ! </span>":"Vous voulez un café ?";
        echo $tue;
    }

    public function setMoral(int $moral)
    {
        $this->moral = $moral;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    

    
}