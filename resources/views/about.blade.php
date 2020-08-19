<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/header-nav.css">
    <link rel="stylesheet" href="/assets/css/About.css">
    <title>About Us</title>
</head>
<body>
    <header>
        <nav>
          <a href="index.html"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a class="active" href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
          <ul>
            <li><a href="/login">Login</a></li>
            <li><a class="sign-up-btn" href="/register">Sign Up</a></li>
          </ul>
          <div id="openButton" class="mobile-nav-hamburger display-none">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
          <div id="myModal" class="mobile-nav">
            <div>
              <span style="cursor: pointer;" id="closeBtn" class="close">&times;</span>
              <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Sign Up</a></li>
              </ul>
              <a style="text-align: center;" href="/"><img src="/assets/images/brand (2).png"></a>
            </div>
          </div>
        </nav>
      </header>
    <main>
        <div class="at-ecx">
            <h1>We're On a Mission</h1>

            <p>At ECX we are on a mission to train future ready student in relevant fields such as Data Science, Machine Learning, and Software Develpment </p>

            <button id="mbutton" class="btn-m">Learn More</button>
        </div>

        <div id="vmission" class="mission">
            <div class="o-vision">
                
                <h2>Our Vision</h2>
             <p>   To create an interactive environment between students
                and industry-based personnel so as to keep learners abreast of current trends in the world of technology. Thereby 
                providing students with the necessary skills required to excel in school and as a part of the workforce.</p>

            </div>
            <div class="o-mission">
<h2>Our Mission</h2>
<ul>
    
<li>To make students aware of career opportunities by connecting them to industry experts.</li>
<li>To prepare them for the workforce.</li>
<li>Equiping students in various areas of technlogy with essential soft skills such as leadership, teamwork, interpersonal skills, communication and negotiation. </li>


</ul>
            </div>
        </div>


       
<h2 class="why-e">Why choose ECX?</h2>
<div class="reasons">
<div class="best">
    <img src="assets/images/learn.PNG" alt="">
    <p>At ECX we have well seasoned and experienced experts to guide you through your learning along with access 
         to up to date and extensive resources.
    </p>
</div>

<div class="challenge">
    <img src="assets/images/team.PNG" alt="">
    <p>Learn how to collaborate effectively with your peers to produce great results. This way you can exist in any workplace without issues.
    </p>
</div>



<div class="career">
<img src="assets/images/Capture - Copy.PNG" alt="">
<p>Access to industry experts and lots of other opportunities to show 
    <br> your skills and improve your career prospects such as hackathons and project exhibitions.</p>
        </div>


    </main>

    <script src="/assets/js/main.js"></script>
    <script>
        document.getElementById("mbutton").addEventListener("click", viewMission)

function viewMission () {

var more = document.getElementById("vmission");

if(more.style.display==="none") {
    more.style.display="flex"
}


else{
    more.style.display="none"
}



}
    </script>
</body>
</html>