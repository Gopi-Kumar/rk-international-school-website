
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
    .popup .image-container{
        position: relative;
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
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
    .popup .close_popup{
        position: absolute;
        top:20px;
        right:20px;
        width:30px;
        height:30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size:20px;
        background-color: maroon;
        color:white;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        outline: none;
    }
    .popup .prev-image, .popup .next-image{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: rgba(128, 0, 0, 0.8);
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }
    .popup .prev-image{
        left: 10px;
    }
    .popup .next-image{
        right: 10px;
    }
    .popup .prev-image:hover, .popup .next-image:hover{
        background-color: maroon;
    }
    .popup .image-counter{
        font-size: 14px;
        color: #666;
        margin: 5px 0;
    }
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
        .popup .prev-image, .popup .next-image{
            width: 35px;
            height: 35px;
            font-size: 14px;
        }
        .popup .image-counter{
            font-size: 12px;
        }
    }

</style>


<?php
// Get all image files from the popups folder
$popupFolder = 'popups/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
$images = [];

// Check if popups folder exists, if not use assets/popup
if (!is_dir($popupFolder)) {
    $popupFolder = 'assets/popup/';
}

if (is_dir($popupFolder)) {
    $files = scandir($popupFolder);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($extension, $allowedExtensions)) {
                $images[] = $popupFolder . $file;
            }
        }
    }
}

// If no images found, use default
if (empty($images)) {
    $images[] = 'assets/popup/popup.jpeg';
}
?>

<div class="popup"> 
    <p class="timer">This popup will be closed in <span class="timer">0</span>s</p>
    <p class="image-counter">Image <span class="current-image">1</span> of <span class="total-images"><?php echo count($images); ?></span></p>
    
    <!-- Dynamic image container -->
    <div class="image-container">
        <?php foreach ($images as $index => $image): ?>
            <img src="<?php echo htmlspecialchars($image); ?>" alt="Popup Image <?php echo $index + 1; ?>" class="popup-image" data-index="<?php echo $index; ?>" style="<?php echo $index === 0 ? 'display: block;' : 'display: none;'; ?>">
        <?php endforeach; ?>
    </div>

    <div class="control">
        <button class="close_popup" onclick="closePopup()"><i class="fa fa-close"></i></button>
        <?php if (count($images) > 1): ?>
            <button class="prev-image" onclick="previousImage()"><i class="fa fa-chevron-left"></i></button>
            <button class="next-image" onclick="nextImage()"><i class="fa fa-chevron-right"></i></button>
        <?php endif; ?>
        <!-- <a href="https://forms.gle/BLhaFXg7mmgLnPG1A">Apply Now <i class='fa-solid fa-angles-right'> </i></a> -->
    </div>
</div>


<script>

let time = 10;
let countdownInterval; // Store interval reference
let currentImageIndex = 0;
let totalImages = <?php echo count($images); ?>;
let images = <?php echo json_encode($images); ?>;
let imageTimers = []; // Store individual timers for each image

function closePopup(){
    document.querySelector(".popup").style.display = "none";
    clearInterval(countdownInterval); // Clear the interval when closing
    // Clear all individual image timers
    imageTimers.forEach(timer => clearTimeout(timer));
    imageTimers = [];
}

function updateImageCounter(){
    document.querySelector(".popup .current-image").innerText = currentImageIndex + 1;
    document.querySelector(".popup .total-images").innerText = totalImages;
}

function showImage(index){
    // Hide all images
    document.querySelectorAll('.popup-image').forEach(img => {
        img.style.display = 'none';
    });
    
    // Show current image
    const currentImg = document.querySelector(`[data-index="${index}"]`);
    if(currentImg){
        currentImg.style.display = 'block';
    }
    
    currentImageIndex = index;
    updateImageCounter();
}

function nextImage(){
    if(currentImageIndex < totalImages - 1){
        showImage(currentImageIndex + 1);
        resetTimer();
    } else {
        // If it's the last image, close the popup
        closePopup();
    }
}

function previousImage(){
    if(currentImageIndex > 0){
        showImage(currentImageIndex - 1);
        resetTimer();
    }
}

function resetTimer(){
    // Clear existing interval
    if(countdownInterval) clearInterval(countdownInterval);
    
    // Reset timer
    time = 10;
    document.querySelector(".popup .timer span").innerText = time;
    
    // Start new countdown
    countdownInterval = setInterval(() => {
        time = time - 1;
        document.querySelector(".popup .timer span").innerText = time;
        
        if(time <= 0){
            if(currentImageIndex < totalImages - 1){
                nextImage(); // Move to next image
            } else {
                closePopup(); // Close if it's the last image
            }
        }
    }, 1000);
}

function openPop(){
    document.querySelector(".popup").style.display = "flex";
    currentImageIndex = 0;
    showImage(0);
    resetTimer();
}

// Auto-open popup after 4 seconds
setTimeout(() => {
    openPop();
}, 4000);

</script>