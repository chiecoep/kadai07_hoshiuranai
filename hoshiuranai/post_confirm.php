<?php
date_default_timezone_set('Asia/Tokyo');
$name = $_POST["name"];
$birthday = new DateTime($_POST["birthday"]);
$today = new DateTime('now');
$aday = $birthday->diff($today);
$month = (int)$birthday->format('m');
$day = (int)$birthday->format('d');

// 確認用（後で非表示）
// var_dump($_POST);

// 未入力アラート
if($name == ""){
    $name = "<p style='color:red;'>エラー：未入力</p>";
}
if($birthday == ""){
    $birthday = "<p style='color:red;'>未入力</p>";
}

// 星座の決定
if(($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)){
    $seiza = "おひつじ座♈︎";
}
if(($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)){
    $seiza = "牡牛座♉︎";
}
if(($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)){
    $seiza = "双子座♊︎";
}
if(($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)){
    $seiza = "蟹座♋︎";
}
if(($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)){
    $seiza = "獅子座♌︎";
}
if(($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)){
    $seiza = "乙女座♍︎";
}
if(($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)){
    $seiza = "天秤座♎︎";
}
if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)){
    $seiza = "蠍座♏︎";
}
if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)){
    $seiza = "射手座♐︎";
}
if(($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)){
    $seiza = "山羊座♑︎";
}
if(($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)){
    $seiza = "水瓶座♒︎";
}
if(($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)){
    $seiza = "魚座♓︎";
}
?>

<html>
<head>
<meta charset="utf-8">
<title>星座占い（受信）</title>
</head>
<body>
<p>
<?=$name?>さんが生まれてから今日で<?=$aday->days?>日目
</p>
<p>
2024年の<?=$seiza?>の運勢
</p>

</body>
</html>
