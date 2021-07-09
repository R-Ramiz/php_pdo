<?php

include './include/db.php';


class user
{

// variable name must be same as table colume name

    public $First_name;
    public $last;
    public $fullname;

    private $recodes = [];

    public function __set($name, $value)
    {
        $this->recodes[$name]=$value;
    }

    public function __get($name)
    {
        if(array_key_exists($name,$this->recodes))
        {
            return $this->recodes[$name];
        }
    }

    public function ToArray()
    {
        return $this->recodes;
    }

    public function __construct()
    {
         $this->fullname=$this->First_name."".$this->last;
        
    }

    public function rd()
    {
        return "dddsdfsd";
    }
}

$stmt = $db->query('SELECT * FROM users');
echo "<pre>";
$stmt->setFetchMode(PDO::FETCH_CLASS,"user");
while($row=$stmt->fetch())
{
  print_r($row->ToArray());
  
}

/*
program: to get data in obj and array
OutPut:



*/

?>