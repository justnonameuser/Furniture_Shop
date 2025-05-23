<?php
session_start();
include_once 'php/header.php';
?>



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



<!-- info section -->

<!-- end info_section -->


<!-- footer section -->
<?php include "php/info_section.php";
include 'php/footer.php'; ?>
<!-- end  footer section -->

</html>