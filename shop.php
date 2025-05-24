<?php
session_start();
include_once 'php/header.php';

$product = new Product();
$products = $product->getAllProducts();
?>



<!-- brand section -->

<section class="brand_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Featured Brands
            </h2>
        </div>
        <div class="brand_container layout_padding2">

            <?php foreach ($products as $index => $item): ?>
                <div class="box<?= $index >= 4 ? ' hidden-product' : '' ?>">
                    <a href="">
                        <div class="img-box">
                            <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">$<?= htmlspecialchars($item['price']) ?></h6>
                            <h6><?= htmlspecialchars($item['name']) ?></h6>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="custom-buttons-wrapper">
                <button class="my-see-more-button" onclick="showMore()">See More</button>
                <?php if (isset($_SESSION["userrole"]) && $_SESSION["userrole"] == 'admin'): ?>
                    <a href="admin.php" class="my-add-button">+ Add</a>
                <?php endif; ?>
            </div>
        </div>
</section>
<script>
    function showMore() {
        document.querySelectorAll('.hidden-product').forEach(el => el.style.display = 'block');
        document.querySelector('.see-more-wrapper').style.display = 'none';
    }
</script>

<!-- end brand section -->
<?php include "php/info_section.php";
include 'php/footer.php'; ?>

</body>

</html>