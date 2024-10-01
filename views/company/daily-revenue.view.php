<div class="main" style="display: flex; flex-direction:column;">
    <section class="card-container">
        <?php foreach ($products as $product) : ?>
            <div class="product-card" onclick="showForm( '<?= $product['product_name'] ?>', '<?= $product['number_of_branches'] ?>', '<?= $product['product_id'] ?>' )" id="product-card<?= $product['product_id'] ?>">
                <input type="hidden" value="<?= $product['product_id'] ?>">

                <div class="card-head" id="portfolio-card-head">

                    <h4 style="margin-bottom: 0;" class="product-name"><?= $product['product_name'] ?></h4>
                    <?php
                    $word = $product['product_name'];
                    // dd($word);
                    $ticker = createAbbreviation($word);
                    ?>
                    <p style="color: rgb(12, 12, 121); font-size: 0.8em;"><?= $ticker ?></p>

                </div>
                <div class="logo">
                    <img src=<?= $product['logo'] ?> alt="">
                </div>

                <!-- <div style="display: flex; align-items:center;  margin-bottom:3vh;">
                    <i class='bx bxs-chevrons-up' style="color: green;font-size:1em;margin-right: 0.5vw;"></i>
                    <p style="color: green; font-size:1em;"> +1.2%</p>
                    <p></p>
                </div> -->
                <!-- <p>Name of Product: </p> -->


            </div>
        <?php endforeach;
        ?>

    </section>
    <p id="saveMessage" class="save-message"> <?= $alert ?></p>
    <?php if (isset($alert)) { ?>

        <script>
            var message = document.getElementById('saveMessage');
            message.classList.add('show');
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000);
        </script>
    <?php } ?>

    <section>
        <div class="_section-header">
            <h2 class="_product-name"></h2>
            <hr>
        </div>

        <p id="time" style="text-align: center;"></p>
        <form action="/company/revenue/save" method="POST" class="revenue-form">
            <div class="form-container">
                <div class="form-row">
                    <input type="hidden" name="product_id[]" class="product_id">
                    <input type="text" placeholder="Name Of Branch" name="branch_name[]">
                    <input type="text" placeholder="location" name="location[]">
                    <input type="text" placeholder="Daily Revenue" name="daily_revenue[]">
                </div>
            </div>

            <input type="submit" value="Save" class="saveBtn">
        </form>
    </section>
</div>

<script>
    function updateTime() {
        const now = new Date();
       
        document.getElementById('time').innerHTML = now;

        setTimeout(updateTime, 1000);
    }

    function showForm(companyName, number_of_branches, product_id) {

        console.log(number_of_branches);
        document.querySelector('._product-name').innerHTML = companyName;
        document.querySelector('.revenue-form').style.display = 'flex';
        document.querySelector('.product_id').value = product_id;


        // Remove the border color from all product cards
        var allProductCards = document.querySelectorAll('.product-card');
        allProductCards.forEach(function(card) {
            card.style.borderColor = ''; // Set to an empty string to remove the border color
        });
        var productCard = document.getElementById(`product-card${product_id}`);

        // Change the border color of the clicked product card
        productCard.style.borderColor = 'green';


        for (var i = 0; i < number_of_branches; i++) {
            // var form_row = document.getElementById('form-row');

            var form_row = document.querySelector('.form-row:first-child').cloneNode(true);
            document.querySelector('.form-container').appendChild(form_row);
            // document.querySelector('.form-revenue').style.display = 'flex';
            document.querySelector('.product_id').value = product_id;

        }






    }

    updateTime();
</script>