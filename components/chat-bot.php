<html>
    <head>

    </head>
    <body>
        <div class="chatbox">
            <div class="heading">
                <img src="assets/icons/chatbot.png" alt="">
                <section>
                    <h2>Virtual Assistant to RKIS</h2>
                    <p> <img src="./assets/icons/online_bot.png" alt=""> Online</p>

                </section>
            </div>
            <div class="texts">
                <!-- <div class="chatbot_txt">
                    <p class="msg">Hellow Sir, TEsssssssddddddddstng long message that can break</p>
                    <p class="timestamp">03:00 PM</p>
                    <div class="chatbot_txt_tail"></div>
                </div>

                <div class="usr_txt">
                    <p class="msg">Hellow Sir, TEsssssssddddddddstng long message that can break</p>
                    <p class="timestamp">03:00 PM</p>
                    <div class="usr_txt_tail"></div>

                </div> -->
               
            </div>  
            <div class="inputs">
                <input type="text" class="usr_msg" placeholder="Reply Here...">
                <button onclick=takeUsrInput();><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
        <div class="chatbot-handler">
            <img src="assets/icons/chatbot.png" onclick=openChatBot(); alt="">
            <i class="fa-solid fa-xmark" onclick=closeChatBot();></i>
        </div>
    </body>


    <script src="./assets/scripts/chatbot.js"></script>
</html>