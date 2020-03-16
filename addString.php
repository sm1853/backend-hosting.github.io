<?php
include 'db.php';
$_POST = json_decode(file_get_contents('php://input'), true);
if (isset($_POST['string']) && isset($_POST['stringID'])){
    $str = $_POST['string'];
    $strID = $_POST['stringID'];
    $query = "INSERT INTO `string` (`string`, `stringID`) VALUES('$str', '$strID')";
    $result=mysqli_query($conn, $query) or die(mysql_error());
}
?>