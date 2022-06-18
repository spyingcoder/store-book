<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p><b>Thank you for using Shop your Book!</b><p>
A BETTER WAY TO BUY BOOKS ONLINE<br>
Our Mission: To help local, independent bookstores thrive in the age of ecommerce.<br>
Our Vision: We work to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them survive and thrive. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/image1.png" alt="">
         <p>This is very big book library and all most full books are there. world wride all book stories is there i like it.. thankyou Shop Your Book. - jan 15,2022</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mariana</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>MY favorite online book website to buying a new books . thankyou Shop Your Book - march 16,2022.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mukul</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>This is very big book library and all most full books are there. world wride all book stories is there i like it.. thankyou Shop Your Book. - May 16,2022</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asila</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>MY favorite online book website to buying a new books . thankyou Shop Your Book - march 14,2022.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Genia</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>This is very big book library and all most full books are there. world wride all book stories is there i like it.. thankyou Shop Your Book. - may 13,2022</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carlos</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>MY favorite online book website to buying a new books . thankyou Shop Your Book - march 19,2022.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Geerti</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Owner of this web</h1>

   <div class="box-container">

        <div class="box">
         <img src="images/author.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nikita Payal</h3>
   </div>
   <div class="box">
         <img src="images/6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Saksham Gairola</h3>
      </div>

  

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>