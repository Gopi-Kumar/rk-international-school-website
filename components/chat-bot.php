<html>
    <head>
        <link rel="stylesheet" href="assets/styles/css/chatbot.css">
    </head>
    <body>
        <div class="chatbox">
            <div class="heading">
                <img src="assets/icons/chatbot.png" alt="Chatbot">
                <section>
                    <h2>Virtual Assistant for RKIS</h2>
                    <p><img src="./assets/icons/online_bot.png" alt=""> Online</p>
                </section>
            </div>
            <div class="texts">
                <!-- Messages will be dynamically added here -->
            </div>  
            <div class="inputs">
                <input type="text" class="usr_msg" placeholder="Type your message here..." autocomplete="off">
                <button onclick="takeUsrInput();" aria-label="Send message">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </div>
        <div class="chatbot-handler">
            <img src="assets/icons/chatbot.png" onclick="openChatBot();" alt="Open Chat" title="Chat with us">
            <i class="fa-solid fa-xmark" onclick="closeChatBot();" title="Close Chat"></i>
        </div>
    </body>

    <script src="./assets/scripts/chatbot-improved.js"></script>
</html>