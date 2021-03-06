<?php
include 'connection.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- google fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- AOS  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- glide  -->
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
    <!-- css -->
    <link rel="stylesheet" href="./styles.css" />

    <title>Portfolio</title>
    
</head>

<body>

    <header id="home" class="header">
        <!-- Navigation -->
        <nav class="nav">
          <div class="navigation container">
            <div class="logo">
              <h1>Developer<span>.</span></h1>
            </div>
  
            <div class="menu">
              <div class="top-nav">
                <div class="logo">
                  <h1>Developer<span>.</span></h1>
                </div>
                <div class="close">
                  <i class="fas fa-times"></i>
                </div>
              </div>
  
              <ul class="nav-list">
                <li class="nav-item">
                  <a href="#home" class="nav-link scroll-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link scroll-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="#services" class="nav-link scroll-link">Services</a>
                </li>
                <li class="nav-item">
                  <a href="#skills" class="nav-link scroll-link">Skills</a>
                </li>
            
                <li class="nav-item">
                  <a href="#contact" class="nav-link scroll-link">Contact</a>
                </li>
              </ul>
            </div>
  
            <div class="hamburger">
              <i class="fas fa-bars"></i>
            </div>
          </div>
        </nav>
        <!-- Hero -->
        <div class="hero">
          <h3>Hello, my name is</h3>
          <h1>Pragati Naikare</h1>
          <h4>And I'm a <span id="type1"></span></h4>
          <a href="imgg/cv.pdf" class="btn">Download CV</a>
        </div>
  
        <img class="banner" src="#" alt="" />
  
        <div class="icons">
          <span><a href="https://github.com/pragatinaikare" target="_blank"><i class="fab fa-github"></i></a><span>
          <span><a href="https://www.instagram.com/pragati_naikare/" target="_blank"><i class="fab fa-instagram"></i></a></span>
          <span><a href="https://www.linkedin.com/in/pragati-naikare-7a96151a9/" target="_blank"><i class="fab fa-linkedin-in"></i></a></span>
        </div>
      </header>
  
      <!-- Main -->
      <section class="section about" id="about">
        <div class="title">
          <h1>About me</h1>
        </div>
  
        <div class="about-center container">
          <div class="left" data-aos="fade-right" data-aos-duration="2000">
            <img src="#" alt="" />
          </div>
          <div class="right" data-aos="fade-left" data-aos-duration="2000">
            <h1>I'm Pragati a <span id="type2"></span></h1>
            <p>
              I am Computer engineering student, currently in final year.I am driven individual with the ability to adapt to any situation and proven potential to grow self and others.I believe in building something for the long-term.In this generation of technology , the change in the world seems so clear that you know someone is gonna doit. I want to be that someone.The question is not ???Can we???? ??? it is "When?". I have great interest in developing web application using latest technologies.
              I am full stack developer. Apart from web developmentI have good interest in Machine learning and Bug bounty.
              I am still in learning period, and have a lot more to explore in field of web development and another latest technologies.
             
            </p>
            
          </div>
        </div>
      </section>
  
      <!-- Services -->
      <section class="section theme" id="services">
        <div class="title">
          <h1>My Services</h1>
        </div>
  
        <div class="services-center container">
          <div class="service" data-aos="fade-down" data-aos-duration="2000">
            <span><i class="fab fa-accusoft"></i></span>
            <h2>Web Design</h2>
            <p>
              I develop Interactive, Dynamic and Atrractive web pages.
            </p>
          </div>

  
         
        </div>
      </section>
  
      <!-- Skills -->
      <section class="section skills" id="skills">
        <div class="title">
          <h1>My Skills</h1>
        </div>
  
        <div class="skills-center container">
          <div class="skills-left" data-aos="fade-right" data-aos-duration="2000">
            <div class="skills-box">
              <h4>HTML5</h4>
              <div class="skills-ilt">
                <div class="skills-bar html"></div>
                <span>90%</span>
              </div>
            </div>
            <div class="skills-box">
              <h4>CSS</h4>
              <div class="skills-ilt">
                <div class="skills-bar css"></div>
                <span>80%</span>
              </div>
            </div>
            <div class="skills-box">
              <h4>JavaScript</h4>
              <div class="skills-ilt">
                <div class="skills-bar javascript"></div>
                <span>70%</span>
              </div>
            </div>
            <div class="skills-box">
              <h4>PHP</h4>
              <div class="skills-ilt">
                <div class="skills-bar PHP"></div>
                <span>80%</span>
              </div>
            </div>
            <div class="skills-box">
              <h4>mongodb</h4>
              <div class="skills-ilt">
                <div class="skills-bar mongodb"></div>
                <span>70%</span>
              </div>
            </div>
  
            <div class="skills-box">
              <h4>SQL</h4>
              <div class="skills-ilt">
                <div class="skills-bar SQL"></div>
                <span>85%</span>
              </div>
            </div>
          </div>
  
          <div class="right" data-aos="fade-left" data-aos-duration="2000">
            <h3>My creative skills and experience</h3>
            <p>
            I am a result- oriented technical aficionado with excellent communication skills,good aptitude dexterity as well as great understanding of software development in different coding languages.
I am a Full stack web developer who loves building interactive and dynamic web applications. Have an excellent knowledge about Object Oriented Programming,Database(SQL, Mongodb) and intermediate level knowledge about Data science, Automation testing with selenium, Cloud Computing(AWS).
            </p>
           
          </div>
        </div>
      </section>
  
     
  
      <!-- Contact -->
      <section class="section contact" id="contact">
        <div class="title">
          <h1>Contact me</h1>
        </div>
  
        <div class="contact-center container">
          <div class="left" data-aos="fade-down-right" data-aos-duration="2000">
            <h2>Get in Touch</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.587958824466!2d73.74865651532296!3d18.637593870448136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9f4e2240d9b%3A0xc017d20022a4f535!2sRucha%2C%20Aundh%20-%20Ravet%20BRTS%20Rd%2C%20Vishnu%20Dev%20Nagar%2C%20Punawale%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411033!5e0!3m2!1sen!2sin!4v1617358583980!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div>
              <span class="icon"><i class="fas fa-user"></i></span>
              <span class="content">
                <h3>Name</h3>
                <span>Pragati Naikare</span>
              </span>
            </div>
  
            <div>
              <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
              <span class="content">
                <h3>Address</h3>
                <span>Ravet,Pune</span>
              </span>
            </div>
  
            <div>
              <span class="icon"><i class="fas fa-envelope"></i></span>
              <span class="content">
                <h3>Email</h3>
                <span>pragatinaikare@gmail.com</span>
              </span>
            </div>
          </div>
          <div class="right" data-aos="fade-up-left" data-aos-duration="2000">
          <?php require_once 'connection.php';?>
            <form action="connection.php" method="POST" class="form">
              <h2>Message me</h2>


              <div>
                <input type="text" name="namee" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
              </div>
              <textarea
                cols="10"
                rows="8"
                name="describe"
                placeholder="Describe Project"
              ></textarea>
  
              <input type="submit" class="btn" name="submit" value="Submit"/>
            </form>
          </div>
        </div>
      </section>
  
      <footer>
        <p>Designed by Pragati Naikare <span></span> | &copy; 2020 All rights reserved.</p>
      </footer>
  
   





    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="./index.js"></script>

</body>

</html>



















