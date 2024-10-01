<div class="dashboard-main main">

    <!-- Main Content -->
    <main>

        <!-- <i class='bx bx-menu' id="toggle-btn" onclick="expand()"></i> -->
        <div class="dashboard-nav">
            <h1>Analytics</h1>
            <div class="profile">


                <div class="info">
                    <p><?= $company['company_name'] ?></p>
                    <!-- <small class="text-muted">Admin</small> -->
                </div>
                <div class="profile-photo">
                    <img src="/public/resource/images/uploads/profile/default.png">
                </div>
            </div>

        </div>

        <!-- Analyses -->
        <div class="analyse">
            <div class="sales">
                <div class="status">
                    <div class="info">
                        <h3>Listings</h3>
                        <h1 class="amount">20</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+81%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visits">
                <div class="status">
                    <div class="info">
                        <h3>Income</h3>
                        <h1 class="amount">24,981</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>-48%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="searches">
                <div class="status">
                    <div class="info">
                        <h3>Losses</h3>
                        <h1 class="amount">14,147</h1>
                    </div>
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+21%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-profile">
                <div class="status">
                    <h3>Account Status</h3>
                    <div class="logo">
                        <img src="<?= $company['logo'] ?>">
                        <h2>Status</h2>
                        <div class="statuss">
                            <i class='bx bxs-circle'></i>
                            <p>Active</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Analyses -->

        <!-- New Users Section -->
        <div class="new-users">
            <h2>Listings</h2>
            <div class="user-list">
                <div class="user">
                    <img src="/public/resource/images/uploads/profile/default.png">
                    <h2>Jack</h2>
                    <p>54 Min Ago</p>
                </div>
                <div class="user">
                    <img src="/public/resource/images/uploads/profile/default.png">
                    <h2>Amir</h2>
                    <p>3 Hours Ago</p>
                </div>
                <div class="user">
                    <img src="/public/resource/images/uploads/profile/default.png">
                    <h2>Ember</h2>
                    <p>6 Hours Ago</p>
                </div>
                <div class="user">
                    <img src="/public/resource/images/uploads/profile/default.png">
                    <h2>More</h2>
                    <p>New User</p>
                </div>
            </div>
        </div>
        <!-- End of New Users Section -->

        <!-- Recent Orders Table -->
        <div class="recent-orders">
            <h2>Transactions</h2>
            <table>
                <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <!-- <th>Status</th> -->
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <a href="#">Show All</a>
        </div>
        <!-- End of Recent Orders -->

    </main>
    <!-- End of Main Content -->

    <!-- Right Section -->
    <!-- <div class="right-section">
        <div class="nav">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                </span>
            </button> -->




</div>
<!-- End of Nav -->



<!-- <div class="reminders">
            <div class="header">
                <h2>Reminders</h2>
                <span class="material-icons-sharp">
                    notifications_none
                </span>
            </div>

            <div class="notification">
                <div class="icon">
                    <span class="material-icons-sharp">
                        volume_up
                    </span>
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Workshop</h3>
                        <small class="text_muted">
                            08:00 AM - 12:00 PM
                        </small>
                    </div>
                    <span class="material-icons-sharp">
                        more_vert
                    </span>
                </div>
            </div>

            <div class="notification deactive">
                <div class="icon">
                    <span class="material-icons-sharp">
                        edit
                    </span>
                </div>
                <div class="content">
                    <div class="info">
                        <h3>Workshop</h3>
                        <small class="text_muted">
                            08:00 AM - 12:00 PM
                        </small>
                    </div>
                    <span class="material-icons-sharp">
                        more_vert
                    </span>
                </div>
            </div>

            <div class="notification add-reminder">
                <div>
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Add Reminder</h3>
                </div>
            </div>

        </div> -->

</div>

</div>

<script src="/public/resource/orders.js"></script>
<script src="/public/resource/dash.js"></script>
<script src="/public/resource/nav.js"></script>