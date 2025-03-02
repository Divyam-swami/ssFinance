<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SS Finance</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/front/style.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"  />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark  py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">MyBrand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-capitalize mx-auto gap-lg-5">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">features</a></li>
        </ul>
      </div>
      <div class="position-relative">
      <button class="login-button" id="login-button"> 
        Login
      </button>
      <section id="login-box" class="position-absolute d-none">
   <!-- From Uiverse.io  by micaelgomestavares --> 
<form class="form">
    <div class="flex-column">
      <label>Email </label></div>
      <div class="inputForm">
        <svg height="20" viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><g id="Layer_3" data-name="Layer 3"><path d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z"></path></g></svg>
        <input type="text" class="input" placeholder="Enter your Email">
      </div>
    
    <div class="flex-column">
      <label>Password </label></div>
      <div class="inputForm">
        <svg height="20" viewBox="-64 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0"></path><path d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0"></path></svg>        
        <input type="loginpassword" class="input" placeholder="Enter your Password">
        <svg viewBox="0 0 576 512" height="1em" id="eye" xmlns="http://www.w3.org/2000/svg"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
      </div>
    
    <div class="flex-row">
      <div>
      <input type="checkbox">
      <label>Remember me </label>
      </div>
      <span class="span">Forgot password?</span>
    </div>
    <button class="sub">Sign In</button>
    <p class="p">Don't have an account? <span class="span">Sign Up</span>

    </p></form>
  </section>

</div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-dark mt-lg-5">
          <h1>Your Loan Partner</h1>
          <p class="lead mb-4">Fast, Easy, Reliable—Loans Made for You!</p>
          <button class="hero-button mt-4"><a href="#features" >Explore More</a><button>
        </div>
        <div class="col-lg-6  hero-img-section">
            <Img src="assets/images/heroimg.png">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5 bg-light">
    <div class="container">
      <h1 class="text-center mb-5">Why choose us</h1>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="feature-item p-4">
          <i class="fa-solid fa-trophy fa-2xl"></i>
            <h3>Fast & Easy Loan Approval</h3>
            <p>We offer a simple application process with quick approvals, so you get the funds you need without delays</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="feature-item p-4">
          <i class="fa-solid fa-handshake fa-2xl"></i>
            <h3>Trusted & Transparent</h3>
            <p>No hidden fees or surprises—just honest, reliable lending with clear terms and conditions</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="feature-item p-4">
          <i class="fa-solid fa-credit-card fa-2xl"></i>
            <h3>Loans for All Credit Types</h3>
            <p>Whether you have excellent or less-than-perfect credit, we work with you to find the best loan solution</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="">About Us</h1>
          <p class="lead">Founded in 2022 by <span style="font-size:30px; color:#0D4715;"><b>Shubham Swami</b></span>, SS Loans has been dedicated to providing seamless and reliable financial solutions. With a commitment to trust, transparency, and customer satisfaction, we have proudly served 50+ clients, helping them achieve their financial goals with ease.

At SS Loans, we understand that every financial journey is unique. Our expertise and personalized approach ensure that our customers receive the best loan solutions tailored to their needs. Whether it's personal loans, business financing, or other financial services, we strive to make borrowing simple and hassle-free.

</p>
        </div>
    
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form>
            <div class="row">
            <div class="mb-3 col-6">
              <input type="text" class="form-control" placeholder="Your First Name" id="fname" required>
            </div>
            <div class="mb-3 col-6">
              <input type="text" class="form-control" placeholder="Your Last Name" id="lname" required>
            </div>
        </div>
         <div class="row">
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Your Email" id="email" required>
            </div>
            </div>
            <div class="row">
            <div class="mb-3 col-5">
              <input type="text" class="form-control" placeholder="Your Designation" id="designation">
            </div>
            <div class="mb-3 col-7">
              <input type="number" class="form-control" placeholder="Your Phone no" id="phone">
            </div>

            </div>
        <div class="row">
            <div class="div mb-3">
                <textarea placeholder="Any Message" class="form-control" rows="5" id="message"></textarea>
            </div>
        </div>
            
          </form>
          <button type="submit" onclick="addContactData()" class="hero-button px-4 py-2">Send Message</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 bg-dark text-white text-center">
    <div class="container">
       <div class="col-12">      <p>&copy; 2023 MyBrand. All rights reserved.</p></div>
       <div class="col-6">
        <div class="socials">

        </div>
       </div>
    </div>
  </footer>



  <!-- success or faliure toast -->
  <!-- Bootstrap Toast -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="toastMessage" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body" id="toastText">
                
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

  <!-- success or faliure toast -->

  <!-- signupform -->
   <div class="position-absolute">
      <div></div>
   </div>
  <!-- signupform -->
 
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Custom JS -->
  <script src="scripts.js"></script>
<script>
    $(document).ready(function () {
  // Navbar background change on scroll
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.navbar').addClass('scrolled');
    } else {
      $('.navbar').removeClass('scrolled');
    }
  });

  // Smooth scrolling
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    const target = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);
  });
});

$('#login-button').click(function(){
    $('#login-box').fadeIn(20).toggleClass('d-none')
})

</script>
<script>
  function showToast(message, type) {
    let toastElement = $('#toastMessage');

    // Change toast color based on type
    if (type === "success") {
        toastElement.removeClass("bg-danger").addClass("bg-success");
    } else {
        toastElement.removeClass("bg-success").addClass("bg-danger");
    }

    // Update toast message
    $("#toastText").text(message);

    // Show Bootstrap toast
    let toast = new bootstrap.Toast(toastElement[0]);
    toast.show();
}
  function addContactData(){
    let fname=$('#fname').val()
    let lname=$('#lname').val()
    let email=$('#email').val()
    let designation=$('#designation').val()
    let phone=$('#phone').val()
    let message=$('#message').val()

    $.ajax({
      url:'http://localhost/finance/index.php/add_contact',
      type:'POST',
      data:{
       fname: fname,
        lname:lname,
        email:email,
        designation:designation,
        phone: phone,
        message:message
      },
      dataType:'json',
      success: function(response) {
                        $("#message").text(response.message);
                        if (response.status === "success") {
                            $("#contactForm")[0].reset();
                            showToast(response.message, "success");
                        }else{
                          showToast(response.message, "error");
                        }
                    },
                    error: function() {
                        showToast("An error occurred. Please try again.", "error");
                      }
    })
  }
</script>
</body>
</html>