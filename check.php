<?php

date_default_timezone_set('Asia/Tehran');
$date = date('Y/m/d');
$sql    = "SELECT * FROM `Bought`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

    $date_off = $row['date'];
    $id       = $row['Owner'];
    $code     = $row['code'];
    $contry   = $row['contry'];

    if($date_off == $date){

bot('sendMessage',[
'chat_id'=>$chanSef,
'text'=>"⛔ مهلت استفاده از این سرویس به پایان رسیده

🔗 آدرس اشتراک : $code

👤 مالک سرویس : $id
📅 تاریخ انقضا : $date
📲 نوع اشتراک : $contry",
'parse_mode'=>"HTML",
]);

bot('sendMessage',[
'chat_id'=>$id,
'text'=>"⛔مشتری گرامی، مهلت استفاده از سرویس شما به پایان رسید، خواهشمند است هر چه سریع تر برای  تمدید اشتراک . موجودی حساب خود را افزایش دهید

🔗 آدرس اشتراک : $code
📅 تاریخ انقضا : $date
📱 اشتراک : $contry

⛔ توجه داشته باشید تمدید اشتراک  تنها قبل از غیر فعال شدن اشتراک خریداری شده امکان پزیر است",
'parse_mode'=>"HTML",
]);

    }
}

?>
