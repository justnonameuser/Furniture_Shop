<?php
session_start();
include_once 'php/header.php';
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Leave Review</h4>
                </div>
                <div class="card-body">
                    <form action="_inc/submit_testimonial.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Status:</label>
                            <input type="text" class="form-control" name="role">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Text:</label>
                            <textarea class="form-control" name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'php/footer.php'; ?>