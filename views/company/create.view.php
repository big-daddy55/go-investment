<div class="signup-main">

    <form action="/register-business" method="POST" class="sign-up-form">
        <div class="form-head">
            <p style="color:green; margin-bottom:2vh">Welcome to GO Investment!</p>
            <h2 class="title">Create New Account.</h2>
            <p style="color: white; font-size: 0.9em;">To list your product on our website, kindly create an account</p>
        </div>

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Name of Business" name="company_name" />
        </div>


        <div class="input-field" id="email1">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" id="email" oninput="checkEmails()" />
        </div>
        <?php if (isset($errors['email'])) : ?>
            <p class="error-message">
                <?= $errors['email'] ?>
            </p>
        <?php endif; ?>
        <!-- <div class="input-field" id="c-email">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Confirm Email" id="confirm_email" oninput="checkEmails()" />
                </div> -->


        <div class="input-field" id="password-container">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" id="password" />
        </div>
        <!-- <div class="input-field" id="c-password">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" id="confirm_password" oninput="checkPassword()" />
                </div> -->

        <div class="input-field-group">
            <a href="/login" class="btn solid">Log In</a>
            <input type="submit" class="btn solid" value="Create Account" style="background-color: green;" />
        </div>
    </form>
    <!-- <div class="image-section">
        <img src="/public/resource/images/invest.png" alt="">
    </div> -->
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
        } else {
            document.getElementById("email1").classList.add("error-email");
            document.getElementById("c-email").classList.add("error-email");

        }
    }
</script>