<main>
    <article>

        <!-- 
        - #HERO
      -->

        <section class="section hero" aria-label="hero" data-section>
            <div class="index-container">

                <div class="hero-content">

                    <h1 class="h1 hero-title">Grow Your Wealth With GO.</h1>

                    <p class="hero-text">
                        Build your portfolio and get the market insight you need to execute your investing strategies. Customized investment solutions tailored to meet your unique needs
                    </p>

                    <a href="/register" class="btn btn-primary" style="display: flex; align-items:center; color:white; font-size:0.8em">Get started now <i class='bx bxs-chevrons-right' style="margin-left: 1vw;"></i></a>

                </div>

                <!-- <figure class="hero-banner">
                    <img src="/public/resource/assets/images/hero-banner.png" width="570" height="448" alt="hero banner" class="w-100">
                </figure> -->

            </div>
        </section>





        <!-- 
        - #TREND
      -->

        <section class="section trend" aria-label="crypto trend" data-section>
            <div class="index-container">

                <div class="trend-tab">


                    <ul class="tab-nav">
                        <li>
                            <button class="tab-btn active">All</button>
                        </li>
                        <?php foreach ($products as $product) : ?>
                            <li>
                                <button class="tab-btn"><?= $product['product_name'] ?> </button>
                            </li>
                        <?php endforeach ?>





                    </ul>

                    <ul class="tab-content" style="overflow-x: scroll;">
                        <?php

                        foreach ($products as $product) :
                            $word = $product['product_name'];
                            $ticker = createAbbreviation($word);
                        ?>
                            <li>
                                <div class="trend-card">

                                    <div class="card-title-wrapper">
                                        <img src=<?= $product['logo'] ?> width="24" height="24" alt="<?= $product['product_name'] ?> logo">

                                        <a href="#" class="card-title">
                                            <?= $product['product_name'] ?>
                                            <span class="span"><?= $ticker ?></span>
                                        </a>
                                    </div>

                                    <data class="card-value" value="46168.95">USD 46,168.95</data>

                                    <div class="card-analytics">
                                        <data class="current-price" value="36641.20">36,641.20</data>

                                        <div class="badge red">-0.79%</div>
                                    </div>

                                </div>
                            </li>
                        <?php endforeach ?>
                        <!-- <li>
                            <div class="trend-card active">

                                <div class="card-title-wrapper">
                                    <img src="/public/resource/assets/images/coin-2.svg" width="24" height="24" alt="ethereum logo">

                                    <a href="#" class="card-title">
                                        Ethereum <span class="span">ETH/USD</span>
                                    </a>
                                </div>

                                <data class="card-value" value="3480.04">USD 3,480.04</data>

                                <div class="card-analytics">
                                    <data class="current-price" value="36641.20">36,641.20</data>

                                    <div class="badge green">+10.55%</div>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="trend-card">

                                <div class="card-title-wrapper">
                                    <img src="/public/resource/assets/images/coin-3.svg" width="24" height="24" alt="tether logo">

                                    <a href="#" class="card-title">
                                        Tether <span class="span">USDT/USD</span>
                                    </a>
                                </div>

                                <data class="card-value" value="1.00">USD 1.00</data>

                                <div class="card-analytics">
                                    <data class="current-price" value="36641.20">36,641.20</data>

                                    <div class="badge red">-0.01%</div>
                                </div>

                            </div>
                        </li> -->

                        <!-- <li>
                            <div class="trend-card">

                                <div class="card-title-wrapper">
                                    <img src="/public/resource/assets/images/coin-4.svg" width="24" height="24" alt="bnb logo">

                                    <a href="#" class="card-title">
                                        BNB <span class="span">BNB/USD</span>
                                    </a>
                                </div>

                                <data class="card-value" value="443.56">USD 443.56</data>

                                <div class="card-analytics">
                                    <data class="current-price" value="36641.20">36,641.20</data>

                                    <div class="badge red">-1.24%</div>
                                </div>

                            </div>
                        </li> -->

                    </ul>

                </div>

            </div>
        </section>





        <!-- 
        - #MARKET
      -->


        <section class="section market" aria-label="market update" data-section>


            <div class="title-wrapper">
                <h2 class="h2 section-title">Market Update</h2>
            </div>

            <div class="market-tab" style="overflow-x: hidden;">
                <div class="mask"></div>

                <ul class="tab-nav" id="market-tab-nav">

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

                                <td class="table-data">
                                    <?php if (isset($user_no)) { ?>
                                        <button class="btn btn-outline" onclick="invest(<?= $product['price'] ?>, <?= $product['product_id'] ?>)">Invest</button>

                                    <?php } else { ?>
                                        <a href=""></a>

                                    <?php } ?>
                                    <!-- <button class="btn btn-outline">Trade</button> -->
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

        <!-- <section class="section index-market" aria-label="market update" data-section>
            <div class="index-container">

                <div class="title-wrapper">
                    <h2 class="h2 section-title">Market Update</h2>

                    <a href="#" class="btn-link">See All Coins</a>
                </div>

                <div class="index-market-tab">

                    <ul class="tab-nav">

                        <li>
                            <button class="tab-btn active">View All</button>
                        </li>

                        <li>
                            <button class="tab-btn">Metaverse</button>
                        </li>

                        <li>
                            <button class="tab-btn">Entertainment</button>
                        </li>

                        <li>
                            <button class="tab-btn">Energy</button>
                        </li>

                        <li>
                            <button class="tab-btn">NFT</button>
                        </li>

                        <li>
                            <button class="tab-btn">Gaming</button>
                        </li>

                        <li>
                            <button class="tab-btn">Music</button>
                        </li>

                    </ul>

                    <table class="index-market-table">

                        <thead class="table-head">

                            <tr class="table-row table-title">

                                <th class="table-heading"></th>

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

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">1</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-1.svg" width="20" height="20" alt="Bitcoin logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Bitcoin <span class="span">BTC</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update green">+1.45%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">2</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-2.svg" width="20" height="20" alt="Ethereum logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Ethereum <span class="span">ETH</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update red">-5.12%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">3</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-3.svg" width="20" height="20" alt="Tether logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Tether <span class="span">USDT/USD</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update green">+1.45%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">4</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-4.svg" width="20" height="20" alt="BNB logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">BNB <span class="span">BNB/USD</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update red">-3.75%%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">5</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-5.svg" width="20" height="20" alt="Solana logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Solana <span class="span">SOL</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update green">+1.45%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">6</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-6.svg" width="20" height="20" alt="XRP logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">XRP <span class="span">XRP</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update red">-2.22%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-2.svg" width="100" height="40" alt="loss chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">7</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-7.svg" width="20" height="20" alt="Cardano logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Cardano <span class="span">ADA</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update green">+0.8%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                            <tr class="table-row">

                                <td class="table-data">
                                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                                        <ion-icon name="star-outline" aria-hidden="true" class="icon-outline"></ion-icon>
                                        <ion-icon name="star" aria-hidden="true" class="icon-fill"></ion-icon>
                                    </button>
                                </td>

                                <th class="table-data rank" scope="row">8</th>

                                <td class="table-data">
                                    <div class="wrapper">
                                        <img src="/public/resource/assets/images/coin-8.svg" width="20" height="20" alt="Avalanche logo" class="img">

                                        <h3>
                                            <a href="#" class="coin-name">Avalanche <span class="span">AVAX</span></a>
                                        </h3>
                                    </div>
                                </td>

                                <td class="table-data last-price">$56,623.54</td>

                                <td class="table-data last-update green">+1.41%</td>

                                <td class="table-data market-cap">$880,423,640,582</td>

                                <td class="table-data">
                                    <img src="/public/resource/assets/images/chart-1.svg" width="100" height="40" alt="profit chart" class="chart">
                                </td>

                                <td class="table-data">
                                    <button class="btn btn-outline">Trade</button>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
        </section> -->





        <!-- 
        - #INSTRUCTION
      -->

        <section class="section instruction" aria-label="instruction" data-section>
            <div class="index-container">

                <h2 class="h2 section-title">How It Work</h2>

                <p class="section-text">

                    Go Investment is a premier investment company that provides investment opportunities through public listing.
                </p>

                <ul class="instruction-list">

                    <li>
                        <div class="instruction-card">

                            <figure class="card-banner">
                                <img src="/public/resource/assets/images/instruction-1.png" width="96" height="96" loading="lazy" alt="Step 1" class="img">
                            </figure>

                            <p class="card-subtitle">Step 1</p>

                            <h3 class="h3 card-title">Download</h3>

                            <!-- <p class="card-text">
                                Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                            </p> -->

                        </div>
                    </li>

                    <li>
                        <div class="instruction-card">

                            <figure class="card-banner">
                                <img src="/public/resource/assets/images/instruction-2.png" width="96" height="96" loading="lazy" alt="Step 2" class="img">
                            </figure>

                            <p class="card-subtitle">Step 2</p>

                            <h3 class="h3 card-title">Connect Wallet</h3>

                            <!-- <p class="card-text">
                                Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                            </p> -->

                        </div>
                    </li>

                    <li>
                        <div class="instruction-card">

                            <figure class="card-banner">
                                <img src="/public/resource/assets/images/instruction-3.png" width="96" height="96" loading="lazy" alt="Step 3" class="img">
                            </figure>

                            <p class="card-subtitle">Step 3</p>

                            <h3 class="h3 card-title">Start Trading</h3>

                            <!-- <p class="card-text">
                                Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                            </p> -->

                        </div>
                    </li>

                    <li>
                        <div class="instruction-card">

                            <figure class="card-banner">
                                <img src="/public/resource/assets/images/instruction-4.png" width="96" height="96" loading="lazy" alt="Step 4" class="img">
                            </figure>

                            <p class="card-subtitle">Step 4</p>

                            <h3 class="h3 card-title">Earn Money</h3>

                            <!-- <p class="card-text">
                                Stacks Is A Production-Ready Library Of Stackable Content Blocks Built In React Native.
                            </p> -->

                        </div>
                    </li>

                </ul>

            </div>
        </section>





        <!-- 
        - #ABOUT
      -->

        <section class="section about" aria-label="about" data-section>
            <div class="index-container">

                <figure class="about-banner">
                    <img src="/public/resource/assets/images/about-banner.png" width="748" height="436" loading="lazy" alt="about banner" class="w-100">
                </figure>

                <div class="about-content">

                    <h2 class="h2 section-title" style="font-size: 1.2em;">What Is Go Investment</h2>

                    <p class="section-text">

                        Go Investment is a premier investment company that is dedicated to providing a wide range of investment opportunities for individuals and institutions through public listing.
                    </p>

                    <ul class="section-list">

                        <li class="section-item">
                            <div class="title-wrapper">
                                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                <h3 class="h3 list-title" style="font-size: 1.2em;">Get Started Today Grow With Go</h3>
                            </div>

                            <p class=" item-text">
                                Build your portfolio and get the market insight you need to execute your investing strategies
                            </p>
                        </li>

                        <li class="section-item">
                            <div class="title-wrapper">
                                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                                <h3 class="h3 list-title" style="font-size: 1.2em;">Invest in your favorite Companies</h3>
                            </div>

                            <p class="item-text">
                                Find the most suitable stock from thousands of stock made available. Monitor the stocks in real time, easily and accurately
                            </p>
                        </li>

                    </ul>

                    <a href="/register" class="btn btn-primary" style="display: flex; align-items:center; color:white; font-size:0.8em">Explore More</a>

                </div>

            </div>
        </section>





        <!-- 
        - #APP
      -->

        

    </article>

    <script>
        var container = document.getElementById('market-tab-nav');
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
</main>




