<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$lineid = $_POST['lineid'];
$area = $_POST['area'];
$date = $_POST['date'];
$time = $_POST['time'];
$note = $_POST['note'];

$message = "
🔥 路西法新預約通知

姓名：$name
電話：$phone
LINE：$lineid
地區：$area
日期：$date
時間：$time
備註：$note
";

$accessToken = "oMAUq6nVwtZcRGgUtTh0etD4AC7iDo47Na5Fj0afy/Epnsw4LLnjXQSGTywOoV9n7rvRoNbuje3H3AvnySbdWg99jnqZTM1mR6Aqr0UuzVT6HCGjwBQemmNBQTG7aif7VvBBzL0/IwMb45FGmNlxtwdB04t89/1O/w1cDnyilFU=";

$data = [
    "to" => "U0f800f352142df585ebfab8808909cf2",
    "messages" => [
        [
            "type" => "text",
            "text" => $message
        ]
    ]
];

$options = [
    "http" => [
        "method"  => "POST",
        "header"  =>
            "Content-Type: application/json\r\n" .
            "Authorization: Bearer " . $accessToken . "\r\n",
        "content" => json_encode($data),
    ]
];

$context = stream_context_create($options);

file_get_contents(
    "https://api.line.me/v2/bot/message/push",
    false,
    $context
);

echo "預約成功！";

?>