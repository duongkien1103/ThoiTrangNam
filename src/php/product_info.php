<?php
    include("db_connect.php");

    $product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    if ($product_id) {
        $query = "SELECT * FROM products WHERE id_products = $product_id";
        $result = $conn->query($query);
        $product = $result->fetch_assoc();
    } else {
        $product = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../css/productInfoStyles.css">
</head>
<body>
    <div class="page-containers">
        <div class="come-back">
            <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>">
                <img src="../../images/back_next_page/comeback.png" alt="COMEBACK">
            </a>
        </div>
        <div class="product-info">        
            <?php if ($product): ?>            
                <img src="<?php echo $product['image']; ?>" alt="Product Image">
                <div class="text-info">
                    <h1 class="title-info">Thông tin sản phẩm</h1>
                    <p class="name">Tên sản phẩm: <?php echo $product['name']; ?></p>
                    <p class="category">Danh mục: <?php echo $product['category_id']; ?></p>
                    <p class="price">Giá bán: <?php echo $product['price']; ?></p>
                    <p class="description">Mô tả: <?php echo $product['description']; ?></p>
                    <p class="sold">Đã bán: <?php echo $product['sold']; ?></p>
                </div>
            <?php else: ?>
                <p>Sản phẩm không tồn tại.</p>
            <?php endif; ?>
        </div>
    </div>    
</body>
</html>

<?php
    $conn->close();
?>