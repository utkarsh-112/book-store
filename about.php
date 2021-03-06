<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/reviews.css">

   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <style>

   </style>
</head>

<body>

   <?php include 'header.php'; ?>

   <div class=" heading">
      <h3>about us</h3>
      
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Choosing Bookly can allow you to purchase the best selling books which are being written by some of the most popular authors. Apart from the numerous advantages of choosing us, some of the most important ones are-</p>
            <p>100% original books, Books available at affordable prices, Attractive discounts on different books, Cash on Delivery facility available and many more</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">client's reviews</h1>

      <div class="customer-feedback">
         <div class="container text-center">
            <div class="row">
               <div class="col-sm-offset-2 col-sm-8">
                  <div>
                     <h2 class="section-title">What Clients Say</h2>
                  </div>
               </div><!-- /End col -->
            </div><!-- /End row -->

            <div class="row">
               <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                  <div class="owl-carousel feedback-slider">

                     <!-- slider item -->
                     <div class="feedback-slider-item">
                        <img src="//c2.staticflickr.com/8/7310/buddyicons/24846422@N06_r.jpg" class="center-block img-circle" alt="Customer Feedback">
                        <h3 class="customer-name">Lisa Redfern</h3>
                        <p>A lot of my friends were buying plans from PolicyBazar and asked me to do so as well, I am so happy that I could get the best plans shown by the team, the team is very professional and help</p>
                        <span class="light-bg customer-rating" data-rating="5">
                           5
                           <i class="fa fa-star"></i>
                        </span>
                     </div>
                     <!-- /slider item -->

                     <!-- slider item -->
                     <div class="feedback-slider-item">
                        <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="center-block img-circle" alt="Customer Feedback">
                        <h3 class="customer-name">Cassi</h3>
                        <p>Good shop, one would certainly get the required books, if not immediately they will get it soon. Good staff. Great service.</p>
                        <span class="light-bg customer-rating" data-rating="4">
                           4
                           <i class="fa fa-star"></i>
                        </span>
                     </div>
                     <!-- /slider item -->

                     <!-- slider item -->
                     <div class="feedback-slider-item">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" class="center-block img-circle" alt="Customer Feedback">
                        <h3 class="customer-name">Md Nahidul</h3>
                        <p>Dear All,This Bookstore is a International label. I love it. All type of books are available here. if you required any book please go ahead and try this Store.love it.</p>
                        <span class="light-bg customer-rating" data-rating="5">
                           5
                           <i class="fa fa-star"></i>
                        </span>
                     </div>
                     <!-- /slider item -->

                  </div><!-- /End feedback-slider -->

                  <!-- side thumbnail -->
                  <div class="feedback-slider-thumb hidden-xs">
                     <div class="thumb-prev">
                        <span>
                           <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/451270/profile/profile-80.jpg" alt="Customer Feedback">
                        </span>
                        <span class="light-bg customer-rating">
                           5
                           <i class="fa fa-star"></i>
                        </span>
                     </div>

                     <div class="thumb-next">
                        <span>
                           <img src="https://res.cloudinary.com/hnmqik4yn/image/upload/c_fill,fl_force_strip,h_128,q_100,w_128/v1493982718/ah57hnfnwxkmsciwivve.jpg" alt="Customer Feedback">
                        </span>
                        <span class="light-bg customer-rating">
                           4
                           <i class="fa fa-star"></i>
                        </span>
                     </div>
                  </div>
                  <!-- /side thumbnail -->

               </div><!-- /End col -->
            </div><!-- /End row -->
         </div><!-- /End container -->
      </div><!-- /End customer-feedback -->

   </section>

   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   <script src="js/reviews.js"></script>

</body>

</html>