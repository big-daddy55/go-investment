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