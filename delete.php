<?php
include 'connection.php';


$id= $_GET['id'];

$sql="DELETE FROM resister WHERE id ='$id'";
$result= mysqli_query($conn,$sql);

if($result){

}
   else{
        die(mysql_error($conn));
   }
    
?>


