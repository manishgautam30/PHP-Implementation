<?php
//error_reporting(0);

// $file_hand=fopen("textt.txt","r") or die("Unable to open");
// echo "hello world";


//  $file_hand=fopen("texttt.txt","w");
// if ($file_hand) {
// 	echo "file opened";
// }
// else{
// 	echo "file not open";
// }


// $file_hand=fopen("textt.txt","r") ;
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand). "<br>";
// fclose($file_hand);
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand)."<br>";
// echo fgets($file_hand);



// To read the content of file Line by Line

/*
$file_hand=fopen("textt.txt","r") ;
while(!feof($file_hand)){                     // means jab tk file ke end me ni pauchta hai tab tak
	$data = fgets($file_hand);
	echo $data."<br>";
}

echo fgets($file_hand);  // do not print any thing as it hs reached end of the file
*/

// To read the content of file character by character .
/*
$handle=fopen("textt.txt","r");
echo fgetc($handle)."<br>";
echo fgetc($handle)."<br>";
echo fgetc($handle)."<br>";
echo fgetc($handle)."<br>";
echo fgetc($handle)."<br>";
echo fgetc($handle)."<br>";
*/

/*
$handle=fopen("textt.txt", "r");
while(!feof($handle)){
echo fgetc($handle)."<br>";
}
*/


$handle=fopen("textt.txt", "r");

while(!feof($handle))
{
	$char=fgetc($handle);
	if($char=="\n"){
		echo "<br>";
	}else{
		echo $char;
	}

}
fclose($handle);  //must close the file just to free the space to be used by the other the other file





?>