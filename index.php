<?php
session_start();
include_once 'php/header.php';

$product = new Product();
$products = $product->getAllProducts();

?>


<!-- slider section -->
<?php
$slides = 4;
?>

<section class="slider_section">
    <div class="play_btn">
        <a href=""><img src="images/play.png" alt=""></a>
    </div>

    <div class="number_box">
        <div>
            <ol class="carousel-indicators indicator-2">
                <?php for ($i = 0; $i < $slides; $i++): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>">0<?= $i + 1 ?></li>
                <?php endfor; ?>
            </ol>
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php for ($i = 0; $i < $slides; $i++): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></li>
                <?php endfor; ?>
            </ol>

            <div class="carousel-inner">
                <?php for ($i = 0; $i < $slides; $i++): ?>
                    <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>The Latest <span>Furniture</span></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">Read More</a>
                                        <a href="contact.php" class="btn-2">Contact us</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img-container">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- end slider section -->
</div>


<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            About Us
                        </h2>

                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <a href="about.php">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/about-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- trending section -->
<?php include_once "php/trendingFurniture.php" ?>
<!-- discount section -->

<section class="discount_section  layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <h2>
                        The Latest Collection
                    </h2>
                    <h2 class="main_heading">
                        50% DISCOUNT
                    </h2>

                    <div class="">
                        <a href="shop.php">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="images/discount-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end discount section -->

<!-- brand section -->

<section class="brand_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Featured Brands</h2>
        </div>
        <div class="brand_container layout_padding2">
            <?php foreach ($products as $index => $item): ?>
                <div class="box<?= $index >= 4 ? ' hidden-product' : '' ?>">
                    <a href="shop.php">
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
        </div>
        <a href="shop.php" class="brand-btn">
            See More
        </a>
    </div>
</section>
<!-- end brand section -->
<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container">
            <h2 class="">
                Contact Us
            </h2>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="php/process.php" method="POST">
                    <div>
                        <input type="text" placeholder="Name" name="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone" name="Phone" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" name="Message" />
                    </div>
                    <div class="d-flex ">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- client section -->
<section class="client_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2>Testimonial</h2>
        </div>
    </div>

    <div class="container">
        <div class="client_container layout_padding2">
            <?php include_once '_inc/displayTestemonials.php'; //3 last reviews ?> 
        </div>
    </div>
    <div class="container text-center my-3">
        <a href="addTestimonial.php" class="btn btn-primary">Leave review</a>
    </div>

</section>


<!-- end client section -->


<?php include "php/info_section.php";
include 'php/footer.php'; ?>



</body>

</html>