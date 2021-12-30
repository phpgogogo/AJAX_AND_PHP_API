<?php
include_once "base.php";
$sql="SELECT `classroom` as '班級',count(`id`) as '人數' FROM `students` GROUP BY `classroom`";
$rows=$Stu->q($sql);
// foreach($rows as $row){
//     echo $row["班級"] . "-" . $row["人數"] . "<br>";
// }
echo json_encode($rows);

// 在後台整理好資料再輸出到頁面
// $list="";
// foreach($rows as $row){
//     $list.="<div class='card'>";
//     $list.="<div class='card-body'>";
//     $list.="<h5 class='card-title'>{$row['班級']}</h5>";
//     $list.="<p class='card-text'>{$row['人數']}</p>";
//     $list.="</div>";
//     $list.="</div>";
// }
// echo $list;
?>