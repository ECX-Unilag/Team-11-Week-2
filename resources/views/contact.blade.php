<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Portal | Contact Us</title>
  <link rel="stylesheet" href="/assets/css/contact.css" />
  <link rel="stylesheet" href="/assets/css/header-nav.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <a href="/"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a class="active" href="/contact">Contact Us</a></li>
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
    <div class="contact-div">
      <h1>Contact Us</h1>
      <p>We’d love to hear from you! Let us know what you think–feel free to chat with us, tweet at us, or get in touch
        with support.</p>
    </div>
    <section class="container">
      <div class="contact-details">
        <h3>Admission Office</h3>
        <div class="telephone">
          <i class="fa fa-phone"></i>
          <span>+234 8123 4567</span>
        </div>
        <div class="location">
          <i class="fa fa-map-marker-alt"></i>
          <span>5, Herbert Macaulay Way, Ikorodu Road, Jibowu</span>
        </div>
        <div class="email">
          <i class="fa fa-envelope"></i>
          <span>ecx@unilag.edu</span>
        </div>
      </div>
      <form>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="example@email.com">
        <textarea placeholder="Write Message"></textarea>
        <button>Send Message</button>
      </form>

    </section>
  </main>
  <script src="/assets/js/main.js"></script>
</body>

</html>