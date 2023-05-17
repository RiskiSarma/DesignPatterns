<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Store
 *
 * @author ASUS
 */
class Store {
    private $name;
    private $city;
    private $country;
    private $category;
    
    public function __construct($name, $city, $country, $category)
    {
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
        $this->category = $category;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     * @return Store
     */
    public function setName($name)
    {
        $this->name =$name;
        return $this;
    }
         
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * @param mixed $name
     * @return Store
     */
    public function setCity($city)
    {
        $this->city =$city;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * @param mixed $name
     * @return Store
     */
    public function setCountry($country)
    {
        $this->country =$country;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @param mixed $name
     * @return Store
     */
    public function setCategory($category)
    {
        $this->category =$category;
        return $this;
    }
    
    public function clone(): Store
    {
        return new Store(
             $this->name,
             $this->city,
             $this->country,
             $this->category,
        );
    }
}
