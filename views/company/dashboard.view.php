<?php

use Core\Database;

$db = new Database();
?>

<div class="dashboard-main main" style="background: linear-gradient(to bottom, #00010a, #00051d); height:auto; display:block;">
    <div class="horizontal-bar dark-bg">
        <h2 class="page-title">Dashboard</h2>

    </div>

    <div class="dashboard-mid" style="display:flex; justify-content:space-between">

        <section class="dashboard-left">

            <div class="analytics">
                <div class="analytic-card dark-bg" id="product">
                    <div class="icon-side">
                        <i class='bx bx-package'></i>
                    </div>
                    <div class="body">
                        <p>Total Products</p>
                        <h3>3</h3>
                        <p>10% increase</p>
                    </div>
                </div>
                <div class="analytic-card dark-bg" id="investors">
                    <div class="icon-side">
                        <i class='bx bxs-user-plus'></i>
                    </div>
                    <div class="body">
                        <p>Total Investors</p>
                        <h3>3</h3>
                        <p>10% increase</p>
                    </div>
                </div>
                <div class="analytic-card dark-bg" id="revenue">
                    <div class="icon-side">
                        <i class='bx bxs-dollar-circle'></i>
                    </div>
                    <div class="body">
                        <p>Revenue</p>
                        <h3>₵ 3,000</h3>
                        <p>10% decrease</p>
                    </div>
                </div>
            </div>

            <div class="transaction-section dark-bg">
                <h2 style="color: white;">Latest Transaction</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($transactions)) { ?>
                            <?php foreach ($transactions as $transaction) : ?>
                                <tr>
                                    <td>

                                        <p>₵ <?= number_format($transaction['amount']) ?></p>
                                    </td>
                                    <td><?= $transaction['date'] ?></td>
                                    <td><?= $transaction['transaction_type'] ?></td>
                                    <td><span class="status completed"><?= $transaction['status'] ?></span></td>
                                </tr>
                        <?php endforeach;
                        } ?>


                    </tbody>
                </table>
            </div>

            <div class="chart-section dark-bg">
                <h2 style="color: white;">Weekly Recap</h2>
                <?php view('company/chart.php') ?>
            </div>
        </section>

        <section class="dashboard-right">
            <div class="products dark-bg">
                <h2 style="color: white;">Investors</h2>
                <?php
                if (!empty($invested_companies)) {
                    foreach ($invested_companies as $invested_company) : ?>
                        <?php
                        // dd($invested_company['user_no']);


                        $investors = $db->query("SELECT * FROM client WHERE user_no = :user_no", [
                            'user_no' => $invested_company['user_no'],
                        ])->findAll();



                        foreach ($investors as $investor) :
                            $product = $db->query("SELECT * FROM product WHERE product_id = :product_id", [
                                'product_id' => $invested_company['product_id']
                            ])->find();

                            // dd($product);
                        ?>



                            <div class="row">
                                <div class="dashboard-icon-holder" style="width:3.8vw; height:3.8vw ;">
                                    <img src=<?= $investor['profile_photo'] ?> alt="">
                                </div>

                                <div style="display: flex; flex-direction:column; align-items:center; margin-left: 1vw;">
                                    <h2 style="margin-left: 0;"><?= $investor['first_name'] ?> <?= $investor['last_name'] ?> </h2>
                                    <p>Invested ₵ <?= $invested_company['amount_invested'] ?> In</p>
                                    <p style="color:white; font-weight:800; align-self:first baseline"> <?= $product['product_name'] ?></p>

                                </div>


                                <!-- <h2><?= $product['product_name'] ?></h2> -->
                            </div>
                <?php endforeach;
                    endforeach;
                }
                ?>


            </div>
        </section>
    </div>

</div>

<script src="/public/resource/orders.js"></script>
<script src="/public/resource/dash.js"></script>
<script src="/public/resource/nav.js"></script>