<?php 
// neu $_POST['numberB'] ton tai thi gan $numberB bang $_POST['numberB'] - neu khong thi gan bang 0
$numberB = isset($_POST['numberB']) == true 
				? $_POST['numberB'] : 0;

$numberA = isset($_POST['numberA']) == true 
				? $_POST['numberA'] : 0;

$numberC = isset($_POST['numberC']) == true 
				? $_POST['numberC'] : 0;
				
// Tong do dai 2 canh luon lon hon do dai canh con lai
if($numberA + $numberB > $numberC 
	&& $numberA + $numberC > $numberB 
	&& $numberB + $numberC > $numberA){
	echo "do dai $numberA - $numberB - $numberC du hinh thanh 1 tam giac";
}else{
	echo "do dai $numberA - $numberB - $numberC khong hinh thanh 1 tam giac duoc";
}
 ?>
<!-- Tao hyperlink de tro lai trang method.php -->
<a href="method.php">back</a>
 <!-- <h1>Total: <?php echo $numberA+$numberB; ?></h1> -->