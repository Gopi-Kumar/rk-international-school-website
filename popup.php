
<style>
    .popup{
        position:fixed;
        z-index: 1000;
        top:20px;
        left:36%;
        width:500px;
        /* height:600px; */
        max-width: 95vw;
        /* background:linear-gradient(90deg, rgba(177,128,25,1) 0%, rgba(239,218,102,1) 48%, rgba(177,128,25,1) 100%); */
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        left: 50%;
        transform: translate(-50%, 0);
        flex-direction: column;
        border-radius: 20px;
        box-shadow: 20px 20px 200px 70px black;
        display: none;
        
    } 
    .popup img{
        max-width: 95%;
        max-height: 96%;
    }  
    .popup button:nth-child(1){
        position: absolute;
        top:20px;
        right:20px;
        width:30px;
        height:30px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size:20px;
        background-color: maroon;
        color:white;
        border-radius: 50%;
        cursor: pointer;
    }
    .popup a{
        /* position: relative; */
        /* top:-100px; */
        background-color: maroon;
        color:white;
        font-size:18px;
        outline: none;
        border:0px;
        padding:5px 20px;
        border-radius: 20px;
        margin:10px;
        cursor:pointer;
        text-decoration: none;
    }

    .popup p{
        padding:5px;
    }

    @media screen and (max-width:550px) {
        .popup{
            top: 150px;;
        }
        .popup p{
            font-size: 12px;
        }
        .popup a {
            
                font-size:14px;
            
        }
    }

</style>


<div class="popup"> 
  
    <p class="timer">This popup will be closed in <span class="timer">0</span>s</p>



    <!-- Change Image Location Here -->
    <img src="assets/popup/popup.jpeg" alt="">


    <div class="control">
        <button class="close_popup" onclick="closePopup()"><i class="fa fa-close"></i></button>
        <!-- <a href="https://forms.gle/BLhaFXg7mmgLnPG1A">Apply Now <i class='fa-solid fa-angles-right'> </i></a> -->
    </div>
</div>


<script>

let time = 10;
let countdownInterval; // Store interval reference

function closePopup(){
    document.querySelector(".popup").style.display = "none";
    clearInterval(countdownInterval); // Clear the interval when closing
}

function openPop(){
    document.querySelector(".popup").style.display = "flex";
    time = 10; // Reset timer on open
    document.querySelector(".popup .timer span").innerText = time;

    // Clear any existing intervals
    if(countdownInterval) clearInterval(countdownInterval);
    
    countdownInterval = setInterval(() => {
        time = time - 1;
        document.querySelector(".popup .timer span").innerText = time;
        
        if(time <= 0){
            closePopup();
        }
    }, 1000);
}

setTimeout(() => {
    openPop();
}, 4000);

 


</script>