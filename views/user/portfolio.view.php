<?php

use Core\Database;

$db = new Database();
?>
<div class="product-main">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>


    <section class="left">
        <div class="user_profile">
            <div class="head">
                <div class="logo">
                    <img src=<?= $user['profile_photo'] ?> alt="">
                </div>
                <div class="user-details">
                    <h2 style="text-align: center;"><?= $user['first_name'] ?> <?= $user['last_name'] ?></h2>
                    <div>
                        <p><?= $user['email'] ?></p>
                        <p>|</p>
                        <p><?= $user['phone_number'] ?></p>

                    </div>
                </div>
            </div>


            <div class="market-time">
                <p id="countdown-comment">Market Closes in:</p>
                <h1 id="countdown"></h1>
                <div id="progress-bar">
                    <div id="progress-bar-fill"></div>
                </div>

            </div>
        </div>
    </section>
    <section class="right portfolio">
        <div class="section-header" style="display: flex; justify-content:space-between; align-items:center; color:white;">
            <h2 class="asset">Assets</h2>
            <a href="#">View All Assets</a>
        </div>
        <div class="list-container portfolio-list-container">

            <?php

            if (!empty($invested_companies)) {
                foreach ($invested_companies as $invested_company) : ?>
                    <?php
                    $products = $db->query("SELECT * FROM product WHERE product_id = :product_id", [
                        'product_id' => $invested_company['product_id']
                    ])->findAll();
                    foreach ($products as $product) : ?>
                        <?php
                        $db = new Database();
                        $company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
                            'user_no' => $product['user_no']
                        ])->find();
                        ?>
                        <div class="list-card" id="portfolio-list-card">

                            <div class="card-head" id="portfolio-card-head">
                                <div style="display: flex; flex-direction:column;">
                                    <h4 style="margin-bottom: 0;"><?= $product['product_name'] ?></h4>
                                    <?php
                                    $word = $product['product_name'];
                                    // dd($word);
                                    $ticker = createAbbreviation($word);
                                    ?>
                                    <p style="color: rgb(12, 12, 121); font-size: 0.8em;"><?= $ticker ?></p>
                                </div>
                                <div id="logo">
                                    <a href="/user/product?company_no=<?= $product['user_no'] ?>">
                                        <img src=<?= $product['logo'] ?> alt="">
                                    </a>
                                </div>
                            </div>

                            <div style="display: flex; align-items:center;  margin-bottom:3vh;">
                                <i class='bx bxs-chevrons-up' style="color: green;font-size:1em;margin-right: 0.5vw;"></i>
                                <p style="color: green; font-size:1em;"> +1.2%</p>
                                <p></p>
                            </div>
                            <!-- <p>Name of Product: </p> -->

                            <p style="text-align: left; font-weight:400; font-size: 0.8em;">Your shares: </p>
                            <div id="portfolio-card-body">
                                <p style="font-size: 1.4em;"><?= round($invested_company['shares_owned'], 2) ?></p>
                                <p style="font-size: 0.8em;">₵ <?= number_format($invested_company['amount_invested']) ?></p>
                            </div>

                            <div class="area-chart" id="chart-<?= $product['product_id'] ?>" style="width: 100%;"></div>

                        </div>

                        <script>
                            // AREA CHART
                            const areaChartOptions<?= $product['product_id'] ?> = {
                                // ... (your existing options) ...

                                series: [{
                                        name: 'Purchase Orders',
                                        data: [31, 40, 28, 51, 42, 109, 100],
                                    },
                                    {
                                        name: 'Sales Orders',
                                        data: [11, 32, 45, 32, 34, 52, 41],
                                    },
                                ],
                                chart: {
                                    type: 'area',
                                    background: 'transparent',
                                    height: 100,
                                    // width: 200,
                                    stacked: false,
                                    toolbar: {
                                        show: false,
                                    },
                                },
                                colors: ['#00ab57', '#d50000'],

                                dataLabels: {
                                    enabled: false,
                                },
                                fill: {
                                    gradient: {
                                        opacityFrom: 0.4,
                                        opacityTo: 0.1,
                                        shadeIntensity: 1,
                                        stops: [0, 50],
                                        type: 'vertical',
                                    },
                                    type: 'gradient',
                                },
                                grid: {
                                    borderColor: '#55596e',
                                    yaxis: {
                                        lines: {
                                            show: false,
                                        },
                                    },
                                    xaxis: {
                                        lines: {
                                            show: false,
                                        },
                                    },
                                },
                                legend: {
                                    labels: {
                                        colors: '#000000',
                                    },
                                    show: false,
                                    position: 'top',
                                },
                                markers: {
                                    size: 0,
                                    strokeColors: '#1b2635',
                                    strokeWidth: 1,
                                },
                                stroke: {
                                    curve: 'smooth',
                                },
                                xaxis: {
                                    axisBorder: {
                                        color: '#55596e',
                                        show: false,
                                    },
                                    axisTicks: {
                                        color: '#55596e',
                                        show: false,
                                    },
                                    labels: {
                                        offsetY: 1,
                                        show: false,
                                        style: {
                                            colors: '#000000',
                                        },
                                    },
                                },
                                yaxis: [{

                                        labels: {
                                            show: false,
                                            style: {
                                                colors: ['#000000'],
                                            },
                                        },
                                    },
                                    {
                                        opposite: true,
                                        // title: {
                                        //   text: 'Sales Orders',
                                        //   style: {
                                        //     color: '#000000',
                                        //   },
                                        // },
                                        labels: {
                                            show: false,
                                            style: {
                                                colors: ['#f5f7ff'],
                                            },
                                        },
                                    },
                                ],
                                tooltip: {
                                    shared: true,
                                    intersect: false,
                                    theme: 'dark',
                                },
                            };

                            const areaChart<?= $product['product_id'] ?> = new ApexCharts(
                                document.querySelector(`#chart-<?= $product['product_id'] ?>`),
                                areaChartOptions<?= $product['product_id'] ?>
                            );
                            areaChart<?= $product['product_id'] ?>.render();
                        </script>

            <?php endforeach;
                endforeach;
            }
            ?>
        </div>

        <div class="watchlist-container">
            <h2 style="color: white;">Watchlist</h2>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Industry</th>
                        <th>Net Change</th>
                        <th>Net Change %</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($all_products as $product) : ?>
                        <?php
                        $companies = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
                            'user_no' => $product['user_no']
                        ])->findAll();


                        $word = $product['product_name'];
                        // dd($word);
                        $ticker = createAbbreviation($word);
                        ?>

                        <tr>
                            <td class="table-name">
                                <div class="table-logo">
                                    <img src=<?= $product['logo'] ?> alt="">
                                </div>
                                <p><?= $ticker ?></p>
                            </td>

                            <td> ₵ <?= $product['price'] ?></td>
                            <?php foreach ($companies as $company) : ?>
                                <td><?= $company['industry'] ?></td>
                            <?php endforeach; ?>

                            <td>0.34</td>
                            <td><?= 0.34 * 100 ?> %</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>


        </div>
    </section>

    <div class="overlay" id="overlay">

        <div class="form-container">
            <form action="/user/pay" class="transaction_form" id="momoForm" method="POST">
                <i class='bx bxs-x-circle' onclick="hide()"></i>
                <h2>Invest</h2>
                <input type="text" class="nav-input" id="phoneNumber" placeholder="Phone Number <?= $user['phone_number'] ?>" name="phone_number">

                <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                <input type="text" class="nav-input" placeholder="Amount" id="amount" name="amount">
                <input type="submit" class="depositBtn" value="Deposit">
            </form>
        </div>
    </div>
