<?php
$shop = "Digitf";
$contact = [
    'address' => 'Address',
    'phone' => '+01 1234567890',
    'email' => 'demo@gmail.com'
];

$text = "Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt";
$images = [
    'images/i-1.jpg',
    'images/i-2.jpg',
    'images/i-3.jpg',
    'images/i-4.jpg',
    'images/i-5.jpg',
    'images/i-6.jpg'
];

$socials = [
    'facebook' => 'images/fb.png',
    'twitter' => 'images/twitter.png',
    'linkedin' => 'images/linkedin.png',
    'youtube' => 'images/youtube.png'
];
?>

<section class="info_section layout_padding2">
    <div class="container">
        <div class="info_logo">
            <h2><?= htmlspecialchars($shop) ?></h2>
        </div>
        <div class="row">

            <!-- About shop -->
            <div class="col-md-3">
                <div class="info_contact">
                    <h5>About Shop</h5>
                    <div>
                        <div class="img-box"><img src="images/location-white.png" width="18px" alt=""></div>
                        <p><?= htmlspecialchars($contact['address']) ?></p>
                    </div>
                    <div>
                        <div class="img-box"><img src="images/telephone-white.png" width="12px" alt=""></div>
                        <p><?= htmlspecialchars($contact['phone']) ?></p>
                    </div>
                    <div>
                        <div class="img-box"><img src="images/envelope-white.png" width="18px" alt=""></div>
                        <p><?= htmlspecialchars($contact['email']) ?></p>
                    </div>
                </div>
            </div>

            <!-- info -->
            <div class="col-md-3">
                <div class="info_info">
                    <h5>Informations</h5>
                    <p><?= htmlspecialchars($text) ?></p>
                </div>
            </div>

            <!--insta -->
            <div class="col-md-3">
                <div class="info_insta">
                    <h5>Instagram</h5>
                    <div class="insta_container">
                        <?php for ($i = 0; $i < count($images); $i += 2): ?>
                            <div>
                                <a href="#">
                                    <div class="insta-box b-<?= $i + 1 ?>"><img src="<?= $images[$i] ?>" alt=""></div>
                                </a>
                                <?php if (isset($images[$i + 1])): ?>
                                    <a href="#">
                                        <div class="insta-box b-<?= $i + 2 ?>"><img src="<?= $images[$i + 1] ?>" alt=""></div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <!--News-->
            <div class="col-md-3">
                <div class="info_form">
                    <h5>Newsletter</h5>
                    <form action="php/process_email.php" method="POST">
                        <input type="email" name="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </form>
                    <div class="social_box">
                        <?php foreach ($socials as $platform => $icon): ?>
                            <a href="#"><img src="<?= $icon ?>" alt="<?= $platform ?>"></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>