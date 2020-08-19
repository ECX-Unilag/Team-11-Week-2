<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/user-dashboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link href="assets/css/create-profile.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/portal.css">
  <link rel="stylesheet" href="/assets/css/create-profile.css">
  <link rel="stylesheet" href="/assets/css/header-nav.css">
  <title>Admissions Portal</title>
</head>

<body>
  <main id="main" class="d-flex h-100">
    <div id="ndmodal" class="side_nav">
      <!-- <div id="myModal" class="mobile-nav"> -->
      <span style="cursor: pointer;" id="closeBtn" class="close">&times;</span>
      <img class="py-4 mx-auto d-block" src="/assets/images/brand (2).png" />
      <h3 class="text-center">MENU</h3>
      <a href="/create-profile">
        <i class="fa fa-user"></i>
        <label>Create Profile</label>
      </a>
      <a href="/admission-status">
        <i class="fa fa-user"></i>
        <label>Check Admission Status</label>
      </a>
      <a href="/display-info">
        <i class="fa fa-user"></i>
        <label>Display Details</label>
      </a>
      <a href="/add-result">
        <i class="fa fa-user"></i>
        <label>Add Result</label>
      </a>
      <!-- </div>  -->
    </div>
    <div class="container col-lg-9">
      <div class="py-4 d-flex justify-content-between">
        <div id="openButton" class="mobile-nav-hamburger d-flex d-lg-none ml-0">
          <div class="line-1"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
        </div>

        <div class="ml-auto mr-0 d-flex dropdown notification-list nav-pro-img">
          <i style="line-height: 1.3;" class="mx-3 my-auto fa-2x fa fa-bell"></i>
          <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="/assets/images/users/user-4.jpg" alt="user" class="rounded-circle" style="height:36px; width:36px">
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="/logout"><i class="mdi mdi-power text-danger"></i> Logout</a>
          </div>
        </div>
      </div>
  <div>
    @yield('content')
  </div>

  <footer></footer>

  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/portal.js"></script>
  <script>
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggle();
    });
  </script>
</body>

</html>
