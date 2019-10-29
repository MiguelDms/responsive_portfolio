<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message']; 


    $mailTo = "partidodorelogio@hotmail.com";
    $headers = "Mail de: ".$email;
    $txt = "Recebeste um email de ".$name. ".\n\n".$message;

    if (empty($name) || empty($message) || empty($email)) {
        header('Location:../contact.html?signup=empty');
    } else 
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location:../index.php?signup=invalidEmail&name=$name&username=$username");

        } else {
            mail($mailTo, $contact, $txt, $headers);

    header("Location: ../contact.html?mailsent");
        }
}}