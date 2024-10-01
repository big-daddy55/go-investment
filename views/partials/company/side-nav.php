 <div class="sidebar" id="sidebar" style="position: fixed;">
     <ul id="link-container">
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/market' ? 'active' : '' ?>" onclick="openlink(1)">
             <i class='bx bxs-dashboard ri'></i>
             <a href="/company/market" id="link1">Market</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/home' ? 'active' : '' ?>" onclick="openlink(2)">
             <i class='bx bxs-dashboard ri'></i>
             <a href="/company/home" id="link2">Dashboard</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/wallet' ? 'active' : '' ?>" onclick="openlink(3)">
             <i class='bx bxs-wallet ri'></i>
             <a href="/company/wallet" id="link3">Wallet</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/product/list' ? 'active' : '' ?>" onclick="openlink(4)">
             <i class='bx bx-bar-chart-square ri'></i>
             <a href="/company/product/list" id="link4">Listings</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '#' ? 'active' : '' ?>" onclick="openlink(5)">

             <i class='bx bxs-wrench ri'></i>
             <a href="/company/daily-revenue" id="link5">Daily Revenue</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '#' ? 'active' : '' ?>" onclick="openlink(6)">

             <i class='bx bxs-wrench ri'></i>
             <a href="/company/promotion" id="link6">Promotion</a>
         </li>


         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/status' ? 'active' : '' ?>" onclick="openlink(7)">
             <i class='bx bxs-user ri'></i>
             <a href="/company/status" id="link7">Account Status</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/report' ? 'active' : '' ?>" onclick="openlink(8)">
             <i class='bx bxs-report ri'></i>
             <a href="/company/report" id="link8">Report</a>
         </li>
         <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/settings' ? 'active' : '' ?>" onclick="openlink(9)">
             <i class='bx bxs-cog ri'></i>
             <a href="/company/settings" id="link9">Setting</a>
         </li>

         <div class="bottomList"> 
             <!-- <li id="nav-link" class="navLink <?= $_SERVER['REQUEST_URI'] === '/company/help' ? 'active' : '' ?>" onclick="openlink(10)">
                 <i class='bx bxs-help-circle ri'></i>
                 <a href="/company/help" id="link10">Help</a>
             </li> -->
             <li id="nav-link" class="navLink logout <?= $_SERVER['REQUEST_URI'] === '#' ? 'active' : '' ?>">
                 <i class='bx bx-log-out ri'></i>
                 <form action="/sessions" method="post" class="logout-form">
                     <input type="hidden" value="DELETE" name="_method">
                     <button style="cursor:pointer">Sign Out</button>
                 </form>
             </li>
         </div>
     </ul>
 </div>

 <script>
     //  document.getElementById('nav-link').addEventListener('click', function () {
     //      console.log('clicked');
     //      document.getElementById('navLink').click();
     //  });
     //  document.querySelector('.navLink').addEventListener('click', function (event) {
     //     const navlink = document.querySelector('.navLink');

     //     if(navlink){
     //         const link = navlink.querySelector('.link');
     //         if(link){
     //             link.click();
     //         }
     //     }
     // });

     function openlink(linknumber) {
         console.log(linknumber);
         const linkid = `link${linknumber}`;


         document.getElementById(linkid).click();
     }


     document.getElementById('link-container').addEventListener('click', function(event) {
         if (event.target.classList.contains('link')) {
             event.target.click();
         }
     })
 </script>