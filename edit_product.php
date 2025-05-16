<?php
session_start();

if (!isset($_SESSION["userrole"]) || $_SESSION["userrole"] !== 'admin') {
    header("Location: index.php");
    exit();
}
include_once 'php/header.php';

$productObj = new Product();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = $productObj->getProduct($id);

    if (!$product) {
        echo "Product not found.";
        exit();
    }
} else {
    echo "No product ID provided.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $productObj->updateProduct($id, $name, $price, $image);
    header("Location: shop.php");
    exit();
}
?>


<div class="container mt-5">
    <h2>Edit Product</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="<?= htmlspecialchars($product['price']) ?>" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Image URL</label>
            <input type="text" name="image" value="<?= htmlspecialchars($product['image']) ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<?php include 'php/footer.php'; ?>
