<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['name']))
{
    $name = $_POST['name'];
    $date = $_POST["A-date"];
    $time = $_POST["A-time"];
    $location = $_POST["A-location"];
    $description = $_POST["A-description"];
    // Process the value as needed

$conn = new mysqli('localhost','root','','traffic-accident form');
if(mysqli_errno($conn)){
    echo "faild1";
}
else
echo"succses";
$sql  = "INSERT Into form (name,date,time,location,description) values('$name','$date','$time','$location','$description') ";
$qure = mysqli_query($conn, $sql);
if($qure){
    echo "sucess";
}
else 
echo "faild 2". mysqli_error($conn);
} else {
    echo 'faild 3';
}
?>