<script src="/public/resource/assets/js/script.js"></script>

<!-- 
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<!-- <main class="home">
    <section class="left">
        <span class="tip">Invest Now</span>
        <div class="comment">
            <h1>Grow Your <br> Wealth With <br>GO.</h1>
            <p>Build your portfolio and get the market insight you need to execute your investing strategies. Customized investment solutions tailored to meet your unique needs</p>
        </div>
        <a href="/register" class="icon">Start Investing <i class='bx bxs-chevrons-right'></i></a>

    </section>

</main>

<main class="listed-companies carousel">
    <div class="wrapper-card">

        <div class="header">
            <h1 class="header__title">Top Trending</h1>
        </div>

        <div class="cards">
            <?php foreach ($companies as $company) : ?>
                <div class="card">
                    <div class="card__inner">
                        <div class="card-head">
                            <img src="<?= $company['company_logo'] ?>" alt="">
                        </div>

                        <div class="caption">
                            <div class="cap-head">
                                <p class="cap-title">
                                    <span class="com-name"> <?= $company['company_name'] ?></span>
                                    <span class="com-industry">(<?= $company['industry'] ?>)</span>
                                </p>
                                <p class="price">
                                    ₵ <?= $company['stock_price'] ?>
                                </p>
                            </div>
                            <div class="cap-body">
                                <p><?= $company['description'] ?></p>
                                <a href="">More Info <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>


                    </div>
                </div>

            <?php endforeach; ?>
        </div>

    </div>

    </div>
