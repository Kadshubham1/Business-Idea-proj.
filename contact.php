<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sharing business ideas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

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
            <input type="email" placeholder="your email" name="email" class="box">
            <input type="password" placeholder="password" name="password" class="box">

            <!-- <p> Forgot Your Password <a href="#">Click Here</a></p> -->
            <p> Don't Have An Account <a
                    href="http://localhost/sharingbusiness_ideas%20website%205/resister.php#">Create Now</a></p>
            <input type="submit" name="submit" value="Login Now" class="btn">
        </form>
    </header>
    <br>
    <br>



    <!-- contact -->
    <div id="card">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <h2>Contact Us</h2>
                            <p>Feel free to reach out to us. We are here to assist you.</p>

                            <form action="#" method="POST">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="Name" required>

                                <label for="email">Email:</label>
                                <input type="email" id="email" name="Email" required>

                                <label for="subject">Subject:</label>
                                <input type="text" id="subject" name="Subject" required>

                                <label for="message">Message:</label>
                                <textarea id="message" name="Message" rows="4" required></textarea>

                                <button type="submit" name="submit">Submit</button>
                            </form>


                            <!-- <h3>Our Address</h3>
                        <p>Location
                            Fatory Address:
                            Plot No. G 15, Jejuri MIDC, Tal- Purandar, Pune- 412303
                            <strong>contact@example.com</strong> or by phone at <strong>(123) 456-7890</strong>.
                        </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60502.966421210345!2d73.67601919043753!3d18.599476122293552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbc048041bef%3A0xd0c9eb5ac3c3dee5!2sHinjawadi%2C%20Pune%2C%20Pimpri-Chinchwad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1692881647042!5m2!1sen!2sin"
                            width="500px" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


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


    <script src="js/script.js"></script>
</body>

</html>

<?php

if(isset($_POST['submit'])){

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];



$sql =" INSERT INTO `contact`(`Name`, `Email`,`Subject`,`Message`) VALUES ('$Name','$Email',' $Subject','$Message')";


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