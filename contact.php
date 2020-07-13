<?php

require_once('PHPMailer/PHPMailerAutoload.php');
session_start();
$con=new mysqli("localhost", "root", "", "sahara_database");

if (!$con) {
    echo "Connection failed: " . mysqli_connect_error();
}

if(isset($_POST['entry_submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $subject=$_POST['subject'];
    $content=$_POST['content'];

    $message = $name."\r\n".$email."\r\n".$contact."\r\n".$subject."\r\n".$content."\r\n";

    $query="insert into contact_us (name,email,contact,subject,content) values ('$name','$email','$contact','$subject','$content');";
    // date_default_timezone_set("Asia/Calcutta");
    // $date = date("Y-m-d");
    // $time = date("H:i:S");
    // $query_admin = "insert into admin (date, time, name, email, contact, subject, content) values ('$date','$time','$name','$email','$contact','$subject','$content');";
    
    $result = mysqli_query($con, $query);

    // $result_admin=mysqli_query($con, $query_admin);

    $from = 'pragathiravikumar1999@gmail.com';
    $to = 'pragathiravikumarbr@gmail.com';
    $subject = 'Info';

    mail($to,$subject,$message);
	header("location:index.html");
}
?>