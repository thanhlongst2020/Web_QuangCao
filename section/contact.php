<?php 
    require('../database/Connection.php');
    require('../modal/count_interest.php');
?>
<?php
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    function insert_question($name, $email, $question){
        require('../database/Connection.php');
        $sql = 'insert into question(cont_name, email, question,date_recei,stats) values(?,?,?,now(),false);';
        $stmt = $conn->PREPARE($sql);
        $stmt->BIND_PARAM('sss',$name, $email, $question);
        $stmt->execute();
        $stmt->close();
    }
    session_start();
    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['question'])){
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['question'] = $_GET['question']; 
        insert_question($_SESSION['name'],$_SESSION['email'],$_SESSION['question']);
        phpAlert("Successfully\\n\\nGửi câu hỏi thành công");
        // header('Location: contact.php');
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <?php require_once('header.php') ?>
    <div>
        <div class="contact">
            <div class="contact-text" id="contact">
            <h1>Contact</h1>
            Want to work together?  Get in touch!
            </div>
            <div class="contact-form" id="contact-form">
                <form action="contact.php" action="GET">
                    <input type="text" placeholder="Your Name" name="name" required /><br />
                    <input type="email" placeholder="Your Email" name="email" required /><br />
                    <textarea placeholder="Questions?" name="question" required></textarea><br />
                    <input type="submit" value="Submit" className="button"/>
                </form>
            </div>
        </div>      
    </div>
    <?php require_once('footer.php') ?>
</body>
</html>