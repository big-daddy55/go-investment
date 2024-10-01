<div class="login-main">

    <form action="/login" method="POST" class="sign-in-form <?= $_SERVER['REQUEST_URI'] == '/login' ? 'active-form' : '' ?>">
        <div class="input-container" style="margin: 0;">
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

            <div style="display: flex; justify-content:space-between; width:100%">
                <a href="" class="login-links">
                    Forgot Password?
                </a>
                <a href="/register" class="login-links">
                    Create An Account
                </a>
            </div>
        </div>

        <input type="submit" value="Login" class="solid" />
        <!-- <p class="social-text">Or Sign in with social platforms</p>
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