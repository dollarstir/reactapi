// <?php
// include 'db.php';

// $json = file_get_contents('php://input');
// $obj  = json_decode($json,true);


// $email = $obj['email'];
// $password= $obj['password'];

// if (empty($email)) {

//     echo json_encode('enter email');

//     # code...
// }
// elseif (empty($password)){
//     echo json_encode('Please enter correct password');

// }
// else{
//     $login= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password' ");
//     $row = mysqli_fetch_array($login);
//     if($row){
//         echo json_encode('ok');


//     }
//     else{
//         echo json_encode('wrong');
//     }
// }


