<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style2.css">

</head>
<body>

<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">MINI CAFE.</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="package.php">Menu</a>
        <a href="book.php">Buy now</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars">
        
    </div>
</section>
<!-- header section ends-->

<div class="heading" style="background:url('https://media.istockphoto.com/id/1150767833/photo/business-on-the-go.jpg?s=1024x1024&w=is&k=20&c=x-TrqfjPv-q78kraI2RDwGtajVa9oeTbUH0OAYlwnc8=') no-repeat ">
    <h1>book now</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
    <h1 class="heading-title">book your coffee!</h1>
    <form action="book_form.php" method="post" class="book_form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="Enter your phone no" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>item name :</span>
                <input type="text" placeholder="Place the item that you want" name="item" required>
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="How many items" name="item_no">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- booking section ends  -->


<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Menu</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Buy now</a>
        </div>
        <div class="box">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
            <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms of Policy</a>
        </div>
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> ankana123@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> Kolkata, India - 700001</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fas fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fas fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fas fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fas fa-linkedin"></i> Linkedin</a>
        </div>
    </div>
    <div class="credit">Creadited by <span>codebrokerrose. web designer</span>| all rights reserved!</div>
</section>
<!-- footer section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="script.js"></script>

</body>
</html>