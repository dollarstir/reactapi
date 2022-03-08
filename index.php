<?php
include 'db.php';
$json = file_get_contents('php://input');
$obj = json_decode($json,true);
$name = $obj['name'];
$email =$obj['email'];
$contact =$obj['contact'];
$password = $obj['password'];

if(empty($obj['name'])){
    echo json_encode('Enter Name');
}
elseif (empty($obj['email'])) {
    echo json_encode('Enter email Address');

}
elseif (empty($obj['contact'])) {

    echo json_encode('Enter phone number');
    # code...
}
elseif (empty($obj['password'])) {

    # code...
}

else{
    $check  = mysqli_query($conn,"SELECT * FROM users WHERE  email='$email' ");
    $row = mysqli_fetch_array($check);
    if ($row<=0) {
        $ins= mysqli_query($conn,"INSERT INTO users(name,email,contact,password) VALUES ($name,$email,$contact,$password)");
        if ($ins) {
            echo json_encode('Recorded Successfully');
            # code...
        }

        else{
            echo json_encode('Failed to add user');
        }
        # code...
    }
    else{
        echo json_encode('User already exist');
    }
}
