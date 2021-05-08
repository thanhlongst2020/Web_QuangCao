<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            div#success {
                text-align: center;
                box-shadow: 1px 1px 5px #455644;
                background: #bae8ba;
                padding: 10px;
                border-radius: 3px;
                margin: 0 auto;
                width: 350px;
            }

            .inputBox {
                width: 100%;
                margin: 5px 0px 15px 0px;
                border: #dedede 1px solid;
                box-sizing: border-box;
                padding: 15px;
            }

            #contact-popup {
                position: absolute;
                top: 0px;
                left: 0px;
                height: 100%;
                width: 100%;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                color: #676767;
                z-index: 1;
                display: none;
            }
            

            .myForm {
                width: 350px;
                margin: 0px;
                background-color: white;
                font-family: Arial;
                position: relative;
                left: 50%;
                top: 50%;
                margin-left: -210px;
                margin-top: -255px;
                box-shadow: 1px 1px 5px #444444;
                padding: 20px 40px 40px 40px;
            }

            #contact-icon {
                padding: 10px 5px 5px 12px;
                width: 58px;
                color: white;
                box-shadow: 1px 1px 5px grey;
                border-radius: 3px;
                cursor: pointer;
                margin: 60px auto;
            }

            .info {
                color: #d30a0a;
                letter-spacing: 2px;
                padding-left: 5px;
            }

            #send {
                background-color: #09F;
                border: 1px solid #1398f1;
                font-family: Arial;
                color: white;
                width: 100%;
                padding: 10px;
                cursor: pointer;
            }

            #contact-popup h1 {
                font-weight: normal;
                text-align: center;
                margin: 10px 0px 20px 0px;
            }

            .input-error {
                border: #e66262 1px solid;
            }
    </style>
</head>
<body>
    <div id="contact-popup">
            <form class="myForm" id="myForm"
                method="post" enctype="multipart/form-data">
                <h1>Reply Costomer</h1>
                <div class="close" >+</div>
                <div>
                    <div>
                        <label>Name: </label><span id="name-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="name" name="name"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Email: </label><span id="email-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="email" name="email"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Subject: </label><span id="subject-info"
                            class="info"></span>
                    </div>
                    <div>
                        <input type="text" id="subject" name="subject"
                            class="inputBox" />
                    </div>
                </div>
                <div>
                    <div>
                        <label>Message: </label><span id="userMessage-info"
                            class="info"></span>
                    </div>
                    <div>
                        <textarea id="message" name="message"
                            class="inputBox"></textarea>
                    </div>
                </div>
                <div>
                    <input type="submit" onclick="sendEmail()" id="send" name="send" value="Send" />
                </div>
            </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script>
        function sendEmail(){
            var name = $('#name');
            var email = $('#email');
            var subject = $('#subject');
            var message = $('#message');
            if(isNotEmpty(name) && isNotEmpty(email)&& isNotEmpty(subject)&& isNotEmpty(message)){
                $.ajax({
                    url: 'email_action.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
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