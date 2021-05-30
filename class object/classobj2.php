<?php
class btech{
public $mark=34;
public function student($newmark){
$this->$mark=20;
}

}


$obj=new btech();
$obj->student(20);
echo $obj->mark;
echo "<br>";
?>