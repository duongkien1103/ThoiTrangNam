<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <style>
        .product-page {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 100%;
            /* height: 100vh; */
            box-sizing: border-box;
            padding: 20px;
        }
        .product {
            flex: 0 1 calc(15% - 40px); /* 5 sản phẩm mỗi hàng */
            margin: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #f4f4f4;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .product p {
            font-size: 1em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="product-page">
        <div class="product">
            <img src="path-to-your-image.jpg" alt="Product Image">
            <h2>Product 1</h2>
            <p>Description for product 1.</p>
        </div>
        <div class="product">
            <img src="path-to-your-image.jpg" alt="Product Image">
            <h2>Product 2</h2>
            <p>Description for product 2.</p>
        </div>
        <div class="product">
            <img src="path-to-your-image.jpg" alt="Product Image">
            <h2>Product 3</h2>
            <p>Description for product 3.</p>
        </div>
        <div class="product">
            <img src="path-to-your-image.jpg" alt="Product Image">
            <h2>Product 4</h2>
            <p>Description for product 4.</p>
        </div>
        <div class="product">
            <img src="path-to-your-image.jpg" alt="Product Image">
            <h2>Product 5</h2>
            <p>Description for product 5.</p>
        </div>
        <!-- Thêm nhiều sản phẩm ở đây nếu muốn -->
    </div>
</body>
</html>
