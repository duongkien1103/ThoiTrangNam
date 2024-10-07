<?php
    function clean_url($url) {
        // Phân tách URL thành các phần
        $url_parts = parse_url($url);
        
        // Phân tách query string thành các tham số
        parse_str($url_parts['query'], $params);
        
        // Loại bỏ tham số trùng lặp
        $params = array_unique($params);
        
        // Tạo lại query string
        $clean_query = http_build_query($params);
        
        // Tạo lại URL
        return $url_parts['scheme'] . '://' . $url_parts['host'] . $url_parts['path'] . '?' . $clean_query;
    }
    // Sử dụng hàm clean_url để làm sạch URL hiện tại
    $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $cleaned_url = clean_url($current_url);

    // Chuyển hướng đến URL đã được làm sạch nếu cần
    if ($current_url !== $cleaned_url) {
        header("Location: $cleaned_url");
        exit();
    }
?>