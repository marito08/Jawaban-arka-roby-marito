<?php  
include('connect.php');
$product = $_POST['product'];
$cashier = $_POST['cashier'];
$category = $_POST['category'];
$price = $_POST['price'];

$sql = $pdo->prepare("INSERT INTO tbl_product VALUES ('','$product','$price','$category','$cashier')");
$sql->execute();

if($sql==TRUE){
	header('Location:index.php');
}


?>