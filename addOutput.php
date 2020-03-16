<?php
include 'db.php';
$_POST = json_decode(file_get_contents('php://input'), true);
if (isset($_POST['output']) && isset($_POST['outputID'])){
    $str = $_POST['output'];
    $strID = $_POST['outputID'];
    $query = "INSERT INTO `output` (`output`, `outputID`) VALUES('$str', '$strID')";
    $result=mysqli_query($conn, $query) or die(mysql_error());
}
?>