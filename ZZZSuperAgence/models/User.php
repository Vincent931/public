<?php
class User {
    
    public $name;
    public $firstName;
    public $email;
    public $password;
    public $role;
    public $createdAt;
    public $updatedAt;
    
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
    public function getFirstName() : ?string{
        return $this->firstName;
    }
    
     /**
     * @param $name string
     */
    public function setFirstName($firstName) :void{
        $this->firstName = $firstName;
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
    public function setPasswordl($password) : void{
        $this->password = $password;
    }
    
    /**
     * @return string
     */
    public function getPassword() : ?string{
        return $this->password;
    }
    
     /**
     * @param $email string
     */
    public function setEmail($email) : void{
        $this->email = $email;
    }
    
    /**
     * @return string
     */
    public function getRole() : ?string{
        return $this->role;
    }
    
     /**
     * @param $role string
     */
    public function setRole($role) :void{
        $this->role = $role;
    }
    
    /**
     * @return string
     */
    public function getCreatedAt() : ?string{
        return $this->createdAt;
    }
    
     /**
     * @param $createdAt string
     */
    public function setCreatedAt($createdAt) :void{
        $this->createdAt = $createdAt;
    }
    /**
     * @return string
     */
    public function getUpdatedAt() : ?string{
        return $this->updatedAt;
    }
    
     /**
     * @param $updatedAt string
     */
    public function setUpdatedAt($updatedAt) :void{
        $this->updatedAt = $updatedAt;
    }
}