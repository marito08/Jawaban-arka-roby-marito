<?php  
include('connect.php');
$id = $_POST['id'];
$product = $_POST['product'];
$cashier = $_POST['cashier'];
$category = $_POST['category'];
$price = $_POST['price'];

$sql = $pdo->prepare("UPDATE tbl_product set name='$product',price='$price', id_category='$category', id_cashier='$cashier' WHERE id=$id");
$sql->execute();

if($sql==TRUE){
	header('Location:index.php');
}


?>