</div>

<!-- ApexCharts -->
<!-- Custom JS -->
<!-- <script src="/public/resource/chart.js"></script> -->




<script>
    function invest() {
        document.getElementById("overlay").style.display = "block";
        document.querySelector(".transaction_form").style.display = "flex";
    }

    function hide() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById(".transaction_form").style.display = "none";
    }
</script>

<script>
    // Function to format the time as HH:MM:SS
    function formatTime(seconds) {
        const hours = Math.floor(seconds / 3600);
        const minutes = Math.floor((seconds % 3600) / 60);
        const remainingSeconds = seconds % 60;
        return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(remainingSeconds).padStart(2, '0')}`;
    }

    // Function to update the countdown
    function updateCountdown() {
        const now = new Date();
        const targetTime = new Date(now);
        // console.log(targetTime);
        targetTime.setHours(6, 0, 0, 0); // Set the target time to 6:00 AM

        targetTime.setHours(targetTime.getHours() + 20);

        const timeDifference = Math.floor((targetTime - now) / 1000);
        // console.log(timeDifference);

        if (timeDifference <= 0) {
            // Countdown is over, disable buttons
            disableButtons();
            document.getElementById('countdown').textContent = '00:00:00';
            document.getElementById('countdown-comment').textContent = 'Market Closed';

        } else {
            // Update countdown and schedule next update
            document.getElementById('countdown').textContent = `${formatTime(timeDifference)}`;

            const progressBarFill = document.getElementById('progress-bar-fill');
            const progressPercentage = ((20 * 3600 - timeDifference) / (20 * 3600)) * 100;
            progressBarFill.style.width = progressPercentage + '%';
            setTimeout(updateCountdown, 1000);
        }
    }

    // Function to disable buttons
    function disableButtons() {
        const buttons = document.getElementsByClassName('invest');
        for (const button of buttons) {
            button.disabled = true;
        }
    }

    // Start the countdown
    updateCountdown();
</script>