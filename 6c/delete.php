<?php  
include('connect.php');
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM tbl_product WHERE id=$id");
$sql->execute();
if($sql == TRUE){
header('Location:index.php');
}

?>