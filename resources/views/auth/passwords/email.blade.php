<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/header-nav.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admissions Portal | Reset Password</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.html"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="create-profile.html">Create Profile</a></li>
                <li><a href="./contact.html">Contact Us</a></li>
            </ul>
            <ul>
                <li><a class="active" href="/login">Login</a></li>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="create-profile.html">Create Profile</a></li>
                        <li><a href="./contact.html">Contact Us</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                    <a style="text-align: center;" href="index.html"><img
                            src="/assets/images/brand (2).png"></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="/assets/js/main.js"></script>
</body>

</html>