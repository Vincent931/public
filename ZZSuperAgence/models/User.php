<?php

class User {
    
    private $name;
    
    private $email;
    
    /**
     * @return string
     */
    public function getName() : ?string{
        return $this->name;
    }
    
     /**
     * @param $name string
     */
    public function setName($name) :void{
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getEmail() : ?string{
        return $this->email;
    }
    
     /**
     * @param $email string
     */
    public function setEmail($email) : void{
        $this->email = $email;
    }
}