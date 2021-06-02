<!-- 27-06-2021 file ke aur extra functions -->
<?php
//error_reporting(0);


/* $data=file_get_contents("mg.txt"); //if file is there it reads the data as a string content else gives false
echo $data."<br> <br>";
*/

// str_replace(search, replace, subject,optional)  sare occurrence ko change krta hai --> optional means kitni baar repalce wla task repeat kia hai 

/*$newData=str_replace("haddipa", "hellooo", "$data",$count);
echo $newData."<br>";
*/

/*
$newData=str_replace("\n", "<br>", "$data",$count);
echo $newData."   ".$count."<br>";
*/

// to store complete data as an array


/*
$data=file("mg.txt"); //if file is there it reads the data as a string content else gives false

// echo $data."<br> <br>"; gives error  Array to string conversion

echo $data[0]."<br> <br>"; // error  Array to string conversion
var_dump($data);
echo "<br>";
print_r($data);
echo "<br>";

foreach ($data as $dat ) {
	echo $dat."<br>";
}

*/

// echo file_exists("mg.txt"); // checks wether a file is present in server directory or not   --> output is 1 be cause the file is present.

// just to display the false or 0 part as do not dispaly the false or 0 simply just falls 
/*
if (file_exists("mgf.txt")) {
	echo "file is present in the server directory";
}else{
echo "file is not present in the server directory";
}
*/

// echo "The size of ng.txt file is ".filesize("mg.txt");


/*   
$fileDetials=stat("mg.txt");
print_r($fileDetials);
*/


/*
if(copy("mg.txt", "newfile.txt")){   // returns true and false
//   creates a file than paste the data if file is not present and if present then clears the earlier data nad paste the data.
echo "data copied";
}else{
	echo "data not copied due to some error!";
}
*/


// to delete a file
if(unlink("dest.txt")){   // if file is there than deletes else if file is not there then gives error
echo "file deleated";
}
else{
	echo "no such file with this name!";
}






?>