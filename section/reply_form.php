<div class="bg-modal">
<div id="modal-content">
    <div class="close" >+</div>
    <form class="myForm" id="myForm"
        method="post" enctype="multipart/form-data">
        <h1>Reply Costomer</h1>
        <div>
            <div style="display: none;">
                <input type="text" id="id_reply" name="name"
                    class="inputBox" />
            </div>
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
</div>