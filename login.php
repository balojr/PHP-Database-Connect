<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Log In</title>
</head>
<body>

    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">

                <div class="form">
                    <form action="data.php" method="POST">
                        <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input name="username" type="text" class="login__input" placeholder="User name / Email">
                        </div>
                     <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="password" type="password" class="login__input" placeholder="Password">
                     </div>
                     <button class="button login__submit">
                        <span class="button__text">Log In</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                     </button>
                    </form>
                </div>
                				
                </form>
                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>
