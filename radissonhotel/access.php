<?php

//requiring of importing the database connection 
require 'db_con.php';
require 'functions.php';



if (isset($_POST["register"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = ($_POST['password']);

    $sql = "insert into users(fullname, email, password, phone_number) values (:fullname, :email, :password, :phone_number)";
    $stmt = $pdo->prepare($sql);

    $dataTobeInserted = [
        "fullname"=> $fullname,
        "email"=> $email,
        "password"=> $password,
        "phone_number" => $phone_number,
    ];
    if (checkEmailIfExist($email, $pdo) == true) {
        echo 'email already exist!';
    }else{
        try {
            $stmt->execute($dataTobeInserted);
            header("Location: login.php");
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
        }
    }
}


//login process after submitting the form in our login pages
//test whether the name login is set or not null
if (isset($_POST["login"])) {

    //declartion of variables that will hold the users input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // selecting record in database based on the inputted email
    $sql = 'SELECT * FROM users WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $data = ['email'=> $username];
    $stmt->execute($data);
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);

    //get the result and assign in $row variable
    $row = $stmt->fetch();

    //test whether there is have a record and verify the inputted password if matched
    if ($row && password_verify($password, $row['password'])) {

        //setting up the session for username and used id
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['email'];
        $_SESSION['loggedin'] = true;

        //page where you will be redirected if successfully login
        header('Location: aindex.php');
    } else {
        echo 'Invalid username or password!';
    }
}


//logout function
if(isset($_GET['logout'])) {
    // Start the session 
    session_start(); 
    
    // Unset all session variables 
    $_SESSION = array(); 

    // Destroy the session 
    session_destroy();

    //Page that you will be taken to after clicking the logout button
    header('Location: login.php');
}

?>