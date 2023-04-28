<?php
// xổ số sóc trăng
function getXSST()
{
    $url = "http://vip.manycai.com/K2643675f3854be/szc-1.json"; // xổ số sóc trăng
    $curl = curl_init(); // Khởi tạo một đối tượng curl

    curl_setopt($curl, CURLOPT_URL, $url); // Thiết lập URL của API

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Thiết lập trả về dữ liệu dưới dạng chuỗi

    $response = curl_exec($curl); // Gửi yêu cầu và nhận phản hồi từ API

    curl_close($curl);

    // Xử lý phản hồi từ API
    try {
        $data = json_decode($response, true);
        return $data;
    } catch (\Throwable $e) {
        throw $e;
    }
}