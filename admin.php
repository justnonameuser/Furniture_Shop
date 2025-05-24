<?php
session_start();
include_once 'php/header.php';


$product = new Product();

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    $product->addProduct($name, $price, $image);
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $product->deleteProduct($id);
}


$products = $product->getAllProducts();
?>

<section class="brand_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Admin Panel - Manage Products</h2>
        </div>

        <?php if (isset($_SESSION["userrole"]) && $_SESSION["userrole"] == 'admin'): ?>

            <form method="POST" class="mb-4">
                <input type="text" name="name" placeholder="Product name" required>
                <input type="number" name="price" step="0.01" placeholder="Price" required>
                <input type="text" name="image" placeholder="Image path (e.g., images/item.png)" required>
                <button type="submit" name="add_product">Add Product</button>
            </form>

            <table border="1" cellpadding="10">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($products as $row): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><img src="<?= $row['image'] ?>" width="50"></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td>
                            <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a>
                            <a href="admin.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>Nie ste oprávnený prezerať túto stránku.</p>
        <?php endif; ?>
    </div>

</section>
<?php
include 'php/footer.php';
?>