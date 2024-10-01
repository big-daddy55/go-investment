        <main>
            <div class="header">
                <div class="left">
                    <h1>Wallet</h1>
                </div>

            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            ₵ <?= number_format($wallet['balance']) ?>
                        </h3>
                        <p>Wallet Balance</p>
                    </span>
                    <button class="deposit" onclick="showDepositForm()">  Deposit  </button>
                    <button class="withdraw" onclick="showWithdrawForm()"> Withdraw </button>
                </li>
            </ul>
            <?php if (isset($errors)) : ?>
                <p class="error-message" style="color: red; text-align: center;">
                    <?= $errors ?>
                </p>
            <?php endif; ?>
            <div class="overlay" id="overlay">

                <div class="form-container">
                    <form action="/deposit" class="transaction_form" method="POST" id="depositForm" style="width: 30%;">
                        <i class='bx bxs-x-circle' onclick="hide()"></i>
                        <h2 style="font-size: 3em;">Deposit</h2>

                        <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                        <input type="text" class="nav-input" placeholder="Amount" name="amount" style="width: 90%;">
                        <input type="submit" class="depositBtn" value="Deposit" style="width: 90%; background-color:black">
                    </form>
                </div>
                <div class="form-container">
                    <form action="/user/withdraw" class="transaction_form" method="POST" id="withdrawForm">
                        <i class='bx bxs-x-circle' onclick="hide()"></i>
                        <h2>Withdraw</h2>

                        <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                        <input type="text" class="nav-input" placeholder="Amount" name="amount">
                        <input type="submit" class="depositBtn" value="withdraw">
                    </form>
                </div>
            </div>
            <!-- End of Insights -->

            <div class="bottom-data">
                <div class="transactions">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Transactions</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
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

                                            <p><?= number_format($transaction['amount']) ?></p>
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

                <!-- Product -->
                <div class="reminders">
                    <div class="header">
                        <h3>Product Invested</h3>
                    </div>

                   
                        <?php

                        use Core\Database;

                        $db = new Database();

                        if (!empty($invested_companies)) {
                            foreach ($invested_companies as $invested_company) : ?>

                                <?php
                                $products = $db->query("SELECT * FROM product WHERE product_id = :product_id", [
                                    'product_id' => $invested_company['product_id']
                                ])->findAll();

                                foreach ($products as $product) : ?>
                                    <div class="list-card" id="portfolio-list-card" style="border-bottom: 1px solid #333333; margin-bottom: 1vh;">

                                        <div class="card-head" id="portfolio-card-head" style=" display: grid;grid-template-columns: repeat(4, 1fr); justify-content:center">
                                            <div id="logo" style="align-self: center;">
                                                <a href="/user/product?company_no=<?= $product['user_no'] ?>">
                                                    <img src=<?= $product['logo'] ?> alt="">
                                                </a>
                                            </div>

                                            <div>
                                                <h4 style="margin-bottom: 0; font-size:1.1em; font-weight:700"><?= $product['product_name'] ?></h4>
                                                <?php
                                                $word = $product['product_name'];
                                                // dd($word);
                                                $ticker = createAbbreviation($word);
                                                ?>
                                                <p style="color: rgb(12, 12, 121); font-size: 0.8em; margin-bottom: 0;"><?= $ticker ?></p>
                                            </div>

                                            <div style="display: flex; align-items:center;  margin-bottom:0;">
                                                <i class='bx bxs-chevrons-up' style="color: green;font-size:1em;margin-right: 0.5vw;"></i>
                                                <p style="color: green; font-size:1em; margin-bottom: 0;"> +1.2%</p>
                                                <p></p>
                                            </div>

                                            <div>
                                                <p style="text-align: left; font-weight:400; font-size: 0.8em; margin-bottom: 0;">Your shares: </p>
                                                <div id="portfolio-card-body">
                                                    <p style="font-size: 1.4em;"><?= round($invested_company['shares_owned'], 2) ?></p>
                                                </div>
                                            </div>


                                        </div>


                                        <!-- <p>Name of Product: </p> -->



                                    </div>

                        <?php endforeach;
                            endforeach;
                        }
                        ?>
                    

                </div>

                <!-- End of Reminders-->

            </div>

        </main>


        <script src="https://js.paystack.co/v1/inline.js"></script>

        <script>
            var paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener('submit', payWithPaystack, false);

            function payWithPaystack() {
                var handler = PaystackPop.setup({
                    key: 'YOUR_PUBLIC_KEY', // Replace with your public key
                    email: document.getElementById('email-address').value,
                    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                    ref: 'YOUR_REFERENCE', // Replace with a reference you generated
                    callback: function(response) {
                        //this happens after the payment is completed successfully
                        var reference = response.reference;
                        alert('Payment complete! Reference: ' + reference);
                        // Make an AJAX call to your server with the reference to verify the transaction
                    },
                    onClose: function() {
                        alert('Transaction was not completed, window closed.');
                    },
                });
                handler.openIframe();
            }
        </script>


        <script>
            function showDepositForm() {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("depositForm").style.display = "flex";
                document.getElementById("withdrawForm").style.display = "none";
            }

            function showWithdrawForm() {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("depositForm").style.display = "none";
                document.getElementById("withdrawForm").style.display = "flex";
            }

            function hide() {
                document.getElementById("overlay").style.display = "none";
                document.getElementById("depositForm").style.display = "none";
                document.getElementById("withdrawForm").style.display = "none";
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.momo-select').select2({
                    templateResult: formatOption
                });

                function formatOption(option) {
                    if (!option.id) {
                        return option.text;
                    }
                    var $option = $(
                        '<span><img src="/public/resource/images/' + $(option.element).data('image') + '" class="img-flag" style="width:20px;" />' + option.text + '</span>'
                    );
                    return $option;
                }
            });
        </script>