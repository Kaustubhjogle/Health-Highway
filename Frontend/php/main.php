<?php
setcookie('account', 'No');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <title>Health Highway</title>
</head>
<style>
/* Scrollbar */
/* width */
::-webkit-scrollbar {
width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
background: black; 
}
	 
/* Handle */
::-webkit-scrollbar-thumb {
background: #37B6FF; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
background: #042F49; 
}
</style>
<body>

    <!-- Navigation Menu -->
    <nav>
        <div id="logo">
            <img src="logo.png" alt="Health Highway">
        </div>
        <div id="center">
            <span><a href="diseases_common.php" style="text-decoration: none; color: white;">Diseases</a></span>
            <span><a href="patient_details_gen.php" style="text-decoration: none; color: white;">Symptoms</a></span>
            <span><a href="maps.html" style="text-decoration: none; color: white;">Service Locator</a></span>
            <span><a href="blogs.php" style="text-decoration: none; color: white;">Blogs</a></span>
            <span><a href="bmi.html" style="text-decoration: none; color: white;">BMI</a></span>
            <span><a href="pregnancy_main.html" style="text-decoration: none; color: white;">Pregnancy Informatics</a></span>
            <span><a href="covid_details.html" style="text-decoration: none; color: white;">Covid'19 Informatics</a></span>
            <span><a href="news.php" style="text-decoration: none; color: white;">News</a></span>
        </div>
        <div id="right">

            <a href="login.html"><button>Login</button></a>
            <a href="signup.html"><button>Signup</button></a>
        </div>
    </nav>


    <!-- SECTION HOME -->
    <section id="Home">
        <p>Health Highway </p>
    </section>


    <!-- SECTION CONTAINER-->
    <section id="container">
   
        <div class="Box">
         
            <h1>Consult Doctors</h1>
            <img src="doctor.jpg" alt="Doctors">
            <p>We are here to help whenever you feel, but keeping you healthy is our priority! </p>
      
        </div>
  
        <div class="Box">
            <h1>Blogs </h1>
            <img src="blog.jpg" alt="Blogs">
            <p>Here are some blogs which will help you know more about your eating </p>

        </div>
        <div class="Box">
            <h1>Contact Us!</h1>
            <img src="contact.jpg" alt="Blogs">
            <p>9653189646</p>
            <P>healthhighway@.com</P>
        </div>
    </section>


    <!-- SECTION know_us -->
    <section id=know_us>
        <img src="know.jpg" alt="">
        <div id="heading">
            <h1>Our Qualified Team is</h1>
            <h1>Ready to Help You!</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus nesciunt obcaecati iure laborum quam
                laudantium dolore voluptas facere quibusdam ducimus? Modi ullam inventore suscipit quo consequuntur
                ipsam qui quas dolor?</p>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="center">
            Copyright &copy; www.HealthHighway.com. All rights reserved!
        </div>
    </footer>


</body>
</html>