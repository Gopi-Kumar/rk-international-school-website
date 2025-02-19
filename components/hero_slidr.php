<?php
    $root_directory = $_SERVER["root_directory"];
?>


<html>
<head>
    <style>
        .hero{
            width:100%;
            height:33.33vw;
            max-height: 800px;
            position: relative;
        }
        .hero #slider {
        width:100% !important;
        position: relative;
        overflow: hidden;
        height: 33.33vw !important;
        }

        .hero .slide {
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height:33.33vw;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        }
        .hero .slide img{
            width:100%;
            height: 33.33vw;
            max-height: 800px;

        }

        .hero .slide.active {
        opacity: 1;
        animation: showSlider 1s;
        }

        .hero button{
            position:absolute;
            bottom:180px;   
            padding:10px 15px;
            background-color: rgba(255,255,255,0.2);
            font-size: 20px;
            font-weight: bold;
            border:none;
            outline:none;
            cursor: pointer;
            
        }
        .hero button:nth-child(1){
            /* right:0; */
        }
        .hero button:nth-child(2){
            right:0;
        }

        @keyframes showSlider {
            from{
                width:0;
                height:33.33%;

            }
            to {
                width:100%;
                height:33.33vw;
            }
        }
        

        @media screen and (max-width:1000px){
            .hero button{
                bottom:100px !important;
            }
        }
        @media screen and (max-width:700px){
            .hero button{
                bottom:50px !important;
            }
        }
        @media screen and (max-width:400px){
            .hero button{
                bottom:30px !important;
                padding:10px;
                font-size:15px;
            }
        }

    </style>
</head>



<body>
    <div class="hero">
        <?php 
            echo 
                "<div id='slider'>
                <div class='slide'>
                  <img src='".$root_directory."/assets/images/hero/12.jpg'' alt='Image 1'>
                </div>
               
                <div class='slide'>
                  <img src='".$root_directory."/assets/images/hero/2.png'  alt='Image 3'>
                </div>
                <div class='slide'>
                <img src='".$root_directory."/assets/images/hero/1.png'  alt='Image 3'>
              </div>
              <div class='slide'>
              <img src='".$root_directory."/assets/images/hero/3.png'  alt='Image 3'>
            </div>
            <div class='slide'>
            <img src='".$root_directory."/assets/images/hero/5.png'  alt='Image 3'>
            </div>
              </div>
              <button  onclick='nextSlide()'><i class='fa-solid fa-angle-right'></i></button>
              <button onclick='previousSlide()'><i class='fa-solid fa-angle-left'></i></button>
              "
            ;


        ?>

    </div>

    <script>
        var slideIndex1 = 0;
        var slides = document.getElementById("slider").getElementsByClassName("slide");

        function showSlide(n) {
        if (n < 0) {
            slideIndex1 = slides.length - 1;
        } else if (n >= slides.length) {
            slideIndex1 = 0;
        } else {
            slideIndex1 = n;
        }

        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");

        }

        slides[slideIndex1].classList.add("active");
        }

        function previousSlide() {
        showSlide(slideIndex1 - 1);
        }

        function nextSlide() {
        showSlide(slideIndex1 + 1);
        }

        // Automatic sliding
        setInterval(function() {
        nextSlide();
        }, 7000); // Adjust the interval (in milliseconds) as desired

        // Show the initial slide
        showSlide(slideIndex1);

    </script>


</body>






</html>