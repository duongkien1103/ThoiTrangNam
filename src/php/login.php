<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        /* Đặt lại mặc định cho margin và padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Nền tổng thể nhạt */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Nền trắng với độ trong suốt */
            padding: 40px;
            width: 400px;
            border-radius: 15px; /* Góc bo mềm mại */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Hiệu ứng nổi bật */
            border: 1px solid #e0e0e0; /* Viền nhạt tạo điểm nhấn */
            position: relative; /* Để có thể đặt nút "X" ở góc */
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px; /* Kích thước */
            height: 40px; /* Kích thước */
            font-size: 25px;
            color: #333;
            cursor: pointer;
            border: none;
            background: none;
            border-radius: 80%; /* Làm cho nút "X" có hình tròn */
            padding: 5px;
            display: flex; /* Căn giữa nội dung */
            align-items: center; /* Căn giữa dọc */
            justify-content: center; /* Căn giữa ngang */
            transition: background-color 0.3s ease;
        }

        .close-btn:hover {
            background-color: rgba(200, 200, 200, 0.5); /* Màu nền khi hover */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px; /* Góc bo cho trường nhập liệu */
        }

        .input-group input:focus {
            outline: none;
            border-color: #6a11cb; /* Đổi màu khi người dùng nhập liệu */
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #6a11cb;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #2575fc;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
            font-size: 14px;
            color: #6a11cb;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: #2575fc;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .register-link a {
            color: #6a11cb;
            text-decoration: none;
        }

        .register-link a:hover {
            color: #2575fc;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <button class="close-btn" onclick="window.location.href='index.php'">x</button>
        <h2>Đăng Nhập</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn" required>
            </div>
            <button type="submit" class="login-btn">Đăng Nhập</button>
            <a href="#" class="forgot-password">Quên mật khẩu?</a>
        </form>
        <div class="register-link">
            <p>Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
        </div>
    </div>

</body>
</html>
