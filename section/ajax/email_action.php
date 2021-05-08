<?php
require_once('../../database/Connection.php');
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){

    // Chuyển trạng thái tin nhắn sang đã trả lời
    $id_reply = $_POST['id_reply'];
    $sql = 'update question set stats = true where id ='.$id_reply.';';
    $result = $conn->query($sql);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once('PHPmailer/PHPMailer.php');
    require_once('PHPmailer/SMTP.php');
    require_once('PHPmailer/Exception.php');

    $mail = new PHPMailer();
    // smtp setting
    $mail->isSMTP();
    $mail->Host         = "smtp.gmail.com";
    $mail->SMTPAuth     = true;
    $mail->Username     = "thanhlongst2013@gmail.com";  // Email của chủ trang web
    $mail->Password     = '100007977877393';            // Password của chủ trang web
    $mail->Port         = 465;
    $mail->SMTPSecure   = 'ssl';

    //email setting
    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress($email);                          // Email của khách hàng được trả lời.
    $mail->Subject = ("($subject)");                    // Chủ đề được trả lời.
    $mail->Body = $message;                             // Thông điệp trả lời từ chủ trang web.

    if($mail->send()){
        $status = "success";
        $response = "Email is send!";
    }
    else{
        $status = "failed";
        $response = "Something is wrong!<br>". $mail->ErrorInfo;
    }
    exit(json_encode(array("status"=> $status, "response" => $response)));
}
