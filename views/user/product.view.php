<div class="product-main">

    <section class="left">
        <div class="company_profile">
            <div class="head">
                <div class="logo">
                    <img src="<?= $company['logo'] ?>" alt="">
                </div>
                <div class="company-details">
                    <h2><?= $company['company_name'] ?></h2>
                    <div>
                        <p> Industry: <?= $company['industry'] ?></p>
                        <p>|</p>
                        <a href="https://<?= $company['business_website'] ?>"><?= $company['business_website'] ?></a>
                    </div>
                </div>
            </div>

            <div class="body">
                <p><span><?= $company['bio'] ?></p>
            </div>


            <p id="countdown-comment">Market Closes in:</p>
            <h1 id="countdown"></h1>
            <div id="progress-bar">
                <div id="progress-bar-fill"></div>
            </div>

        </div>
    </section>
    <section class="right">
        <div class="list-container">

            <?php

            if (!empty($products)) {
                foreach ($products as $product) : ?>
                    <div class="list-card">

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


                        <button class="btn-green invest" onclick="invest()">Invest</button>

                    </div>

            <?php endforeach;
            } ?>
        </div>
    </section>

    <div class="overlay" id="overlay">

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
    }

    function investsubmit() {
        document.getElementById('shares_owned').disabled = false;

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
        console.log(targetTime);
        targetTime.setHours(6, 0, 0, 0); // Set the target time to 6:00 AM

        targetTime.setHours(targetTime.getHours() + 20);

        const timeDifference = Math.floor((targetTime - now) / 1000);
        console.log(timeDifference);

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