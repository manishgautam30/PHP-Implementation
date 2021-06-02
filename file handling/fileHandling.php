<?php


/*
$handle=fopen("mgg.txt", "a+");
if($handle){
	echo "File created Successfully <br> <br>";
    fwrite($handle, "Hello world my name is manish, Hey there! ","21");
}else{
	echo "Fle not created";
}

echo file_get_contents("mgg.txt");
*/

/*
$handle=fopen("mgg.txt", "r+");
$data=fread($handle,filesize("mgg.txt"));
echo $data; 
*/


if(file_put_contents("newfile.txt", "my name is manish gautam buddy", FILE_APPEND )){ // it clears earlier data but with FILE_APPEND flag the data entered is added.
echo "data entered";
}else{
	echo "data not inserted";
}

?>