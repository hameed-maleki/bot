<?php

//------- Sql DataBase -------
$serverName = "localhost"; // ادیت نشود
$db_name    = "asemanbo_v2ray"; // نام دیتابیس
$db_user    = "asemanbo_v2ray"; // یوزر دیتابیس
$db_pass    = "hamed@5543210"; // پسورد دیتابیس

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if(!$conn){
    die('failed ' . mysqli_connect_error());
}
//------- Data -------
$token        = "7054082821:AAHF5hvtgr63LDW7mXIcuv-yj3avUOU-80Y"; // توکن ربات
$admin        = "40411407"; // آیدی عددی ادمین
$vpnname      = "Aseman VPN"; // اسم ربات
$channel_bot  = "aseemanvpn"; // آیدی کانال جوین اجباری بدون @
$bot_id       = "aseemanvpnbot"; // آیدی ربات بدون @
$cartP        = "5022291301386916"; // شماره کارت
$cartN        = ""; // نام مالک شماره کارت
$gig25        = 90; // قیمت سرور 25 گیگ
$gig50        = 140; // قیمت سرور 50 گیگ
$gig75        = 140; // قیمت سرور 75 گیگ
$gig100       = 360; // قیمت سرور 100 گیگ
$chanSef      = "-4205640890"; // آیدی کانال گزارشات
$MerchantID   = ""; // مرچند کد درگاه زرین پال
$adminmail    = ""; // ایمیل ادمین
$phoneadmin   = "4322222646464"; // شماره تلفن ادمین
$web          = "https://www.aseeman.ir/bot/asemanvpn"; // آدرس پوشه ربات

//------- Function -------

    function bot($method, $user = []){
        global $token;
    $url = "https://api.telegram.org/bot$token"."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $user);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

mysqli_multi_query(
    $conn,
    "CREATE TABLE `users` (
        `id` bigint PRIMARY KEY,
        `step` varchar(20),
        `ref` bigint(20),
        `coin` bigint,
        `phone` bigint,
        `account` text
        ) default charset = utf8mb4;
        CREATE TABLE `vpn` (
        `id` bigint PRIMARY KEY,
        `code` text,
        `hajm` varchar(20),
        `contry` t0ext
        ) default charset = utf8mb4;
        CREATE TABLE `Bought` (
        `id` bigint PRIMARY KEY,
        `code` text,
        `contry` text,
        `Owner` bigint,
        `date` text
        ) default charset = utf8mb4;
        CREATE TABLE `moton` (
        `tarfe` text,
        `android` text,
        `windows` text,
        `ios` text,
        `testserver` text
        ) default charset = utf8mb4;
        CREATE TABLE `Settings` (
        `bot` text,
        `pay` text,
        `sharj` text,
        `support` text
        ) default charset = utf8mb4;");
    if(mysqli_connect_errno()){
    echo "به دلیل مشکل زیر، اتصال برقرار نشد : <br />" . mysqli_connect_error();
    die();
}

?>
