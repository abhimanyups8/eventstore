<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="user2/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="user2/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="user2/css/style.css" type="text/css">
</head>
<body>

<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-right">
                <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Log In</a>
                <div class="top-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action=""  method="post">
                        <input type="hidden" name="hide" value="h">
                        <div class="group-input">
                            <label for="username">Username or email address *</label>
                            <input type="text" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" name="password">
                        </div>
                        <!-- <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Save Password
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Forget your Password</a>
                            </div>
                        </div> -->
                        <button type="submit" class="site-btn login-btn">Sign In</button>
                    </form>
                    <!-- <form  method="post">
                        <input type="hidden" name="hide" value="h">

                        <input type="text" class="text" name="email" placeholder="User Name" required="" autofocus>
                        <input type="password" class="password" name="password" placeholder="User Password" required="" autofocus>
                        <button class="btn" type="submit">Log In</button>
                        <p class="account">Don't have an account? <a href="index.php">Register</a></p>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="#"><img src="user2/img/footer-logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Js Plugins -->
<script src="user2/js/jquery-3.3.1.min.js"></script>
<script src="user2/js/bootstrap.min.js"></script>
<script src="user2/js/main.js"></script>
</body>
</html>