</main> 

<main class="analysis">
    <section class="left">
        <div>
            <span class="tip">Built For You</span>
            <h1>
                Access the powerful investing Tools
            </h1>
        </div>
        <p>
            Power your stock analysis with our stock comparison tool that makes it easy to analyze market
        </p>
    </section>
    <section class="right">
        <div class="row">
            <div class="content">
                <h1>20%</h1>
                <p>Customer Recurrence</p>
            </div>
            <div class="content">
                <h1>45K</h1>
                <p>Daily Transaction</p>
            </div>
        </div>
        <div class="row">
            <div class="content">
                <h1>12M</h1>
                <p>Users Every Year</p>
            </div>
            <div class="content">
                <h1>2+</h1>
                <p>Years In The Market</p>
            </div>
        </div>
    </section>
</main>

<main class="list">
    <section class="left">
        <img src="public/resource/images/Stock.jpg" alt="">
    </section>
    <section class="right">
        <div>
            <span class="tip">Market List</span>
            <h1>Invest in your favorite Companies</h1>
        </div>
        <p>Find the most suitable stock from thousands of stock made available. Monitor the stocks in real time, easily and accurately</p>
        <a href="/listing" class="icon">Learn More <i class='bx bxs-chevrons-right'> </i></a>
    </section>
</main>

<main class="start">
    <div class="content">
        <span class="tip">Invest Now</span>
        <h1>Get Started Today Grow With Go</h1>
        <p>Build your portfolio and get the market insight you need to execute your investing strategies</p>

        <a href="/register" class="icon">Get Started Today <i class='bx bxs-chevrons-right'></i></a>
    </div>
</main>  -->