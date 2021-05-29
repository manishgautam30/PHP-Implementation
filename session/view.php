<?php
session_start();
echo $_SESSION["stu"];   // to strat the function 
echo "<br>";
session_unset(); // to delete the session variables  only erases the values of the session variable but the variables are still there in the memory
echo "all sessions are ended!";

// or we can use this session_destroy();   but this even removes the variables including the value of the session variable










?>