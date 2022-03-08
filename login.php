<?php
include 'db.php';

$json = file_get_contents('php://input');
$obj  = json_decode($json,true);


$email =$obj['email'];
$password= $obj['password'];

if (empty($email)) {

    $container = json_encode('enter email');

    # code...
}
elseif (empty($password)){
    $container= json_encode('Please enter correct password');

}
else{
    $login= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password' ");
    $row = mysqli_fetch_assoc($login);
    if($row){
        
      $container  = [];
      $container[] = $row;
      $container =  json_encode($container);


    }
    else{
       $container = json_encode('wrong');
    }

   
}
 echo $container;