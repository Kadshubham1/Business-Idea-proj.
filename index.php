<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sharing business ideas</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header -->
<header class="header">
    <a href="#" class="logo"><i class="fa fa-business-time fa-beat" style="color: #3e41fa;"></i> Business Idea</a>

    <nav class="navbar">
        <a href="http://localhost/sharingbusiness_ideas%20website%205/index.php">home</a>
        <a href="http://127.0.0.1:5500/about.html">about</a>
        <a href="http://127.0.0.1:5500/product.html">product</a>
        <a href="http://127.0.0.1:5500/blogsection.html">Blogs</a>
        <a href="http://localhost/sharingbusiness_ideas%20website%205/contact.php">contact</a>
    </nav>

    <div class="icons">
        <div class="fa fa-bars" id="menu-btn"></div>
        <div class="fa fa-search" id="search-btn"></div>
        <div class="fa fa-user" id="login-btn"></div>
        

    </div>
    <form class="search-form">
        <input type="search" id="search-box" placeholder="Search here.....">
        <label for="search-box" class="fa fa-search"></label>
    </form>



    <form action="#" method="POST" class="login-form">
        <h3>login now</h3>
        <input type="email"placeholder="your email" name="email" class="box">
        <input type="password"placeholder="password" name="password" class="box">

        <!-- <p> Forgot Your Password <a href="#">Click Here</a></p> -->
        <p> Don't Have An Account <a href="http://localhost/sharingbusiness_ideas%20website%205/resister.php#">Create Now</a></p>
        <input type="submit" name="submit" value="Login Now" class="btn">
    </form>
</header>


<!-- home  baner-->

<section class="home" id="home">
    <div class="content">
        <h3>Marketing<span>and</span>Sales Strategy:</h3>
        <p>Describe how you plan to market and sell your product or service.
            Include details about your promotional activities, sales channels, and customer acquisition strategy.</p>

        <a href="#" class="btn">visit now</a>
    </div>

</section>

<!-- our feature -->
<section class="feature" id="feature">
    <h1 class="heading">our <span>features</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="https://wallpaperaccess.com/full/5840782.jpg" alt="">
            <h3>Problem Statement:</h3>
            <p>
                Clearly articulate the problem or need your business addresses.

            </p>
            <a href="https://www.betterup.com/blog/problem-statement" class="btn">read more</a>

        </div>

        <div class="box">
            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/businessman-with-business-idea-4873855-4081457.png" alt="">
            <h3>Marketing and Sales Strategy:</h3>
            <p>
                Explain how you plan to promote and sell your product or service.
            </p>
            <a href="https://www.linkedin.com/business/sales/blog/sales-and-marketing/the-3-b2b-sales-and-marketing-structural-gaps-hampering-business" class="btn">read more</a>

        </div>
        <div class="box">
            <img src="https://i.pinimg.com/736x/52/8f/2b/528f2b13fd1b95808933d21ef5684300.jpg" alt="">
            <h3>Solution:</h3>
            <p>
                Explain your business solution and how it addresses the identified problem.
            </p>
            <a href="#" class="btn">read more</a>

        </div>

    </div>
</section>


<!-- footer -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> Business Idea  <i class="fa fa-business-time fa-beat"style="color: #3e41fa;"></i></h3>   
            <a href="#" class="logo"><i class="" ></i> </a>
            <p>Follow For The More update</p>

            <div class="share">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook"></a>
                
                <!-- <i class="fa fa-instagram" aria-hidden="true"></i> -->
            </div>
        </div>


        <div class="box">
            <h3>Contact InFo</h3>   

            <a href="" class="links"><i class="fa fa-phone"></i>+91 8999624212</a>
            <a href="" class="links"><i class="fa fa-envelope"></i>info@gmail.com</a>
            <a href="" class="links"><i class="fa fa-map-marker"></i>Pune</a>
           
        </div>

        <div class="box">
            <h3>Quick Links</h3>   
            <a href="http://localhost/sharingbusiness_ideas%20website%205/index.php" class="links"><i class="fa fa-arrow-right"></i>Home</a>
            <a href="http://127.0.0.1:5500/about.html" class="links"><i class="fa fa-arrow-right"></i>About</a>
            <a href="http://127.0.0.1:5500/product.html" class="links"><i class="fa fa-arrow-right"></i>Product</a>
            <a href="http://127.0.0.1:5500/blogsection.html" class="links"><i class="fa fa-arrow-right"></i>Bolgs</a>
        </div>

        
        <div class="box">
            <h3>Newsletter</h3>   
            <p>Suscribe for more update</p>
            <input type="email" placeholder="Your Email" class="email">
            <input type="submit" value="Suscribe" class="btn">

        </div>


    </div>

</section>



   
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>


<?php 
include "connection.php";

?>

<?php

if(isset($_POST['submit'])){

$email = $_POST['email'];
$password = $_POST['password'];




// $sql ="INSERT INTO `login`(`email`,`password`) VALUES ('$email','$password')";


// $result= mysqli_query($conn,$sql);

$sql =" INSERT INTO `login`(`email`,`password`) VALUES ('$email',' $password')";


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