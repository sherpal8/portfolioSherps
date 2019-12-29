<?php

    $nameErr = $surnameErr = $emailErr = $subjectErr = $messageErr = "";
    $name = $surname = $email = $subject = $message = "";

    // If submit button clicked
    if (isset($_POST['submit'])) { 

        // Establish connection with database via $conn
        include_once 'dbh.inc.php';

        // Clean strings. Escape special characters
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $surname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Error handlers
        if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
            header("Location: ../contact.php?contact=empty&name=$name&surname=$surname&email=$email&subject=$subject&message=$message");
            exit();
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("Location: ../contact.php?contact=check-name&surname=$surname&email=$email&subject=$subject&message=$message");
                exit();
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $surname)) {
                header("Location: ../contact.php?contact=check-surname&name=$name&email=$email&subject=$subject&message=$message");
                exit();       
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../contact.php?contact=check-email&name=$name&surname=$surname&subject=$subject&message=$message");
                    exit();
                    } else {
                        $sql = "INSERT INTO user (name, surname, email, subject, message)
                        VALUES ('$name', '$surname', '$email', '$subject', '$message');";
                        mysqli_query($conn, $sql);
                        header("Location: ../contact.php?contact=success");
                    }
                }
            }
        }
    }

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = ($email);
$to = "sherpal@dharmawebdesign.co.uk";
$subject = ($subject);
$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
$message .= 'Comments: ' . $_POST['message'];
$headers = "From:" . $from;
mail($to, $subject, $message, $headers);
echo "The message was sent to portfolioSherps.";