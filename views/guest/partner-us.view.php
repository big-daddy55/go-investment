    <section class="partner-main">
        <div class="partner-container">
            <main class="row">

                <!--  *******   Left Section (Column) Starts   *******  -->

                <section class="col left">

                    <!--  *******   Title Starts   *******  -->

                    <div class="contactTitle">
                        <h2>Partner With Us</h2>
                        <p>We're excited about the prospect of partnering with you to create synergies and achieve mutual success. Let's explore collaboration opportunities that align with our shared goals and values.</p>
                    </div>

                    <!--  *******   Title Ends   *******  -->

                    <!--  *******   Contact Info Starts   *******  -->

                    <div class="contactInfo">

                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <span>Phone</span>
                                <span>+233 50 175 1412</span>
                            </div>
                        </div>

                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="details">
                                <span>Email</span>
                                <span>info.goinvestment@gmail.com</span>
                            </div>
                        </div>

                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="details">
                                <span>Location</span>
                                <span>Greater Accra, Accra Central</span>
                            </div>
                        </div>

                    </div>

                    <!--  *******   Contact Info Ends   *******  -->

                    <!--  *******   Social Media Starts   *******  -->

                    <div class="socialMedia">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>

                    <!--  *******   Social Media Ends   *******  -->

                </section>

                <!--  *******   Left Section (Column) Ends   *******  -->

                <!--  *******   Right Section (Column) Starts   *******  -->

                <section class="col right">

                    <!--  *******   Form Starts   *******  -->

                    <form class="messageForm">

                        <!-- <div class="inputGroup halfWidth">
                            <input type="text" name="" required="required">
                            <label>Your Name</label>
                        </div> -->

                        <div class="inputGroup halfWidth">
                            <input type="email" name="" required="required">
                            <label>Email</label>
                        </div>
                        <div class="inputGroup halfWidth">
                            <input type="file" name="" required="required" id="__document">
                            <label id="filelabel">Upload Document(Optional)</label>
                        </div>

                        <div class="inputGroup fullWidth">
                            <input type="text" name="" required="required">
                            <label>Subject</label>
                        </div>

                        <div class="inputGroup fullWidth">
                            <textarea required="required"></textarea>
                            <label>Say Something</label>
                        </div>

                        <div class="inputGroup fullWidth">
                            <button>Send Message</button>
                        </div>

                    </form>

                    <!--  *******   Form Ends   *******  -->
                </section>

                <!--  *******   Right Section (Column) Ends   *******  -->

            </main>
        </div>
    </section>

    <script>
        document.getElementById('filelabel').addEventListener('click', function() {
            document.getElementById('__document').click();
        });

        document.getElementById('__document').addEventListener('change', function() {
            const fileNameDisplay = document.getElementById('filelabel');
            if (fileNameDisplay) {
                fileNameDisplay.textContent = this.value.split('\\').pop(); // Display only the file name
            }
        });
    </script>