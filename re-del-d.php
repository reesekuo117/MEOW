<?php

// echo $_SERVER['HTTP_REFERER'];  // 人從哪裡來
// exit;

require __DIR__. '/parts/meow_db.php';

echo ($_GET['sid']);
if(isset($_GET['sid'])){
    $sid = intval($_GET['sid']);
    $sql = "DELETE FROM love WHERE target_type = 3 and collect_id=$sid";
    $pdo->query($sql);
}
// 如果有sid執行刪除DELETE

//刪除後回到該頁面
$comeFrom =  'http://localhost/MEOW/member.php#my-favorites';
// if(! empty($_SERVER['HTTP_REFERER'])){
//     $comeFrom = $_SERVER['HTTP_REFERER'];
// }

header('Location:'. $comeFrom);



