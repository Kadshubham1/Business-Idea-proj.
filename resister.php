<?php 
include "connection.php";

?>

<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        #resister {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
        }

        #resister .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #resister button {
            background-color: #1a324c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #b38c00;
        }
    </style>
</head>

<body>
<h2>Register Now</h2>
    <div id="resister">
        <div class="container">
            <form action="#" method="POST">
               
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name=" Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="Password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="Confirm_Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Register</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>

<?php

if(isset($_POST['submit'])){

$Name       = $_POST['Username'];
$Email      = $_POST['Email'];
$password   = $_POST['Password'];
$confirm_password = $_POST['Confirm_Password'];



$sql =" INSERT INTO `resister`(`Username`, `Email`,`Password`,`Confirm_Password`) VALUES ('','$Name','$Email',' $password','$confirm_password')";


$result= mysqli_query($conn,$sql);


if($result){
    
    echo "<script>
    alert('Data Insertrd Successfully!!');
   
    </script>";
}
else{
    die(mysql_error($conn));
}


}

?>


