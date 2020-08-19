<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/login.css/" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/header-nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admissions Portal | Login</title>
</head>

<body>
    <header>
        <nav>
            <a href="/"><img class="logo" src="/'assets/images/brand (2).png" alt="ECX Logo"></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <ul>
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
                        <li><a href="/register">Sign Up</a></li>
                    </ul>
                    <a style="text-align: center;" href="/"><img
                            src="/assets/images/brand (2).png"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container col-lg-5 col-xl-4 col-sm-8 col-md-6">
        
        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
        </form>
        <div class="other-details">
            <a href="/password/reset">Forgot Password</a>
        </div>
    </main>

    <!--<footer class="mr-0">
        <a href="./admin-login.html">Admin Login</a>
    </footer>-->
    <script src="/assets/js/main.js"></script>
</body>

</html>