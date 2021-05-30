<?php
class btech{
public $mark=34;
public function student($newmark){
$mark=$newmark;
echo $mark;
echo "<br>";
}
}
$obj=new btech();
$obj->student(20);
echo $obj->mark;
echo "<br>";
?>