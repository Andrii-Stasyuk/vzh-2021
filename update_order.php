<?php
 session_start();
 require "db_conect.php";  
 $res = $mysqli->query('SELECT * FROM `orders` WHERE id='.$_SESSION["id"]);
 var_dump('SELECT * FROM `orders` WHERE id='.$_SESSION["id"]);
if($_POST['button_update']==true){
$firstname=$_POST["firstname"]; // Відправлення оновлених даних
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["phone"];
if(!$_SESSION['arr']){
    $dates = mysqli_fetch_array($res)['dates'];
} else{
    $dates = $_SESSION['arr'];
}

$number_of_people=$_POST["room"];
$number_of_rooms=$_SESSION['num_of_room'];
$date_str = $_SESSION['date_str'];
$text = "UPDATE orders SET firstname='$firstname',lastname='$lastname',email='$email',
mobile='$mobile',dates='$dates',number_of_people='$number_of_people',
number_of_rooms='$number_of_rooms', date_str='$date_str' WHERE id=".$_SESSION["id"];
$mysqli->query($text);
// echo '<script>window.location.href="cabinet.php"</script>';
}
?>