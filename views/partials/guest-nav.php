  <header id="header" data-header>
      <div class="nav-container">

          <img src="/public/resource/images/Logo.png" alt="" class="logo">

          <nav class="navbar" data-navbar>
              <ul class="navbar-list">
                  <!-- class="navbar-link active" -->
                  <li class="navbar-item">
                      <a href="/" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>" data-nav-link>Home</a>
                  </li>

                  <li class="navbar-item">
                      <a href="/market-activity" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/market-activity' ? 'active' : '' ?>" data-nav-link>Market Activity</a>
                  </li>
                  <li class="navbar-item">
                      <a href="#" class="navbar-link" data-nav-link>Solutions</a>
                  </li>

                  <li class="navbar-item">
                      <a href="/news" class="navbar-link <?= $_SERVER['REQUEST_URI'] == '/news' ? 'active' : '' ?>" data-nav-link>News & Insights</a>
                  </li>



              </ul>
          </nav>

          <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
              <span class="line line-1"></span>
              <span class="line line-2"></span>
              <span class="line line-3"></span>
          </button>

          <div class="signing">
              <a href="/login" class="sign-link">Login</a>
              <a href="/register" class="sign-link signup">Sign up</a>
          </div>

      </div>
  </header>




  <script src="/public/resource/assets/js/script.js" defer></script>