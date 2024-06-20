<?php
class product
{ 
    private $id; //attribute
    private $name; //attribute

    public function getId()
    { //getter method}
        return $this->id;
    }
    public function setId($id)
    { //setter methon
        $this->id = $id;
    }
    public function getName()
    { //setter methon
        return $this->name;
    }
    public function setName($name)
    { //setter methon
        $this->name = $name;
    }
    
    public function info()
    {
        $info = "";
        foreach (func_get_args() as $arg) {
            switch ($arg) {
                case 'id':
                    $info .= $this->id;
                    break;
                case 'name':
                    $info .= $this->name;
                    break;   
            }
        }
        echo $info;
    }
}