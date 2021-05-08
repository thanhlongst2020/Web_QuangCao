<?php 
    require_once('../modal/get_question.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php require_once('header.php') ?>
    <?php require_once('reply_form.php')?>
    <div id="body">
        <h1>ADMIN DASHBOARD</h1>
        <div class="dashboard">
            <div class="dashboard-item">
                <p>Số lượt truy cập</p>
                <p><?php 
                require('../database/Connection.php');
                    $sql ='select * from count_ip;';
                    $result = $conn->query($sql);
                    $count = mysqli_num_rows($result);
                    echo $count;
                ?></p>
            </div>
            <div class="dashboard-item">
                <p>Số lượt quan tâm</p>
                <p>
                <?php 
                require('../database/Connection.php');
                    $sql ='select * from count_interest;';
                    $result = $conn->query($sql);
                    $count = mysqli_num_rows($result);
                    echo $count;
                ?>
                </p>
            </div>
            <div class="dashboard-item">
                <p>Số lượt tin nhắn</p>
                <p><?php include('../modal/count_message.php')?></p>
            </div>
            <div class="dashboard-item">
                <p>Đã phản hồi tin nhắn</p>
                <p><?php include('../modal/count_rep.php')?></p>
            </div>
        </div>
        
        <div class="question">
            <h4>
                Question
            </h4>
            <table class="question-table" id="tbl_question">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Delete</th>
                    <th>Reply</th>
                </tr>
                <?php 
                    get_question();
                ?>
        
            </table>
        </div>
    </div>
    <?php require_once('footer.php') ?>
    <script>
        $(document).ready(function(){
            $(document).on('click', '.btn-delete', function(){
                var id_xoa = $(this).data('id_xoa');
                if(confirm('Bạn thật sự muốn xóa câu trả lời này')){
                    $.ajax({
                    url: 'ajax/ajax_action.php',
                    method: 'POST',
                    data: {id_xoa:id_xoa},
                    success: function(data){
                        if(data){
                            alert('Đã xóa thành công');
                            location.reload(); 
                            // header('location')
                        }
                        else{
                            alert('Dữ liệu chưa được xóa')
                        }
                    }
                })
                }
            })
            $(document).on('click', '.reply_question', function(){
                var id_reply = $(this).data('id_reply');   
                var question_reply = $(this).data('question_reply');        
                var email_reply = $(this).data('email_reply');
                document.querySelector('.bg-modal').style.display = 'flex';
                document.getElementById('id_reply').value = id_reply;
                document.getElementById('name').value = "Thai zoomCop";
                document.getElementById('email').value = email_reply;
                document.getElementById('subject').value = 'Reply from Thai ZoomCop about: " '+question_reply+' "';
            })
        })
    </script>
    <script>

    document.querySelector('.close').addEventListener('click', function(){
      document.querySelector(".bg-modal").style.display = 'none';
    });
    </script>
    <script>
        function sendEmail(){
            // var id_reply =  $('#reply_question').data('id_reply');
            // alert (id_reply);
            var id_reply = $('#id_reply');
            var name = $('#name');
            var email = $('#email');
            var subject = $('#subject');
            var message = $('#message');
            
            if(isNotEmpty(name) && isNotEmpty(email)&& isNotEmpty(subject)&& isNotEmpty(message)){
                $.ajax({
                    url: 'ajax/email_action.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        id_reply: id_reply.val(),
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        message: message.val()
                    },
                    success: function(respone){         
                        alert("Message sent successfully.");
                        $('#myForm')[0].reset();
                        
                    }

                })
            }
        }
        function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border','1px solid red');
                return false;
            }
            else{
                caller.css('border', '');
                return true;
            }
        }
        
    </script>
    
</body>
</html>