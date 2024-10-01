 <?php

    use Core\Database;

    $db = new Database()
    ?>

 <div style="display: flex; flex-direction:column; background-color:black; height:auto; width:83%; margin-left: 18vw; padding: 0 2vw; margin-top: 6vh">

     <h2 style="color:white; margin-bottom: 5vh" class="h2">Top Companies</h2>

     <div class="list-container portfolio-list-container market-list-container" style="padding: 0 3vw; display:flex; align-items:center ;overflow-x:hidden; ">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>

         <?php

            if (!empty($products)) {
                foreach ($products as $product) : ?>

                 <div class="list-card" id="portfolio-list-card" style="width: 90%; height: 28vh; margin-top:0;">

                     <div class="card-head" id="portfolio-card-head" style="display:flex; flex-direction:column; align-items:center; width: 100%; border-bottom:none; margin:0">
                         <div style="display: flex; align-items:center; justify-content: space-between; width: 100%; ">
                             <h4 style="margin-bottom: 0;"><?= $product['product_name'] ?></h4>
                             <?php
                                $word = $product['product_name'];

                                $ticker = createAbbreviation($word);
                                ?>
                             <p style="color: rgb(12, 12, 121); font-size: 1.1em;"><?= $ticker ?></p>
                         </div>

                         <a href="/user/product?company_no=<?= $product['user_no'] ?>" style="display:flex; align-items:center; justify-content:center; width:90% height:10vh; overflow-y:hidden; margin-top: 2vh">
                             <img src=<?= $product['logo'] ?> alt="">
                         </a>

                     </div>

                     <div style="display: flex; align-items:center; margin-top:2.4vh">
                         <i class='bx bxs-chevrons-up' style="color: green;font-size:1em;margin-right: 0.5vw;"></i>
                         <p style="color: green; font-size:1em;"> +1.2%</p>
                         <p></p>
                     </div>





                 </div>



         <?php
                endforeach;
            }
            ?>

         <div style="width: 7vw; display:flex; flex-direction: column; align-items:center; ">
             <i class='bx bxs-chevrons-right' style="color: white;font-size: 2.8em; background-color:#252525; border-radius:50%; padding:0.2vw; cursor:pointer"></i>
         </div>

     </div>

     <section class="section market" aria-label="market update" style="padding: 0;" data-section>


         <div class="title-wrapper">
             <h2 class="h2 section-title">Market Update</h2>
         </div>

         <div class="market-tab" style="overflow-x: hidden;">
             <div class="mask"></div>

             <ul class="tab-nav">

                 <li>
                     <button class="tab-btn active">View All</button>
                 </li>



                 <li>
                     <button class="tab-btn" type="submit" name="tabName" onclick="show()">Agriculture</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="automotive">Automotive</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="aviation">Aviation</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="beauty_and_cosmetics">Beauty and Cosmetics</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="biotechnology">Biotechnology</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="chemical">Chemical</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="construction">Construction</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="consulting">Consulting</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="education">Education</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="energy">Energy</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="engineering">Engineering</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="entertainment">Entertainment</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="fashion">Fashion</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="finance">Finance</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="food_and_beverage">Food and Beverage</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="healthcare">Healthcare</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="hospitality">Hospitality</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="insurance">Insurance</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="internet">Internet</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="legal">Legal</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="logistics">Logistics</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="manufacturing">Manufacturing</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="media">Media</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="mining">Mining</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="pharmaceutical">Pharmaceutical</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="publishing">Publishing</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="real_estate">Real Estate</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="retail">Retail</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="software">Software</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="sports">Sports</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="technology">Technology</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="telecommunications">Telecommunications</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="textile">Textile</button>
                 </li>
                 <li>
                     <button class="tab-btn" type="submit" name="tabName" value="travel_and_tourism">Travel and Tourism</button>
                 </li>
             </ul>


             <table class="market-table">

                 <thead class="table-head">

                     <tr class="table-row table-title">


                         <th class="table-heading" scope="col">#</th>

                         <th class="table-heading" scope="col">Name</th>

                         <th class="table-heading" scope="col">Last Price</th>

                         <th class="table-heading" scope="col">24h %</th>

                         <th class="table-heading" scope="col">Market Cap</th>

                         <th class="table-heading" scope="col">Last 7 Days</th>

                         <th class="table-heading"></th>

                     </tr>

                 </thead>

                 <tbody class="table-body">

                     <?php

                        foreach ($products as $product) :
                            $word = $product['product_name'];
                            $ticker = createAbbreviation($word);
                        ?>

                         <tr class="table-row">

                             <!-- <td class="table-data">
                                 <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                     <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                     <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                 </button>
                             </td> -->

                             <th class="table-data rank" scope="row">1</th>

                             <td class="table-data">
                                 <div class="wrapper">
                                     <div class="logo-wrapper" style="width: 40px; height: 40px; overflow:hidden; background-color:white; display:flex; align-items:center; border-radius:50%;">
                                         <img src=<?= $product['logo'] ?> width="100%" alt="Bitcoin logo" class="img">
                                     </div>

                                     <h3>
                                         <p href="#" class="coin-name"><?= $product['product_name'] ?>
                                             <span class="span">

                                                 <?= $ticker ?>
                                             </span>
                                         </p>
                                     </h3>
                                 </div>
                             </td>

                             <td class="table-data last-price">$56,623.54</td>

                             <td class="table-data last-update green">+1.45%</td>

                             <td class="table-data market-cap">$880,423,640,582</td>

                             <td class="table-data">
                                 <img src="/public/resource/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                             </td>



                         </tr>
                     <?php endforeach ?>



                 </tbody>

             </table>

         </div>


         <div class="overlay" id="overlay" style="display: none;">


             <form action="/user/invest" class="transaction_form" id="momoForm" method="POST">
                 <i class='bx bxs-x-circle' onclick="hide()"></i>
                 <h2 style="color: black;">Invest</h2>
                 <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                 <input type="text" class="nav-input" placeholder="Amount" id="amount" name="amount" oninput="updateInput2(this.value)">

                 <input type="hidden" value="" id="product_id" name="product_id">

                 <p style="font-size: 1em;color:red; align-self:flex-start; margin-left:5vw" id="error"></p>

                 <input type="text" class="nav-input" placeholder="0 Shares" id="shares_owned" name="shares_owned" value="" disabled>

                 <input type="submit" class="depositBtn" value="Invest" id="investBtn" onclick="investsubmit()">
             </form>

         </div>
     </section>



 </div>


 <script>
     var container = document.querySelector('.tab-nav');
     var buttons = document.querySelectorAll('.tab-btn');

     var position = 0;

     function moveButtons() {
         position -= 1; // Adjust the speed by changing this value
         container.style.transform = 'translateX(' + position + 'px)';

         // Reset position when it goes beyond the container width
         if (position < -container.offsetWidth) {
             position = 0;
         }
     }

     // Set the interval for moving buttons
     var intervalId = setInterval(moveButtons, 20); // Adjust the interval as needed

     // Stop moving buttons when the mouse enters the container
     container.addEventListener('mouseenter', function() {
         clearInterval(intervalId);
     });

     // Resume moving buttons when the mouse leaves the container
     container.addEventListener('mouseleave', function() {
         intervalId = setInterval(moveButtons, 20);
     });
 </script>

 <script src="/public/resource/market.js"></script>


 <script src="/public/resource/invest.js"></script>



 <script>
     var currentProductPrice;
     var product_id

     function invest(priceElement, productId) {
         document.getElementById("overlay").style.display = "block";
         document.querySelector(".transaction_form").style.display = "flex";

         currentProductPrice = priceElement;
         product_id = productId;

         document.getElementById('product_id').value = product_id;
         console.log(product_id);

         console.log(currentProductPrice);
     }


     function hide() {
         document.getElementById("overlay").style.display = "none";
         document.getElementById(".transaction_form").style.display = "none";
     }

     // Function to update Input 2 based on the value of Input 1
     function updateInput2(value) {
         // console.log(currentProductPrice);



         //  var productPrice = parseFloat(document.querySelector('.list-card p').innerText.replace('₵ ', ''));
         const updatedValue = value / currentProductPrice;
         console.log(updatedValue);



         // Update the value of Input 2
         document.getElementById('shares_owned').value = updatedValue;

         if (value > <?= $wallet['balance'] ?>) {
             document.getElementById('investBtn').disabled = true
             document.getElementById('investBtn').style.backgroundColor = "#999"
             document.getElementById('amount').style.borderBottomColor = "red"
             document.getElementById('error').innerText = "Not Enough Balance"

         }
         if (value < <?= $wallet['balance'] ?>) {
             document.getElementById('investBtn').disabled = false
             document.getElementById('investBtn').style.backgroundColor = "#276221"
             document.getElementById('amount').style.borderBottomColor = "#276221"
             document.getElementById('error').innerText = ""
         }


     }

     function investsubmit() {
         document.getElementById('shares_owned').disabled = false;

     }
 </script>