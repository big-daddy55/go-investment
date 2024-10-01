<main class="settings-main">
    <div class="container light-style settings-container">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Account</a>

                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a> -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">

                        <form action="user/settings" enctype="multipart/form-data" method="POST">
                            <div class="tab-pane fade active show" id="account-general">

                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="<?= $user['first_name'] ?>" name="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="<?= $user['last_name'] ?>" name="last_name">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" value="<?= $user['email'] ?>" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control mb-1" value="<?= $user['dob'] ?>" name="dob">
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
                                <input type="submit" class="btn btn-primary" value="Save changes"></input>&nbsp;
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