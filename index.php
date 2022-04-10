
<?php 
//Contact form using db
require "config/dbconnect.php";

session_start();

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $messageText = $_POST['messageText'];
  $gen = 0;
  if($firstname == null ||  $email == null || $messageText == null) {
    $message = "Field Validation failed!";
    return;
  }

  $sql = 'INSERT INTO contactform (firstname, email, message) VALUES(:firstname, :email, :message)';
  $query = $pdo->prepare($sql);
  $query->bindParam('firstname', $firstname);
  $query->bindParam('email', $email);
  $query->bindParam('message', $messageText);
  if($query->execute()) {
    $message = "Successfully sent";
} else {
    $message = "A problem occurred while contacting us";
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Rubik:wght@300;400;500; 600; 700; 800; 900& display=swap" rel="stylesheet">
    </head>

    <body>
        <!--Header--> 
        <header>
            <a href="#" class="logo">Portfo<span>lio</span></a>
            <div class="bx bx-menu" id="menu-icon">

            </div>  
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </header>

         <!--Home--> 
        <section class="home" id="home">
             <div class="home-text">
                <h5>Hello, i am</h5>
                <h1>Freskim Hysenaj</h1>
                <h6>I am an upcoming Full-stack <span>Developer.</span></h6>
                <p>I desing and develop services on my free time, specializing in creating,
                stylish modern websites, web services and online stores.</p>
                <a href="cv/FreskimiCV.pdf" target="_blank" class="btn">Download CV</a>
             </div>
              
             <div class="home-img">
                <img src="img/Freskimi.png"/>
             </div>
        </section>

         <!-----About-----> 
        <section class="about" id="about">
             <div class="about-img">
                 <img src="img/about.png">
             </div>
        

            <div class="about-text">
                    <h3>ABOUT ME</h3> 
                    <h2>I'm a student who has a passion for Front-end Development.</h2> 
                    <p>I'm a student that has build a passion for creating websites. 
                    I'm from Kosova. I like to code and create web elements that are beautiful and give meaning to the digital world. 
                    I like to work with new people and along the way build new experiences!</p> 
                <div class="main-btn">
                    <a href="#contact" class="btn">Contact Me</a>
                    <a href="#" class="btn">Portfolio</a> 
                </div>
             </div>
        </section>

          <!------Services-----> 
        <section class="services" id="services"> 
            <div class="center">
                <h3>WHAT I DO?</h3> 
            </div> 

            <div class="service-content"> 
                <div class="row">
                    <i class='bx bxl-html5'></i>
                    <h3>HTML</h3> 
                    <p>Html is used to structure a web page or an application. I like to call it the bones
                        on a human.
                    </p> 
                </div> 
                <div class="row">
                    <i class='bx bxl-css3'></i>
                    <h3>CSS</h3> 
                    <p>Css is used to describe how Html elements are to be displayed on screen, this can be
                        the skin color on a human.
                    </p> 
                </div> 
                <div class="row">
                    <i class='bx bxl-javascript'></i>
                    <h3>JAVASCRIPT</h3> 
                    <p>JavaScript is used to create dynamic and interactive web pages like applications
                        and browsers, this is when the human begins to walk.
                    </p> 
                </div> 
                <div class="row">
                    <i class='bx bxl-php'></i>
                    <h3>PHP</h3> 
                    <p>Php is used to manage dynamic content, databases, session tracking, now the human
                        is fully functional.
                    </p> 
                </div> 
                <div class="row">
                    <i class='bx bxl-java'></i>
                    <h3>Java Programming</h3> 
                    <p>Java is used to develop desktop and mobile applications, big data processing, embedded systems, and so on.
                        Java is a powerful programming language.
                    </p> 
                </div> 
                <div class="row">
                    <i class='bx bx-desktop'></i> 
                    <h3>Web Development</h3> 
                    <p>Using all these different Languages we are able to create and construct the Web in the
                        most unique way possible.
                    </p> 
                </div> 
            </div>
        </section>

        <!------Resume -----> 
        <section class="resume" id="resume"> 
            <div class="center">
                <h3>Education & Experience</h3> 
            </div>
            <div class="resume-content"> 
                <div class="box">
                    <h6>August 2018 - Current</h6> 
                    <h4>Bachelor of Computer Science</h4> 
                    <p>Currently studying the computer world, building my experiences, and having fun on the way.</p> 
                    <h5>Kolegji - UBT </h5> 
                </div> 

                <div class="box">
                    <h6>February 2018 - May 2018</h6> 
                    <h4>Java Programming</h4> 
                    <p>Learned the fundamentals of Java programming, and got a really great grasp onto how a program actually works.</p> 
                    <h5>A.U.K Training & Development Institute</h5> 
                </div> 

                <div class="box">
                    <h6>September 2019 - October 2019</h6> 
                    <h4>Professional Sales</h4> 
                    <p>Learned the knowledge behind the skills that are acquired to be great at selling a product.</p> 
                    <h5>JEF Kosova - Young European Federalists</h5> 
                </div> 

                <div class="box">
                    <h6>October 2021 - October 2021</h6> 
                    <h4>Innovative projects for the future of Shtime</h4> 
                    <p>Involved on some ideas and projects that can help make Shtime a better Shtime.</p> 
                    <h5>OJQ Akademia</h5> 
                </div> 
            </div> 
        </section>

        <!------Contact-----> 
       
            <section class="contact" id="contact"  > 
                      <div class="center">
                          <h3>Contact Us</h3> 
                      </div>
                      <div class="contact-form"> 
                          <form  action="" name="form" method="POST">
                              <input type="" placeholder="Your Name" name="firstname" required> 
                              <input type="email" id="email" name="email" placeholder="Email Address" required> 
                              <textarea id="messageText" name="messageText" cols="30" rows="10" placeholder="Project Description" required>
                                
                              </textarea> 
                              <input type="submit" name="submit" value="Send" class="send-btn">
                          </form> 
                      </div> 
             </section>

        <!------Copyright -----> 
        <div class="copyright">
            <p>Copyright © 2022, All rights Reserved. <br> Created by Freskim Hysenaj!</p>
        </div>

        <!--Link to JS-->    
        <script src="https://unpkg.com/scrollreveal"></script>
        <script type="text/javascript" src="js/script.js">

        </script>

    </body>

</html>
 