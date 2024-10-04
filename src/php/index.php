<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homeStyles.css">    
</head>
<body>
    <div class="containers">
        <div class="header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfOPtsh2YUNSNVRrSEK3pIKH1xgp7hm24ZOQ&s" alt="LOGO" class="left-header">
            <div class="right-header">
                <a href="#">
                    <img src="../../images/header/cart.png" alt="CART">
                </a>
                <div class="user-icon">
                    <img src="../../images/header/user.png" alt="USER">
                </div>
                <div class="dropdown-content">
                    <a href="login.php">Đăng nhập</a>
                    <a href="register.php">Đăng ký</a>
                </div>
            </div>
        </div>
        <div class="main">
            <nav class="tab">
                <a href="?page=home">
                    <div class="button-tab home">
                        <img src="../../images/tab/home.png" alt="HOME">
                        <span>Trang chủ</span>
                    </div>                    
                </a>
                <a href="?page=products">
                    <div class="button-tab products">
                        <img src="../../images/tab/buy.png" alt="PRODUCTS">
                        <span>Sản phẩm</span>
                    </div>
                </a>
                <a href="?page=contact">
                    <div class="button-tab contact">
                        <img src="../../images/tab/contact.png" alt="CONTACT">
                        <span>Liên hệ</span>
                    </div>
                </a> 
            </nav>
            <div class="content">
            <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'home':
                            include 'home.php';
                            break;
                        case 'products':
                            include 'products.php';
                            break;
                        case 'contact':
                            include 'contact.php';
                            break;
                        default:
                            echo '<h1>Trang không tồn tại</h1>';
                            break;
                    }
                } else {
                    include 'home.php';
                }
                ?>
            </div>
            <div class="information">
                <p>Thông tin bổ sung</p>
            </div>
        </div>
        <div class="footer">
            <div class="footer-introduce">
                <h3>GIỚI THIỆU</h3>
                <p>Chào mừng đến với Team Nine Store - nơi phong cách và sự tinh tế hội tụ.
                     Chúng tôi tự hào mang đến những sản phẩm thời trang nam chất lượng cao, theo kịp xu hướng.
                      Hãy khám phá bộ sưu tập của chúng tôi và tạo dấu ấn riêng cho phong cách của bạn</p>
            </div>
            <div class="footer-member">
                <h3>THÀNH VIÊN NHÓM</h3>
                <ul>
                    <li>Nguyễn Trần Huy - 31/10/2003</li>
                    <li>Dương Văn Kiên - 30/11/2003</li>
                    <li>Hồ Anh Minh - 14/12/2003</li>
                </ul>
            </div>
    </div>
</body>
</html>