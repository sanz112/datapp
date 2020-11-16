<?php
session_start();
$message = '';
$messageErr= '';

//include('Mail.php'); 
           
// Details from Qserver  

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST["signup-submit"])) {
    $message = '';
$messageErr= '';
    include "conn.php";
    // $fullName = test_input($_POST['fullName']);
    $username = test_input($_POST['uid']);
    $email = test_input($_POST['mail']);
    $password = test_input($_POST['pwd']);
    $passwordRepeat = test_input($_POST['pwd-repeat']);
    $phone = test_input($_POST['phone']);
    // $iconAddress = test_input($_POST['iconAddress']);
    // $referal = test_input($_POST['referal']); 
    $userType = test_input($_POST['userType']);
    
    if(empty($username) || empty($email) || empty($password)  || empty($phone) || empty($passwordRepeat)) {
        $messageErr = "*EMPTY FIELDS. Kindly Input Your Details.";
        header("Location: register.php?error=emptyFields&uid=".$username."&mail=".$email);
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[]a-zA-Z0-9]*$/", $username)) {
        $messageErr = "Invalid UserID/Email";
        header("Location: register.php?error=invaliduid");
        exit();
    }   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $messageErr = "Please Check your email and Try again";
        header("Location: register.php?error=invalidmail&uid=".$username);
        exit();
    } else if(!preg_match("/^[]a-zA-Z0-9]*$/", $username)) {
        header("Location: register.php?error=invaliduid&mail=".$email);
        exit();
    } else if($password !== $passwordRepeat) {
         $message = "Both Password are not the Same";
        header("Location: register.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    } else {
        $sql = "SELECT uidSwiftUsers FROM users WHERE uidSwiftUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            $messageErr = "Could not connect to database User";
            header("Location: register.php?error=sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
         if($resultCheck > 0) {
            $messageErr = "User Name Taken";
            header("Location: register.php?error=usertaken&mail=".$email);
            exit();
        }
        else {
            $sql = "SELECT emailSwiftUsers FROM users WHERE emailSwiftUsers=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                $messageErr = "Could not connect to database Email";
                header("Location: register.php?error=sqlerror2");
                exit();
            }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheckNew = mysqli_stmt_num_rows($stmt);
         if($resultCheckNew > 0) {
            $messageErr = "Email Taken";
            header("Location: register.php?error=emailtaken&uid=".$username);
            exit();
        } 
         else {
            $sql = "SELECT phone FROM users WHERE phone=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                $messageErr = "Could not connect to DataBase";
                header("Location: register.php?error=sqlerror2");
                exit();
            }
        else {
            mysqli_stmt_bind_param($stmt, "s", $phone);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheckNew = mysqli_stmt_num_rows($stmt);
         if($resultCheckNew > 0) {
             $messageErr = "Phone Number Taken";
            header("Location: register.php?error=phone_number_taken&uid=".$username."&email=".$email);
            exit();
        } else {
            $message ="Successfully completed your Entry";
            function getToken($len=32) {
                return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
            }
            $token = getToken(20);
            $sql = "INSERT INTO users (uidSwiftUsers, emailSwiftUsers, pwdSwiftUsers, token, phone, userType) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                $messageErr ="Could not register this User. Kindly Re-register. Thanks.";
                header("Location: register.php?error=Not_register");
                exit();
            } else {
                
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $hashedPassword, $token, $phone, $userType);
            $result =mysqli_stmt_execute($stmt); 

            echo $result;
            $body= 'Activate your email;
            <a href="localhost:81/data/Swiftdetails/login.php?email='. $email . '&token='. $token.'">Activate Email</a><br><b>If you did not send this request kindly ignore. Thanks.';
            echo $body;
             
                   // // echo 'Activate your email.
                // //  <a href="localhost:81/data/Swiftdetails/login.php?email='. $email . '&token='. $token.'">Activate Email</a>';
                // echo "<h2 style='display: flex; height: 100%; color: #000; align-items: center; justify-content: center; font-size: 26px;'> Registration Successful. Please Verify your Email Address before proceeding. Thanks";
                // //header("Location: login.php?register=success");
                // exit();
            }
    
            // $body= 'Activate your email;
            // <a href="localhost:81/data/Swiftdetails/login.php?email='. $email . '&token='. $token.'">Activate Email</a><br><b>If you did not send this request kindly ignore. Thanks.';
            // echo $body;
                
               
            }
        }
    }
}
        }
    }
    }
    

 mysqli_stmt_close($stmt);
 mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}

include 'footer.php';
?>