<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <h2 class="logo"><img src="Logo.png" alt="Logo"></h2>
            </div>
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()"> <a href="homePage.html"></a> Sign In</button>
                <button class="btn" id="registerBtn" onclick="register()"> <a href="homePage.html"></a>Sign Up</button>
            </div>
        </nav>

        <!-- Login and Registration Forms -->
        <div class="form-box">
            <!-- Login Form -->
            <div class="login-container" id="login">
                <div class="top">
                    <span>Don't have an account? <a href="homePage.html" class="switch-to-register">Sign Up</a></span>
                </div>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input type="text" id="username" name="username" class="input-field" placeholder="User Name" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
                </form>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check">Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="register-container" id="register">
                <div class="top">
                    <span>Have an account? <a href="homePage.html" class="switch-to-login">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="First Name" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Last Name" required>
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <button class="submit">Register</button>
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check">Remember Me</label>///
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & Conditions</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const loginBtn = document.getElementById("loginBtn");
        const registerBtn = document.getElementById("registerBtn");
        const switchToLogin = document.querySelector(".switch-to-login");
        const switchToRegister = document.querySelector(".switch-to-register");
        const login = document.getElementById("login");
        const register = document.getElementById("register");

        loginBtn.addEventListener('click', showLoginForm);
        registerBtn.addEventListener('click', showRegisterForm);

        function showLoginForm() {
            login.style.left = "4px";
            register.style.right = "-520px";
        }

        function showRegisterForm() {
            login.style.left = "-520px";
            register.style.right = "5px";
        }
    </script>
</body>
</html>
