<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$lineid = $_POST['lineid'];
$area = $_POST['area'];
$date = $_POST['date'];
$time = $_POST['time'];
$note = $_POST['note'];

echo "
姓名：$name <br>
電話：$phone <br>
LINE：$lineid <br>
地區：$area <br>
日期：$date <br>
時間：$time <br>
備註：$note <br>
";

?>