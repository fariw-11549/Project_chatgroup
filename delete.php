<?php


include "config.php";
$del_id = $_GET['delete'];
if($_REQUEST['del_id'] != "") {
	$del_id = $_REQUEST['del_id'];
	$sql_del = "DELETE FROM chat WHERE id = '$del_id';";
	$query = mysqli_query($conn,$sql_del);
}
$query = mysqli_query($conn,$sql_del);
	
	if($query){
        header('Location: chatpage.php');
    }
?>