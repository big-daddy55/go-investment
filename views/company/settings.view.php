<!-- <main class="settings-main"> -->
<div class="container light-style settings-container main">
    <!-- <i class='bx bx-menu' id="toggle-btn" onclick="expand()"></i> -->
    <h4 class="font-weight-bold py-3 mb-4">
        Account settings
    </h4>
    <div class="card overflow-hidden">

        <div class="col-md-9">
            <div class="tab-content">

                <form action="/company/profile/update" enctype="multipart/form-data" method="POST">
                    <div class="tab-pane fade active show" id="account-general">

                        <div class="media align-items-center">
                            <img src="<?= $company['logo'] ?>" id="logo" class="d-block ui-w-80">
                            <div class="media-body ml-4">
                                <label class="btn btn-outline-primary">
                                    Upload new photo
                                    <input type="file" class="account-settings-fileinput" name="profile_photo" id="logo-select">
                                </label> &nbsp;
                            </div>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                            <div class="name-group">
                                <div class="form-group">
                                    <label class="form-label">Company Name</label>
                                    <input type="text" class="form-control" value="<?= $company['company_name'] ?>" name="company_name" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="<?= $_SESSION['user']['email'] ?>" name="email">
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['address'] ?>" name="address">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['phone_number'] ?>" name="phone_number">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Type</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['business_type'] ?>" name="business_type">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Website</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['business_website'] ?>" name="business_website">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Risk Factor</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['risk_factors'] ?>" name="risk_factors">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Industry</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['industry'] ?>" name="industry">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Bio</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['bio'] ?>" name="bio">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Employees</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['number_of_employees'] ?>" name="number_of_employees">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Branches</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['number_of_branches'] ?>" name="number_of_branches">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Executives</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['number_of_executive'] ?>" name="number_of_executive">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Board</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['number_of_board'] ?>" name="number_of_board">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Product & Services</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['product_and_services'] ?>" name="product_and_services">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company Revenue</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['company_revenue'] ?>" name="company_revenue">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Income Per Day</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['income_per_day'] ?>" name="income_per_day">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Losses Per Day</label>
                                <input type="text" class="form-control mb-1" value="<?= $company['losses_per_day'] ?>" name="losses_per_day">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control" name="current_password">
                            </div>
                            <?php if (isset($errors['password'])) : ?>
                                <p class="error-message">
                                    <?= $errors['password'] ?>
                                </p>
                            <?php endif; ?>
                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                        </div>
                    </div>
                    <div class="text-right mt-3 action-buttons">
                        <input type="submit" class="btn btn-primary saveBtn" value="Save changes"></input>&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>

                </form>



            </div>
        </div>
    </div>
</div>

</div>
<!-- </main> -->

<script src="/public/resource/orders.js"></script>
<script src="/public/resource/dash.js"></script>
<script src="/public/resource/nav.js"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById('logo-select').addEventListener('change', function() {
        const selectedImage = document.getElementById('logo');
        if (selectedImage && this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>