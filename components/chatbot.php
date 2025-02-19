 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="assets/styles/css/chatbot.css">
 </head>

 <body>

 </body>

 </html>
 <style>
/*--------------------
Mixins
--------------------*/
/*--------------------
Body
--------------------*/

/*--------------------
Mixins
--------------------*/
/*--------------------
Body
--------------------*/
 </style>



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <link rel='stylesheet prefetch'
     href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>


 <div class="chat">
     <div class="chat-title">
         <h1>R K International School</h1>
         <h2>Educate, Encourage & Empower</h2>
         <figure class="avatar">
             <img src="assets/images/LOGO.png" />
         </figure>

         <div class="r-nav">
             <ul>
                 <li> <a></a></li>

             </ul>

         </div>


     </div>
     <div class="messages">
         <div class="messages-content"></div>
     </div>
     <div class="message-box">
         <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
         <button type="submit" class="message-submit sound-on-click">Send</button>
     </div>

 </div>


 <div class="bg"></div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script
     src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'>
 </script>

 <script>
var $messages = $('.messages-content'),
    d, h, m,
    i = 0;

$(window).load(function() {
    $messages.mCustomScrollbar();
    setTimeout(function() {
        fakeMessage();
    }, 100);
});

function updateScrollbar() {
    $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
        scrollInertia: 10,
        timeout: 0
    });
}

function setDate() {
    d = new Date()
    if (m != d.getMinutes()) {
        m = d.getMinutes();
        $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
    }
}

function insertMessage() {
    msg = $('.message-input').val();
    if ($.trim(msg) == '') {
        return false;
    }
    $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
    setDate();
    $('.message-input').val(null);
    updateScrollbar();
    setTimeout(function() {
        fakeMessage();
    }, 1000 + (Math.random() * 20) * 100);
}

$('.message-submit').click(function() {
    insertMessage();
});

$(window).on('keydown', function(e) {
    if (e.which == 13) {
        insertMessage();
        return false;
    }
})

var Fake = [
    'Hi AlgoOracle at your service ',
    'please enter the stock you\'d like to predict<input type="text" class="form-control oracle-search" name="query"  placeholder="Start typing something to search..."> ',
    'Please Enter Your Target Price',
    'good.....What is your comfortable level for investment loss (in %) <input type="range" value="50" min="0" max="100" step="10" />',
    'we are Predicting... <div class="loading-img"><img src="http://algom.x10host.com/chat/img/chat.gif"  alt=""/></div>',
    'great.. do you want to predict another? <button class="buttonx sound-on-click">Yes</button> <button class="buttony sound-on-click">No</button> ',
    'Bye',
    ':)'
]

function fakeMessage() {
    if ($('.message-input').val() != '') {
        return false;
    }
    $('<div class="message loading new"><figure class="avatar"><img src="http://algom.x10host.com/chat/img/icon-oracle.gif" /></figure><span></span></div>')
        .appendTo($('.mCSB_container'));
    updateScrollbar();

    setTimeout(function() {
        $('.message.loading').remove();
        $('<div class="message new"><figure class="avatar"><img src="http://algom.x10host.com/chat/img/icon-oracle.gif" /></figure>' +
            Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
        setDate();
        updateScrollbar();
        i++;
    }, 1000 + (Math.random() * 20) * 100);

}
 </script>
<!-- 
 <script src="js/index.js"></script>
 <script src="js/sound.js"></script> -->    