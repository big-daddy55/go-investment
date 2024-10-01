<div class="listing-main">
    <h2>Complete Your Company Profile</h2>

    <form action="/update" class="listing-form complete" method="POST" enctype="multipart/form-data">
        <!-- <h3>Company Information</h3> -->
        <div class="profile-container">
            <img src="/public/resource/images/uploads/profile/default.png" alt="" class="profile_pic" id="profile_pic">
            <label for="file" name="file" id="filelabel" class="custom-file-input"> Upload Logo <i class='bx bxs-plus-circle'></i></label>
            <input type="file" name="logo" id="profile_photo" accept="image/*">
            <p id="fileNameDisplay"></p>
        </div>

        <!-- <h3>Number Of Employees</h3> -->
        <div class="form-group">
            <div class="input-group">
                <label for="">Number Of Employees</label>
                <input type="text" name="number_of_employees" id="">
            </div>
            <div class="input-group">
                <label for="">Address</label>
                <input type="text" name="address" id="">
            </div>
            <div class="input-group">
                <label for="">Bio</label>
                <input type="text" name="bio" id="">
            </div>

        </div>





        <button type="submit" class="listBtn">Get Started <i class='bx bxs-chevrons-right'></i> </button>

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