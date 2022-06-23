<?php
require_once('contact1.php')
$Name = $_POST['Name'];
$Phonenumber = $_POST['Phonenumber'];
$Address = $_POST['Address'];
$Describefood = $_POST['Describefood'];
$Rate = $_POST['Rate'];
$sql = "INSERT INTO `donatehere` (`Name`, `Phonenumber`, `Address`, `Describefood`,'Rate') VALUES ( ?,?,?,?);"
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your Donation shall be collected soon!!!";
}else{
	echo "ERROR!!!";
	}

?>