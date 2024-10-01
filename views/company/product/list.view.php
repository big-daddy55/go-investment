<div class="dashboard-main listing-main main" style="overflow-x: hidden;">
    <div class="list-container" style="display: flex; overflow-x:hidden; justify-content: space-between" >
        <section class="left" style="width: 40%; align-self: center;">

            <form action="/company/product/add" method="POST" enctype="multipart/form-data" class="list-card-form" >
                <div class="input-group">
                    <img src="/public/resource/images/rectangle.png" alt="" class="logo" id="logo">
                    <label for="file" name="file" id="filelabellogo" class="custom-file-input"> Upload Logo <i class='bx bxs-plus-circle'></i></label>
                    <input type="file" name="logo" style="display: none;" id="profile_photo">
                </div>
                <div class="input-group">
                    <input type="text" name="product_name" placeholder="Name of Product">
                </div>
                <div class="input-group">
                    <input type="text" name="number_of_branches" placeholder="Number Of Branches">
                </div>
                <div class="input-group">
                    <input type="text" name="price" placeholder="Price">
                </div>
                <div class="input-group">
                    <p class="amount-invested">$200</p>
                </div>

                <div class="input-group list-group">
                    <input type="submit" value="List" class="btn-green investBtn">
                    <button class="btn-green">Invest</button>
                    <!-- <input type="submit" name="description" value="Invest" class="investBtn"> -->
                </div>
            </form>
        </section>

        <section style="width: 60%; display:flex; justify-content:space-between">
            <?php if (!empty($products)) {
                foreach ($products as $product) : ?>
                    <div class="list-card">
                        <div class="card-head">
                            <img src=<?= $product['logo'] ?> alt="">
                        </div>
                        <p>Name of Product: </p>
                        <h4><?= $product['product_name'] ?></h4>
                        <p>Number of Branches:</p>
                        <h4><?= $product['number_of_branches'] ?></h4>
                        <p>Amount Invested: </p>
                        <h4><?= $product['price'] ?></h4>
                    </div>

            <?php endforeach;
            } ?>
        </section>
    </div>
</div>

<script src="/public/resource/orders.js"></script>
<script src="/public/resource/dash.js"></script>
<script src="/public/resource/nav.js"></script>



<script>
    document.getElementById('filelabellogo').addEventListener('click', function() {
        document.getElementById('profile_photo').click();
    });
    document.getElementById('profile_photo').addEventListener('change', function() {
        const selectedImage = document.getElementById('logo');
        if (selectedImage && this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>