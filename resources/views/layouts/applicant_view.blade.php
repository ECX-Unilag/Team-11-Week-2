<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/portal.css">
  <link rel="stylesheet" href="/assets/css/header-nav.css">
  <title>Admissions Portal</title>
</head>

<body>
  <header>
    <nav>
      <a href="/home"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
      <ul>
        <li><a href="/create-profile">Create Profile</a></li>
      </ul>
      <ul>
        <li><a class="sign-up-btn" href="/logout">LogOut</a></li>
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
            <li><a href="/create-profile">Create Profile</a></li>
            <li><a href="/logout">LogOut</a></li>
          </ul>
          <a style="text-align: center;" href="index.html"><img src="/assets/images/brand (2).png"></a>
        </div>
      </div>
    </nav>
  </header>

  <div>
    @yield('content')
  </div>

  <footer></footer>

  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/portal.js"></script>
</body>

</html>
