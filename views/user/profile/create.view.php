<!-- <div class="container">
    <div class="forms-container"> -->
<div class="main-profile-complete">
    <form action="/user/complete-profile" method="POST" class="sign-up-form profile-complete" enctype="multipart/form-data">

        <h2 class="title">Complete Your Profile</h2>
        <div class="profile-container">
            <img src="/<?= $user['profile_photo'] ?>" alt="" class="profile_pic" id="profile_pic">
            <label for="file" name="file" id="filelabel" class="custom-file-input"> Upload Profile <i class='bx bxs-plus-circle'></i></label>
            <input type="file" name="profile_photo" id="profile_photo" accept="image/*" required>
            <p id="fileNameDisplay"></p>
        </div>

        <div class="input-field">
            <i class='bx bxs-phone'></i>
            <input type="text" placeholder="Phone Number" name="phone_number" required />
        </div>
        <?php if (isset($errors['phone_number'])) : ?>
            <p class="error-message">
                <?= $errors['phone_number'] ?>
            </p>
        <?php endif; ?>
        <div class="input-field">
            <i class='bx bx-calendar'></i>
            <input type="date" placeholder="Date of Birth" name="dob" required />
        </div>
        <div class="input-field">
            <i class='bx bxs-map-pin'></i>
            <select name="country" id="country" required>
                <option value="Ghana">Ghana</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Kenya">Kenya</option>
            </select>
            <!-- <input type="text" placeholder="Country of Residence" name="country" /> -->
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Wallet Name" name="wallet_name" required />
        </div>

        <input type="submit" class="btn" value="Continue" />
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


<script>
    // Trigger file input when the custom button is clicked
    document.getElementById('filelabel').addEventListener('click', function() {
        document.getElementById('profile_photo').click();
    });

    // Optional: Display the selected file name (just for demonstration purposes)
    document.getElementById('profile_photo').addEventListener('change', function() {
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        if (fileNameDisplay) {
            fileNameDisplay.textContent = this.value.split('\\').pop(); // Display only the file name
        }
    });

    document.getElementById('profile_photo').addEventListener('change', function() {
        const selectedImage = document.getElementById('profile_pic');
        if (selectedImage && this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>