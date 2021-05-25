<html>
<head>
	<title>Array Functions</title>
</head>
<body>
<?php
$age=array("happy"=>21,"rahul"=>25,"mohan"=>26,"kaka"=>63,"Harry"=>99);
arsort($age);  // values ke according descending way me sort krta hai.
print_r($age);
echo "<br>";

asort($age);  // values ke according ascending way me sort krta hai
print_r($age);
echo "<br>";

krsort($age);  // values ke according descending way me sort krta hai.
print_r($age);
echo "<br>";

ksort($age);  // values ke according ascending way me sort krta hai
print_r($age);
echo "<br>";

$files=array("tm10.txt","Tm5.txt","tm8.txt","tm15.txt","tm4.txt","hm18.txt");
natsort($files);  // sort when the value are with characteradn names, not case sensitive
print_r($files);
echo "<br>";

natcasesort($files);  // sort when the value are with characteradn names, but is case sensitive.
print_r($files);
echo "<br>";

$marks=array(52,65,65,58,56,60,93,96,91,65,12,48,52,64,62,64,52,16,28);

rsort($marks);  // descenidng order for indexed array based of values 
print_r($marks);
echo "<br>";

sort($marks);  // ascenidng order for indexed array on the behaf of values
print_r($marks);
echo "<br>";

$roll=array(100,101,102,103,104,105,106,107,108,109,110,111,112);
$roll[1]=151;
$roll[]=991; //inserts the element on the last index of the array
array_push($roll, 911); //it also inserts the element on the last index of the array
array_unshift($roll,99999); //inserts the element on the first index of the array
print_r($roll);
echo "<br>";
array_pop(); // last wale element ko delete krta hai
print_r($roll);
echo "<br>";

print_r(array_chunk($roll, 3));
echo "<br>";
echo "------------------- Combine and Merge ----------------------";
echo "<br>";

$key=["name1","name2","name3"];
$val=[11,12,13];
// for merge and combine ther must be 3 array and there must be equa no of elements in both arrays
// In first there must be String type elements and in 2nd array the can be any types of elements .
print_r(array_combine($key, $val));
echo "<br>";
echo "<br>";
 print_r(array_merge($key, $val));
echo "<br>";

$arr=[1,2,3,4,5,6,7,8,9,10]; //do not required because 👇
$arr=array_fill(3, 5, 911); // this creates a new array
print_r($arr);
echo "<br>";
 print_r(array_keys($arr)); //prints the keys
echo "<br>";
echo "<br>";
 print_r(array_search(/*element here*/12 ,/*array here*/$val)); //prints the keys
echo "<br>";
echo "<br>";

$arr2d=["frontend"=>["html","css","js"],"backend"=>["nodejs","reactjs","mongodb"],"weblanguages"=>["angular","expressjs"]];
print_r($arr2d);
echo "<br>";
foreach ($arr2d as $tech => $parts) {
	echo "<h1>$tech</h1>";
	foreach ($parts as $parts) {
		echo "<div>$parts</div>";
		
	}
}

?>

</body>
</html>
