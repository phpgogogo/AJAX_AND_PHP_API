<?php
include_once "base.php";
$sql="SELECT `classroom` as '班級',count(`id`) as '人數' FROM `students` GROUP BY `classroom`";
$rows=$Stu->q($sql);
// foreach($rows as $row){
//     echo $row["班級"] . "-" . $row["人數"] . "<br>";
// }
echo json_encode($rows);

?>