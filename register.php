<?php session_start(); ?>
<?php
echo '<pre>';
require "db_conect.php";
if($_SESSION['status']!=="1"){
  echo "<script>window.location.href='/'</script>";
}
if(!empty($_POST["button"])==true){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $number_of_people=$_POST["room"];
    // if(!empty($_SESSION['num_of_room'])&&!empty($_SESSION['arr'])){
      $number_of_room=$_SESSION['num_of_room'];
      $arr = $_SESSION['arr'];
      var_dump($arr);
     
      
       $mysqli->query("INSERT INTO `orders`(`id`, `firstname`, `lastname`, `email`, `mobile`, `number_of_people`,  `number_of_rooms`, `dates`) VALUES (null,'$firstname','$lastname','$email','$phone','$number_of_people','$number_of_room', '$arr')");

    // }
    
    
    //  $call="INSERT INTO `users`(`Id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')";
       
      var_dump("INSERT INTO `orders`(`id`, `firstname`, `lastname`, `email`, `mobile`, `number_of_people`,  `number_of_rooms`, `dates`) VALUES (null,'$firstname','$lastname','$email','$phone','$number_of_people','$number_of_room', '$arr')");
                      
      
      echo '<script>window.location.href="thank.html"</script>';
   }
 ?>