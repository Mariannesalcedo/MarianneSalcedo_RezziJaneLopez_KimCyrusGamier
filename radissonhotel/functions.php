<?php

require 'db_con.php';
session_start(); 


function checkEmailIfExist($email,$pdo) {
    $sql = "SELECT * FROM users WHERE email= :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=> $email]);

    if($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}

if(isset($_POST['updateReservation'])){

    $id = $_POST['reservation_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $checkindate = $_POST['checkindate'];
    $chechoutdate = $_POST['checkoutdate'];
    $guestnumber = $_POST['guestnumber'];
    $roomtype = $_POST['roomtype'];
    $specialrequest = $_POST['specialrequest'];

    $sql = 'UPDATE reservation SET reservation_id=:reservation_id, fullname=:fullname, email=:email,phonenumber=:phonenumber,checkindate=:checkindate, checkoutdate=:checkoutdate,guestnumber=:guestnumber,roomtype=:roomtype,specialrequest=:specialrequest WHERE reservation_id= :reservation_id';
    $stmt = $pdo->prepare($sql);

    $reservation = [
        'fullname'=> $fullname,
        'email' => $email,
        'phonenumber' => $phonenumber,
        'checkindate' => $checkindate,
        'checkoutdate'=> $checkoutdate,
        'guestnumber' => $guestnumber,
        'roomtype' => $roomtype,
        'specialrequest' => $specialrequest        
    ];
    try {
        $stmt->execute($reservation);
        // echo 'success!';
        header('Location: reservationdetails.php');
    } catch (PDOException $e) {
        echo 'Error:'. $e->getMessage();
    }

}

if(isset($_GET['delete_reservation'])){

    $id = $_GET['delete_reservation'];
    
    $sql = 'DELETE FROM reservation WHERE reservation_id = :reservation_id';
    $stmt = $pdo->prepare($sql);
    
    $data = [
        'reservation_id' => $id    
    ];
    try {
        $stmt->execute($data);
        echo 'success!';
        header('Location: index.php');
    } catch (PDOException $e) {
        echo 'Error:'. $e->getMessage();
    }
    
    }

?>