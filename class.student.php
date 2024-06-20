<?php
class Student 
{
    const ID = 6660259101;
    public $school = "LRU";
    public function info() 
    {
        $data = self::ID . " : " . $this->school;
        return $data;
    }
}