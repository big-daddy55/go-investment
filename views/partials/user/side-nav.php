
     <div class="navigation">
         <ul>
             <li class="logo-container">
                 <img src="/public/resource/images/Logo.png" alt="" class="logo">
                 <span class="title">Investments</span>
             </li>

             <li>
                 <a href="#">
                     <span class="icon">
                         <ion-icon name="home-outline"></ion-icon>
                     </span>
                     <span class="title">Dashboard</span>
                 </a>
             </li>

             <li>
                 <a href="#">
                     <span class="icon">
                         <ion-icon name="people-outline"></ion-icon>
                     </span>
                     <span class="title">Customers</span>
                 </a>
             </li>

             <li>
                 <a href="#">
                     <span class="icon">
                         <ion-icon name="chatbubble-outline"></ion-icon>
                     </span>
                     <span class="title">Messages</span>
                 </a>
             </li>

             <li>
                 <a href="#">
                     <span class="icon">
                         <ion-icon name="help-outline"></ion-icon>
                     </span>
                     <span class="title">Help</span>
                 </a>
             </li>

             <li>
                 <a href="/user/settings">
                     <span class="icon">
                         <ion-icon name="settings-outline"></ion-icon>
                     </span>
                     <span class="title">Settings</span>
                 </a>
             </li>

             <li>
                 <a href="#">
                     <span class="icon">
                         <ion-icon name="lock-closed-outline"></ion-icon>
                     </span>
                     <span class="title">Password</span>
                 </a>
             </li>

             <li>

                     <form action="/sessions" method="post" class="logout-form">
                         <input type="hidden" value="DELETE" name="_method">
                         <button>
                             <span class="icon">
                                 <ion-icon name="log-out-outline"></ion-icon>
                             </span>
                             <span class="title">Sign Out</span>
                         </button>
                     </form>


                 <!-- <a href="#">
                     <span class="icon">
                         <ion-icon name="log-out-outline"></ion-icon>
                     </span>
                     <span class="title">Sign Out</span>
                 </a> -->
             </li>
         </ul>
     </div>