<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- <link rel="stylesheet" href="style.css"> -->

   
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
<?php
   include("connection.php");

   $id = $_GET['id'];
   

?>

    <div id="resister">
        <div class="container">
            <form action="#" method="POST">

            <?php  
            $sql = "SELECT * FROM `resister` WHERE id ='$id'";
            $result= mysqli_query($conn,$sql);
            $data = mysqli_fetch_assoc($result);
            ?>
                <h2>UPDATE</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" value="<?php echo $data['Username']?>" id="username" name=" Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" value="<?php echo $data['Email']?>" id="email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" value="<?php echo $data['Password']?>" id="password" name="Password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" value="<?php echo $data['Confirm_Password']?>" id="confirm_password" name="Confirm_Password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="Update">Update</button>
                </div>

            </form>
        </div>
    </div>
</body>


   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>




<?php 


// include("connection.php");


if(isset($_POST['Update'])){
    
    $Name      =  $_POST['Username'];
    $Email      =  $_POST['Email'];
    $Password    =  $_POST['Password'];
    $Confirm_Password   =  $_POST['Confirm_Password'];
  


$sql = "UPDATE `resister` SET   `Username`=' $Name',`Email`='$Email',`Password`='$Password',`Confirm_Password`='$Confirm_Password' WHERE id ='$id'";
$result = mysqli_query($conn,$sql);


if($result)
{
    echo "Record Updated";
}
else{
    echo"Failed to update";
}

}
?>