



        <div>
            <div class="list-container" id="main-list-container">

                <?php

                use Core\Database;

                if (!empty($products)) {
                    foreach ($products as $product) : ?>
                        <div class="list-card">
                            <!-- <p><?= $product['user_no'] ?></p> -->

                            <?php
                            $db = new Database();
                            $company = $db->query("SELECT * FROM company WHERE user_no = :user_no", [
                                'user_no' => $product['user_no']
                            ])->find();
                            ?>
                            <a href="/user/product?company_no=<?= $product['user_no'] ?>" class="company_logo">
                                <img src="/<?= $company['logo'] ?>" alt="">
                            </a>
                            <div class="card-head">
                                <img src=<?= $product['logo'] ?> alt="">
                            </div>
                            <!-- <p>Name of Product: </p> -->
                            <h4><?= $product['product_name'] ?></h4>
                            <p>₵ <?= $product['price'] ?></p>

                            <!-- <p>Description:</p>
                    <h4><?= $product['description'] ?></h4>
                    <p>Amount Invested: </p>
                    <h4><?= $product['price'] ?></h4> -->

                            <?php if (isset($user_no)) { ?>
                                <button class="btn-green" onclick="invest(<?= $product['price'] ?>, <?= $product['product_id'] ?>)">Invest</button>

                            <?php } else { ?>
                                <a class="btn-green" href="/login" style="text-decoration: none;">Invest</a>

                            <?php } ?>

                        </div>

                <?php endforeach;
                } ?>
            </div>

            <div class="overlay" id="overlay" style="display: none;">

                <div class="form-container">
                    <form action="/user/invest" class="transaction_form" id="momoForm" method="POST">
                        <i class='bx bxs-x-circle' onclick="hide()"></i>
                        <h2>Invest</h2>
                        <!-- <input type="text" class="nav-input" placeholder="Operator"> -->
                        <input type="text" class="nav-input" placeholder="Amount" id="amount" name="amount" oninput="updateInput2(this.value)">
                        <input type="hidden" value="" id="product_id" name="product_id">
                        <p style="font-size: 1em;color:red; align-self:flex-start; margin-left:5vw" id="error"></p>
                        <input type="text" class="nav-input" placeholder="0 Shares" id="shares_owned" name="shares_owned" value="" disabled>

                        <input type="submit" class="depositBtn" value="Invest" id="investBtn" onclick="investsubmit()">
                    </form>
                </div>
            </div>
        </div>


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

                // console.log(currentProductPrice);
            }


            function hide() {
                document.getElementById("overlay").style.display = "none";
                document.getElementById(".transaction_form").style.display = "none";
            }

            // Function to update Input 2 based on the value of Input 1
            function updateInput2(value) {
                // console.log(currentProductPrice);


                // You can perform any manipulation or calculation here
                // For example, let's just double the value
                var productPrice = parseFloat(document.querySelector('.list-card p').innerText.replace('₵ ', ''));
                const updatedValue = value / currentProductPrice;

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