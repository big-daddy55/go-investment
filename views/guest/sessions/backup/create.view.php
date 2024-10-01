<div class="container <?= strpos($_SERVER['REQUEST_URI'], '/register-individual') !== false ? 'sign-up-mode' : '' ?>
">
    <div class="forms-container">
        <div class="signin-signup">

            <form action="/login" method="POST" class="sign-in-form <?= $_SERVER['REQUEST_URI'] == '/login' ? 'active-form' : '' ?>">
                <?php if (isset($alert)) : ?>
                    <p class="alert">
                        <?= $alert ?>
                    </p>
                <?php endif; ?>
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required />
                </div>
                <?php if (isset($errors['auth'])) : ?>
                    <p class="error-message">
                        <?= $errors['auth'] ?>
                    </p>
                <?php endif; ?>
                <input type="submit" value="Login" class="solid" />
                <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <form action="/register-individual" method="POST" class="sign-up-form">

                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="First Name" name="first_name" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Last Name" name="last_name" required />
                </div>
                <div class="input-field" id="email1">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" id="email" required />
                </div>
                <?php if (isset($errors)) : ?>
                    <p class="error-message">
                        <?= $errors ?>
                    </p>
                <?php endif; ?>
                <div class="input-field" id="c-email">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Confirm Email" id="confirm_email" oninput="checkEmails()" required />
                </div>
                <div class="input-field" id="password-container">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password" required />
                </div>
                <div class="input-field" id="c-password">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" oninput="checkPassword()" required />
                </div>
                <input type="submit" class="btn solid" value="Sign up" />
                <!-- <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div> -->
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Register and account with us and start your investment journey
                </p>
                <a href="/register">
                    <button class="btn transparent">
                        Sign up
                    </button>
                </a>
            </div>
            <img src="/public/resource/images/finance2.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Sign in to continue your investment journey.
                </p>
                <a href="/login">
                    <button class="btn transparent">
                        Sign in
                    </button>
                </a>
            </div>
            <img src="/public/resource/images/finance1.png" class="image" alt="" />
        </div>
    </div>
</div>

<script src="/public/resource/app.js"></script>

<script>
    function checkEmails() {
        // Get the values of the email input fields
        let email1 = document.getElementById("email").value;
        let email2 = document.getElementById("confirm_email").value;

        // Check if the emails are the same
        if (email1 === email2) {
            document.getElementById("email1").classList.add("success-email");
            document.getElementById("c-email").classList.add("success-email");
            document.getElementById("email1").classList.remove("error-email");
            document.getElementById("c-email").classList.remove("error-email");
            console.log("equal")
        } else {
            document.getElementById("email1").classList.add("error-email");
            document.getElementById("c-email").classList.add("error-email");
            document.getElementById("email1").classList.remove("success-email");
            document.getElementById("c-email").classList.remove("success-email");
            console.log("not equal")
        }
    }

    function checkPassword() {
        // Get the values of the password input fields
        let password = document.getElementById("password").value;
        let confirm_password = document.getElementById("confirm_password").value;

        // Check if the passwords are the same
        if (password === confirm_password) {
            document.getElementById("password-container").classList.add("success-email");
            document.getElementById("c-password").classList.add("success-email");
        } else {
            document.getElementById("password-container").classList.add("error-email");
            document.getElementById("c-password").classList.add("error-email");

        }
    }
</script>