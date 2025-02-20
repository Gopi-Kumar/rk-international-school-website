<?php
    $root_directory = $_SERVER["root_directory"];

    $root_directory = "/rkis";
    $servername = "localhost";
    $username = "root";
    $database = "rkis";
    $password = "";


    // $servername = "localhost";
    // $username = "u610726650_new";
    // $database = "u610726650_new";
    // $password = "2>JoSjz2U"; 



    $conn = mysqli_connect($servername, $username, $password, $database);
  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $currentDate = date("d-M");
    // $sql = "SELECT * FROM data WHERE dob like'%$currentDate%'";

    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //         $name = $row['name'];
    //         $dob = $row['dob'];
    //         echo $name." Dob:-".$row['dob']." Grade:-".$row['class'] ." ".$row['section']."<br>";
            
    //     }
    // } else {
    //     // echo "No records found.";
    // }


    

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

       .hero .slide .content{
            position: absolute;
            text-align: center;
            width:100vw;
            bottom:110px;
       }

       .hero .slide .content .name{
            color:white;
            font-size:35px;
            font-weight: bolder; 
       }
       .hero .slide .content .grade{
            color:rgb(239, 218, 102);
            font-size: 20px;
       }


       @media screen and (max-width:1250px) {
         .hero .slide .content{
            bottom:80px;
         }
         .hero .slide .content .name{

         }
         .hero .slide .content .grade{

         }
       }
       @media screen and (max-width:1000px) {
         .hero .slide .content{
            bottom:50px;
         }
         .hero .slide .content .name{
            font-weight: 500;
            font-size:25px;
         }
         .hero .slide .content .grade{
            font-size:20px;
         }
       }
       @media screen and (max-width:820px) {
         .hero .slide .content{
            bottom:30px;
         }
         .hero .slide .content .name{
            font-weight: 500;
            font-size:20px;
         }
         .hero .slide .content .grade{
            font-size:15px;
         }
       }
       @media screen and (max-width:600px) {
         .hero .slide .content{
            bottom:30px;
         }
         .hero .slide .content .name{
            font-weight: 500;
            font-size:16px;
         }
         .hero .slide .content .grade{
            font-size:13px;
         }
       }
       @media screen and (max-width:500px) {
         .hero .slide .content{
            bottom:20px;
         }
         .hero .slide .content .name{
            font-weight: 500;
            font-size:13px;
         }
         .hero .slide .content .grade{
            font-size:11px;
         }
       }

       @media screen and (max-width:400px) {
         .hero .slide .content{
            bottom:10px;
         }
         .hero .slide .content .name{
            font-weight: 500;
            font-size:11px;
         }
         .hero .slide .content .grade{
            font-size:9px;
         }
       }



        .hero .slide.active {
            opacity: 1;
            animation: showSlider 1s;
            background-color: none !important;
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
                  <img src='".$root_directory."/assets/images/hero/12.jpg?v=1.''    1'>
                </div>
                ";
                $currentDate = date("5-Jul");
                $sql = "SELECT * FROM mytable WHERE DAY(STR_TO_DATE(dob, '%d-%b-%Y')) = DAY(CURDATE()) AND MONTH(STR_TO_DATE(dob, '%d-%b-%Y')) = MONTH(CURDATE())
                ";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['name'];
                        $dob = $row['dob'];
                        echo " <div class='slide'>
                        <div class='content'>
                          <p class='name'>".$row['name']."</p>
                          <p class='grade'>".$row['class']." ".$row['section']."</p>
                        </div>
                        <img src='".$root_directory."/assets/images/hero/Birthday banner.jpg?v=3.1'  alt='Image 3'>
      
                      </div>";
                        
                    }
                } else {
                    echo "No records found.";
                }


                echo "<div class='slide'>
                  <img src='".$root_directory."/assets/images/hero/2.png?v=3.1'  alt='Image 3'>
                </div>
                <div class='slide'>
                <img src='".$root_directory."/assets/images/hero/1.png?v=3.1'  alt='Image 3'>
              </div>
              <div class='slide'>
              <img src='".$root_directory."/assets/images/hero/3.png?v=3.1'  alt='Image 3'>
            </div>
            <div class='slide'>
            <img src='".$root_directory."/assets/images/hero/5.png?v=3.1'  alt='Image 3'>
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
        let autoSlideInterval; 

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
            clearInterval(autoSlideInterval)    
            showSlide(slideIndex1 - 1);
            autoSlideInterval = setInterval(function() {
                nextSlide();
            }, 7000); 
        }

        function nextSlide() {
            clearInterval(autoSlideInterval)
            showSlide(slideIndex1 + 1);
            autoSlideInterval = setInterval(function() {
            nextSlide();
            }, 7000); 

        }

        // Automatic sliding
        autoSlideInterval = setInterval(function() {
            nextSlide();
        }, 7000); // Adjust the interval (in milliseconds) as desired

        // Show the initial slide
        showSlide(slideIndex1);

    </script>


</body>






</html>