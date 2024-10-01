    <div class="sidebar close">
        <a href="#" class="logo">
            <img src="/public/resource/images/logoblack.png" alt="" id="logo">
        </a>

        <ul class="side-menu">
            <li><a class="links" href="/user/home"><i class='bx bxs-dashboard'></i>Home</a></li>
            <li class="<?= $_SERVER['REQUEST_URI'] === '/user/wallet' ? 'active' : '' ?>"><a class="links" href="/user/wallet"><i class='bx bx-analyse'></i>Wallet</a></li>
            <li><a class="links" href="/user/home"><i class='bx bx-message-square-dots'></i>Companies</a></li>
            <li><a class="links" href="/user/portfolio"><i class='bx bx-group'></i>Portfolio</a></li>
            <li class="<?= $_SERVER['REQUEST_URI'] === '/user/settings' ? 'active' : '' ?>"><a class="links" href="/user/settings"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <form action="/sessions" method="post" class="logout-form">
                    <i class='bx bx-log-out-circle'></i>
                    <input type="hidden" value="DELETE" name="_method">
                    <button style="border: none; background-color: transparent; color: var(--dark);">Sign Out</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="content">
        <nav>
            <i class='bx bx-menu sidebar-toggle'></i>
            <form action="#" class="search-bar">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <div href="#" class="notif dropdown">
                <i class='bx bx-bell'></i>
                <span class="count" id="count"></span>
                <div class="nav-content">
                    <?php foreach ($transactions as $transaction) : ?>

                        <p class="notification">
                            <span style="font-size: 2em; color: green; font-weight:900; border-radius:50%;">.</span> You have made <?= $transaction['transaction_type'] ?> of <?= $transaction['currency'] ?> <?= $transaction['amount'] ?>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="profile dropdown">
                <p><?= $user['first_name'] ?> <?= $user['last_name'] ?></p>
                <button class="dropbtn">
                    <img src=<?= $user['profile_photo'] ?> alt="">
                </button>

                <div class="nav-content">
                    <a href="/user/settings">Settings</a>
                    <a href="/user/home">Wallet</a>
                    <a href="#service3">Help And Support</a>
                    <form action="/sessions" method="post" class="logout-form">
                        <input type="hidden" value="DELETE" name="_method">
                        <button><span class="sign-out">Sign Out</span></button>
                    </form>
                </div>
            </div>
        </nav>



        <script src="/public/resource/side-nav.js"></script>
        <script>
            // Select all p tags with class 'notification'
            var notificationParagraphs = document.querySelectorAll('p.notification');

            // Count the number of selected elements
            var count = notificationParagraphs.length;

            console.log(count);

            // Output the result
            document.getElementById('count').innerHTML = count;


            document.addEventListener('click', function(event) {
                const dropdowns = document.querySelectorAll('.dropdown');
                dropdowns.forEach(function(dropdown) {
                    if (!dropdown.contains(event.target)) {
                        dropdown.classList.remove('active');
                    }
                });
            });

            // JavaScript to handle opening/closing dropdown on click
            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                dropdown.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });
        </script>