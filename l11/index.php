<?php 
$username = "  tran huu thien  ";
$age =35;
// echo $username . $age;
// echo sqrt(64);
// var_dump(trim($username));
$arr = ["numberOne" => 1, 3, "name", "saysomething"=>"something"];

// for ($i=0; $i < count($arr); $i++) { 
// 	var_dump($arr[$i]);
// 	echo "<br>";
// }
foreach ($arr as $key => $value) {
	var_dump($key . " => " . $value);
	echo "<br>";
}

 ?>