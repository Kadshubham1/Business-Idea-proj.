<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "business_idea";
// $dbname     = "indian_festival";


$conn = mysqli_connect($servername,$username , $password , $dbname);

if($conn)
{
    echo " Connection ok ";

}
else
{
    echo"Connection failed ";
}
?>