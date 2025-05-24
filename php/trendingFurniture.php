<?php

$kategorie = [
    [
        'title' => 'Chairs',
        'images' => ['images/t-1.jpg', 'images/t-2.jpg', 'images/t-3.jpg', 'images/t-4.jpg']
    ],
    [
        'title' => 'Tables',
        'images' => ['images/t-3.jpg', 'images/t-4.jpg', 'images/t-1.jpg', 'images/t-2.jpg']
    ],
    [
        'title' => 'Beds',
        'images' => ['images/t-4.jpg', 'images/t-1.jpg', 'images/t-3.jpg', 'images/t-2.jpg']
    ],
    [
        'title' => 'Furnitures',
        'images' => ['images/t-1.jpg', 'images/t-4.jpg', 'images/t-3.jpg', 'images/t-2.jpg']
    ]
];
?>

<section class="trending_section layout_padding">
    <div id="accordion">
        <div class="container">
            <div class="row">
                <!--lava strana -->
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Trending Categories</h2>
                        </div>
                        <div class="tab_container">
                            <?php foreach ($kategorie as $index => $kategoria): ?>
                                <div class="t-link-box <?= $index === 0 ? '' : 'collapsed' ?>"
                                    data-toggle="collapse"
                                    data-target="#collapse<?= $index ?>"
                                    aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                    aria-controls="collapse<?= $index ?>">
                                    <div class="number">
                                        <h5>0<?= $index + 1 ?></h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5><?= htmlspecialchars($kategoria['title']) ?></h5>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php foreach ($kategorie as $index => $kategoria): ?>
                        <div class="collapse <?= $index === 0 ? 'show' : '' ?>"
                            id="collapse<?= $index ?>"
                            aria-labelledby="heading<?= $index ?>"
                            data-parent="#accordion">
                            <div class="img_container">
                                <div class="box b-1">
                                    <div class="img-box"><img src="<?= $kategoria['images'][0] ?>" alt=""></div>
                                    <div class="img-box"><img src="<?= $kategoria['images'][1] ?>" alt=""></div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box"><img src="<?= $kategoria['images'][2] ?>" alt=""></div>
                                    <div class="img-box"><img src="<?= $kategoria['images'][3] ?>" alt=""></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>