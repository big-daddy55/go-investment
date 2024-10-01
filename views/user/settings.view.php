<main class="settings-main">
    <div class="container light-style settings-container">
        <h4 class="font-weight-bold py-3 mb-4" style="color: var(--dark);">
            Account settings
        </h4>
        <div class="card account-settings">

            <div class="col-md-9">
                <div class="tab-content">

                    <form action="user/settings" enctype="multipart/form-data" method="POST">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">
                                <img src=<?= $user['profile_photo'] ?> alt class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput" name="profile_photo">
                                    </label>
                                    
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="name-group">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="<?= $user['first_name'] ?>" name="first_name">
                                    </div>
                                    <div class="form-group  last-name">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="<?= $user['last_name'] ?>" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="<?= $user['email'] ?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control mb-1" value="<?= $user['dob'] ?>" name="dob">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control mb-1" value="<?= $user['phone_number'] ?>" name="phone_number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control mb-1" value="<?= $user['country'] ?>" name="country">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <input type="submit" class="btn btn-primary saveBtn" value="Save changes"></input>&nbsp;
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>

    </div>
</main>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>