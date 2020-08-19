<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/admin-dashboard.css">
    <link rel="stylesheet" href="/assets/css/header-nav.css">
    <link href="/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admin Dashboard</title>

</head>

<body>
    <main id="main" class="d-flex h-100">
    <!-- Begin page -->
        <div id="ndmodal" class="side_nav">
            <!-- <div id="myModal" class="mobile-nav"> -->
            <span style="cursor: pointer;" id="closeBtn" class="close">&times;</span>
            <img class="py-4 mx-auto d-block" src="/assets/images/brand (2).png" />
            <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="/admin" class="waves-effect">
                                <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right"></span> <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i><span> Applicant Manager <span class="fa fa-caret-down"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="/applicants">View Applicants</a></li>
                                <li><a href="/pending">Pending</a></li>
                                <li><a href="/admitted">Admitted</a></li>
                                <li><a href="/rejected">Rejected</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/course" class="waves-effect"><i class="icon-pencil"></i><span> Course </span></a>
                        </li>
                        <li>
                            <a href="/faculty" class="waves-effect"><i class="icon-sinth"></i><span> Faculty </span></a>
                        </li>
                        <li>
                            <a href="/department" class="waves-effect"><i class="icon-home"></i><span> Department </span></a>
                        </li>
                        <li>
                            <a href="/sessions" class="waves-effect"><i class="icon-calendar"></i><span> Sessions </span></a>
                        </li>
                    </ul>

                </div>
            <!-- </div>  -->
        </div>       
        <div class="container col-lg-9 here">
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
            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <footer>
                    <small class="text-center">&copy; 2020 Admission Portal. Crafted by <b>ECX Internship</b></small>
                </footer>
            </div>
            
        </div>

            
    </main>
    <!-- END wrapper -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/metismenu.min.js"></script>
    <script src="/assets/js/try.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script>
        $('.dropdown-toggle').click(function() {
            $('.dropdown-menu').toggle();
        });
    </script>
    <!-- App js -->
    <script src="/assets/js/app.js"></script>
</body>

</html>