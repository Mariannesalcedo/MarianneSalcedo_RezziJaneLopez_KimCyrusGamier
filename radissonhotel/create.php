<?php
//include the database connection file
require 'db_con.php';


if(isset($_POST['booking'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $guestnumber = $_POST['guestnumber'];
    $roomtype = $_POST['roomtype'];
    $specialrequest = $_POST['specialrequest'];
}


$sql = "INSERT INTO reservation (fullname, email, phonenumber, checkindate, checkoutdate, guestnumber, roomtype, specialrequest) VALUES (:fullname, :email, :phonenumber, :checkindate,:checkoutdate, :guestnumber, :roomtype, :specialrequest )";
$stmt = $pdo->prepare($sql);


//Sample data
$data = [
    'fullname' => $fullname,
    'email' => $email,
    'phonenumber' => $phonenumber,
    'checkindate' => $checkindate,
    'checkoutdate' => $checkoutdate,
    'guestnumber' => $guestnumber,
    'roomtype' => $roomtype,
    'specialrequest' => $specialrequest,
];


try{
    $stmt->execute($data);
    echo "Record inserted!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
