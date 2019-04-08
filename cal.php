<?php 
include "src/functions.php";
$number1=$_POST['num1'];
$select=$_POST['select'];
$number2=$_POST['num2'];

$calculat = new functions($number1,$select,$number2);
$sum = $calculat->$number1;
$selection = $calculat->$select;
$num = $calculat->$number2;

?>
