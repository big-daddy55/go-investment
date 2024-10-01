<!-- <nav>
    <div class="logo-container">
        <img src="/public/resource/images/Logo.png" alt="" class="logo">
    </div>
    <div class="nav-links">
        <a href="/user/home">Market Activity</a>
        <a href="#">Financial Services</a>
        <a href="/news">News & Insights</a>
        <a href="/user/wallet">Wallet</a>
        <a href="/user/portfolio">Portfolio</a>

    </div>
    <div class="__last">
        <p>₵ <?= number_format($wallet['balance']) ?></p>
        <div class="profile dropdown">
            <button class="dropbtn">
                <img src=<?= $user['profile_photo'] ?> alt="">
            </button>

            <div class="nav-content">
                <a href="/user/settings">Settings</a>
                <a href="/user/wallet">Wallet</a>
                <a href="#service3">Help And Support</a>
                <form action="/sessions" method="post" class="logout-form">
                    <input type="hidden" value="DELETE" name="_method">
                    <button><span class="title">Sign Out</span></button>
                </form>
            </div>
        </div>
    </div>

</nav> -->

<header id="header" data-header>
    <div class="nav-container">

        <div class="logo-container">
            <img src="/public/resource/images/Logo.png" alt="" class="logo">
        </div>
        <nav class="navbar" data-navbar>
            <ul class="navbar-list">
                <!-- class="navbar-link active" --> 
                <li class="navbar-item">
                    <a href="/" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>" data-nav-link>Market Activity</a>
                </li>

                <li class="navbar-item">
                    <a href="/financial" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/financial' ? 'active' : '' ?>" data-nav-link>Financial Services</a>
                </li>
                <li class="navbar-item">
                    <a href="/news" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/news' ? 'active' : '' ?>" data-nav-link>News & Insights</a>
                </li>

                <li class="navbar-item">
                    <a href="/user/wallet" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/user/wallet' ? 'active' : '' ?>" data-nav-link>Wallet</a>
                </li>
                <li class="navbar-item">
                    <a href="/user/portfolio" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/user/portfolio' ? 'active' : '' ?>" data-nav-link>Portfolio</a>
                </li>



            </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <div class="signing">
            <div class="__last">
                <p>₵ <?= number_format($wallet['balance']) ?></p>
                <div class="profile dropdown">
                    <button class="dropbtn">
                        <img src=<?= $user['profile_photo'] ?> alt="">
                    </button>

                    <div class="nav-content">
                        <a href="/user/settings">Settings</a>
                        <a href="/user/wallet">Wallet</a>
                        <a href="#service3">Help And Support</a>
                        <form action="/sessions" method="post" class="logout-form">
                            <input type="hidden" value="DELETE" name="_method">
                            <button><span class="title">Sign Out</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

<script src="/public/resource/assets/js/script.js" defer></script>
<script>
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