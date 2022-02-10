<?php
include ("dbconn.php");

$dateFrom = $_POST['dateFrom'];
$dateTo = $_POST['dateTo'];
$taskTitle = $_POST['taskTitle'];
$taskDescription = $_POST['taskDescription'];
$sammuryOfTask = $_POST['sammuryOfTask'];
$durationWeeks = $_POST['durationWeeks'];
$durationDays = $_POST['durationDays'];
$subTotalWeeks = $_POST['subTotalWeeks'];
$subTotalDays = $_POST['subTotalDays'];
$totToDateWeeks = $_POST['totToDateWeeks'];
$totToDateDays = $_POST['totToDateDays'];
$numDaysAbsent = $_POST['numDaysAbsent'];
$absentReason = $_POST['absentReason'];
$mentorName = $_POST['mentorName'];
$signDate=$_POST['signDate'];

$sql = "INSERT INTO `form` (`dateFrom`, `dateTo`, `taskTitle`, `taskDescription`, `sammuryOfTask`, `durationWeeks`, `durationDays`, `subTotalWeeks`, `studentNo`, `studentNo`,
 `totToDateWeeks`, `totToDateWeeks`, `totToDateDays`, `numDaysAbsent`, `reason`, `mentorName`,'date') 
VALUES ( '$dateFrom', '$dateTo', '$taskTitle ', '$taskDescription', '$sammuryOfTask', '$durationWeeks','$durationDays','$subTotalWeeks','$subTotalDays',
'$totToDateWeeks,'$totToDateDays','$numDaysAbsent','$absentReason','$mentorName','$signDate')";

$res = mysqli_query($conn,$sql);

if(isset($_POST['form']))
{ 
    $res = mysqli_query($conn,$sql);
    echo "form details stored in the database";
    mysqli_close($conn);
}
else{
    echo "form details are not stored";
}


?>