<?php


$testimonialObj = new Testimonial();
$testimonials = $testimonialObj->getAllTestimonials();

if ($testimonials) {

    foreach ($testimonials as $testimonial) {

        echo '<div class="client_box">';
        echo '  <div class="client-id">';
        echo '    <div class="img-box">';
        echo '      <img src="' . htmlspecialchars($testimonial["image_path"]) . '" alt="" width="100" height="100"/>';
        echo '    </div>';

        echo '    <div class="name">';
        echo '      <h5>' . htmlspecialchars($testimonial["name"]) . '</h5>';
        echo '      <p>' . htmlspecialchars($testimonial["role"]) . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="detail">';
        echo '    <p>' . htmlspecialchars($testimonial["message"]) . '</p>';
        echo '    <div><div class="arrow_img"></div></div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "<p>No testimonials found.</p>";
}
?>