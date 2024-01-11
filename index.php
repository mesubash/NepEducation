<?php

include "dbconnect.php";
session_start();
$email=$_SESSION['Login'];
if($email==true){}
else{
    ?>
    <script>
        alert("session is expired you need to login again");
        window.location='loginform/login.php';
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NepEducation: where learning and courses converse</title>
    <link rel="stylesheet" href="CSS/Style.css">

    <!-- Googlefont (montserrat) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Libre+Bodoni:ital,wght@1,500&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


<!-- swiperjs css link -->

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
<!-- Iconscout cdn -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="Index.html"><h2>NepEducation</h2></a>
            <ul class="nav_menu"> 
             <li><a href="Index.php">Home</a></li>
             <li><a href="About.html">About</a></li>
             <li><a href="Courses.html">Courses</a></li>
             <li><a href="Contact.html">Contact</a></li>
             <li><a href="LoginForm/logout.php" target="_blank">Log out</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- end of nav -->
   
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Future Of Learning, Future Of Nepal</h1>
                <p>
                    "Award-Winning academic delivery platform and comprehensive interactive content with real Tutor Support for the nepali curriculum."
                </p>
                <a href="Courses.html" target="_blank" class="btn btn-primary">Get Started</a>
            </div>

                <div class="header_rigth">
                    <div class="header_right-image">
                        <img src="images/header.svg" alt="">
                    </div>

                </div>
            
        </div>
    </header>

    <!-- End of Header -->
    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Categories</h1>
                <p>Ace your exams and become a stellar with our Interactive Videos, Diagnostic Reports, Testpapers and Tutor Support. Harness the power of modern-day technology to succeed in your Career journey!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="categories_right">
             <artical class="category">
                 <span class="categories_icon"><i class="uil uil-bitcoin-circle"></i></span>
                 <h5>Blockchain</h5>
                 <p>Blockchain is a system of recording information.</p>
             </artical>
             <artical class="category">
             <span class="categories_icon"><i class="uil uil-palette"></i></span>
             <h5>Graphic Design</h5>
             <p> Craft where professionals create visual content to communicate messages. </p>
         </artical>

         <artical class="category">
            <span class="categories_icon"><i class="uil uil-dollar-sign-alt"></i></span>
            <h5>Finance</h5>
            <p> Describing the study and system of money, investments, and other financial instruments.</p>
        </artical>

        <artical class="category">
            <span class="categories_icon"><i class="uil uil-megaphone"></i></span>
            <h5>Marketing</h5>
            <p>Activities a undertakes to promote the buying or selling of a product or service.</p>
        </artical>

        <artical class="category">
            <span class="categories_icon"><i class="uil uil-music-note"></i></span>
            <h5>Music</h5>
            <p>Practice playing notes, chords, and scales on your instrument.</p>
        </artical>

        <artical class="category">
            <span class="categories_icon"><i class="uil uil-money-insert"></i></span>
            <h5>Business</h5>
            <p> Body that seek profits by providing goods or services in exchange for payment. </p>
        </artical> 

            </div>
        </div>
    </section>
    <!-- End of categories -->

    <!-- Courses start -->
   

    <section class="courses">
        
        <h2>Our Popular Courses</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="courses_image">
                    <img src="./images/course1.jpg" alt="First courses">
                   </div>
                    <div class="course_info">
                    <h4>Web Development</h4>
                    <p>Learn How to hone your skill and develop some of the finest web application website for the Internet or an intranet.</p>
                   

                <a href="Courses.html" class="btn btn-primary">Learn More</a>
            </div>
            </article>

            <article class="course">
                <div class="courses_image">
                    <img src="./images/course2.jpg" alt="First courses">
                </div>
                <div class="course_info">
                <h4>Digital Marketing</h4>
                <p>After listening to what marketers need, we have been building solutions to help businesses of all sizes prepare for what comes next</p>
            
                
                <a href="Courses.html" class="btn btn-primary">Learn More</a>
            </div>
            </article>

            <article class="course">
                <div class="courses_image">
                    <img src="./images/course3.jpg" alt="First courses" id="Thirdimg">
                </div>
            <div class="course_info">
                <h4>Data Science</h4>
                <p>Demanded skill in many industries worldwide, Explore data science courses with Python, statistics, machine learning, and more.</p>
            
                
                <a href="Courses.html" class="btn btn-primary">Learn More</a>
            </div>
            </article>
    
        </div>
    </section>
    <!-- End of Courses -->


<!-- Frequently Asked Question -->

<section class="faqs">
    <h2>Some Frequently Asked Questions</h2>
    <div class="container faqs_container">
        <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>How do I know right courses for me?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>Do I get certificate for every course I take?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>Refundable if the course isn't worth my money?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>Will I have lifetime access to course I purchese?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>Will NepEducation assist me to get my first job?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>What are your payment option?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>What are the requirement to start? </h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

    <article class="faq">
        <div class="faq_icon"><i class="uil uil-plus"></i></div>
        <div class="question_answer">
            <h4>Do I get all source code from project?</h4>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dignissimos neque, consequuntur voluptatum maiores sit in vel ullam consectetur obcaecati, voluptate saepe. Consequuntur, voluptatibus. Quaerat, libero nostrum. Modi, dolores nam.</p>
        </div>
    </article>

  
    </div>
</section>
<!-- Frequently asked question end -->

    <!-- Students Review -->
    <section class="container testimonials_container swiper mySwiper">
        <h2 id="testimonial_head">Our Student's Word</h2>
        <div class="swiper-wrapper" >

            
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Yasoda Biswakarma</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam commodi cupiditate minima sunt ad debitis ducimus iste, maxime deserunt.</p>
                </div>

            </article>
       

        
        <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/avatar2.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Tul Bdr Biswakarma</h5>
                    <small>Web Develper</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam commodi cupiditate minima sunt ad debitis ducimus iste, maxime deserunt.</p>
                </div>

            </article>
     

            
                <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/avatar3.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Suresh Biswakarma</h5>
                    <small>Data Scienctist</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam commodi cupiditate minima sunt ad debitis ducimus iste, maxime deserunt.</p>
                </div>

            </article>
      

           
     
        <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/avatar4.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Santi lohar</h5>
                    <small>SEO</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam commodi cupiditate minima sunt ad debitis ducimus iste, maxime deserunt.</p>
                </div>

            </article>
        


        
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./images/avatar5.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>Tulasi Biswakarma</h5>
                    <small>Mern Develper</small>
                </div>
                <div class="testimonial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quisquam commodi cupiditate minima sunt ad debitis ducimus iste, maxime deserunt.</p>
                </div>

                </article>
            
        
            </div>
            <!-- <div class="swiper-pagination"></div>  -->
    </section>

<!-- End of Testimonial section -->


<!-- Start of Footer -->

<footer>
<div class="container footer_container">
<div class="footer_1">
    <a href="Index.html"><h4>NepEducation</h4></a>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, accusamus.</p>
</div>

<div class="footer_2">
<h4>Permalinks</h4>
<ul class="permalinks">
    <li><a href="Index.html">Home</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="Courses.html">Courses</a></li>
    <li><a href="Contact.html">Contact</a></li>
    <li><a href="PHP/Register.php">Register</a></li>
</ul>
</div>

<div class="footer_3">
    <h4>Privacy</h4>
    <ul class="privacy">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms And Condition</a></li>
        <li><a href="#">Refund Policies</a></li>
    </ul>
</div>

<div class="footer_4">
<h4>Contact Us</h4>
<div>
    <p>+0000-111-222</p>
    <p>subashsdhami@gmail.com</p>
    </div>
    <ul class="footer_socials">
        <li>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-instagram-alt"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
        </li>
        
    </ul>

</div>

</div>
<div class="footer_copyright">
    <small>@Copyright &copy;<!-- For copyright emoji -->NepEducation PVT.
    </small>
</div>
  </footer>
  <!-- End of Footer -->

 
 
 
 <!-- Js linking part -->
 
 
  <!-- javascript file -->
 <script src="./Javascript/Main.js" ></script>

<!-- swiperjs javascript  -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    // Auto moves the slides
    autoplay:{
        delay:2500,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

// when view on the phone (Responsive) and window width >=600
breakpoint:{
    600: {
        slidesPerView: 1,
    }
},


  });
</script>

</body>
</html>