<section class="main">
    <h2 style="margin: 2vh 0; text-align:center; color: #292929; font-weight: 800;">SELECT A PRODUCT TO PROMOTE</h2>
    <section style="display:flex; justify-content:space-between; width: 95%; padding: 0 2vw" class="promotion-product-card">
        <?php foreach ($products as $product) : ?>
            <div class="product-card" style="margin-top: 0; display:flex; align-items:center" onclick="show( '<?= $product['product_name'] ?>', <?= $product['logo'] ?>)">
                <div class="logo-container">
                    <img src=<?= $product['logo'] ?> alt="">
                </div>
                <h2 style="font-size: 1.6em; font-weight:700"><?= $product['product_name'] ?></h2>
            </div>

        <?php endforeach; ?>

    </section>

    <div class="overlay" id="overlay" style="background-color: black; display: none; left: 18vw; overflow-y:scroll">
        <section class="price-packages">
            <h2>Choose Your Plan</h2>

            <section class="product" style="display: flex; background-color:rgba(255, 255, 255, 0.03); padding:1vw 2vw; border-radius:20px; border:1px solid white; align-items:center">
                <div class="logo-container" style="border: 1px solid white; background-color:white; width:3vw; height:3vw; margin-right:1.2vw">
                    <img src='' alt="" id="logo-icon" style="width: 100%;">
                </div>
                <h2 class="name" id="name" style="display: block; color:white; font-size:1.3em">

                </h2>
            </section>

            <section class="prices-container">

                <section class="prices" id="bronze">
                    <section>
                        <h3>Bronze</h3>
                        <p>Basic Promotion is active for 24hours (1 Day). This includes company name, industry and brief description.</p>
                    </section>

                    <div>
                        <p class="currency">
                            ₵
                        </p>
                        <p class="price-amount">100.00</p>
                    </div>

                    <section class="services">
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Basic business listing on the platform
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Exposure to potential investors browsing the platform
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Limited visibility in search results
                        </li>
                    </section>

                    <button style="margin-top: 10vh;">Promote</button>

                    <section class="time-container">
                        <p>Time Duration</p>
                        <h2>24 Hours</h2>
                    </section>
                </section>


                <section class="prices" id="silver">
                    <section>
                        <h3>Silver</h3>
                        <p>Silver Promotion is active for 72 hours (3 Days). This includes company logo, website link, and contact information.</p>
                    </section>

                    <div>
                        <p class="currency">
                            ₵
                        </p>
                        <p class="price-amount">300.00</p>
                    </div>


                    <section class="services">
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Enhanced business listing on the platform.
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Priority placement in search results within the platform.
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Access to basic analytics on profile views and investor interest
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Promotion on social media channels of the listing company
                        </li>
                    </section>

                    <button>Promote</button>


                    <section class="time-container">
                        <p>Time Duration</p>
                        <h2 style="align-self: center;">72 Hours</h2>
                    </section>
                </section>


                <section class="prices" id="gold">
                    <section>
                        <h3>Gold</h3>
                        <p>Gold Promotion is active for 144 Hours (6 Days). This includes detailed company profile such as mission statement, team members, and financial highlights.</p>
                    </section>

                    <div>
                        <p class="currency">
                            ₵
                        </p>
                        <p class="price-amount">600.00</p>
                    </div>


                    <section class="services">

                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Featured placement on the platform's homepage and top search results.
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Dedicated account manager for personaliized assistance and support
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Advanced analytics and insights on investor engagement and interaction
                        </li>
                        <li>
                            <i class='bx bxs-badge-check correct-sign'></i>Exclusive promotional opportunities, such as sponsored content and webinars
                        </li>
                    </section>

                    <button>Promote</button>

                    <section class="time-container">
                        <p>Time Duration</p>
                        <h2>144 Hours</h2>
                    </section>
                </section>

            </section>

        </section>
    </div>


</section>

<script>
    function show(product_name, logo_source) {
        console.log(product_name);
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('name').innerHTML = product_name;
        document.getElementById('logo-icon').src = logo_source;


    }
</script>