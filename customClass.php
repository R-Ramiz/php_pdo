<?php

include './include/db.php';


class user
{

// variable name must be same as table colume name

    public $First_name;
    public $last;
    public $fullname;

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
  print_r($row);
  // echo $row->rd();
}

/*
program: to get data in Object
OutPut:

user Object
(
    [First_name] => Ramiz
    [last] => Belim
    [fullname] => RamizBelim
    [id] => 1
)

*/

?>