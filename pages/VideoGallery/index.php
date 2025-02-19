<?php

    $videos = ["https://www.youtube.com/embed/Swk5zTuIYEc","https://www.youtube.com/embed/fiEpiU2Zy1k", ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Video Gallery | R K Internation School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../../assets/styles/css/style.css?v=1.1">
    <link rel="stylesheet" href="../../assets/styles/css/gallery.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>   
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    
  />

  <style>
    .video_gallery{
       display:flex;
       flex-wrap: wrap;
       align-items: center;
       justify-content: center;
    }

    .video_gallery iframe{
        margin:5px;
        /* width:600px;
        max-width: 98vw;

        height: auto !important ;
        border:1px solid black; */
    }
  </style>
    
</head>
<body>      

    <?php include('../../components/header.php') ?> 

    <div class="folder_path">
        <p>Gallery</p>
        <i class="fa-solid fa-angles-right"></i>
        <p>Video Gallery</p>
    </div>

    <div class="video_gallery">
    <?php
         foreach($videos as $item){

            echo "<iframe width='560' height='315' src='".$item."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
         }
    ?>
  
    </div>
   
    <?php include('../../components/footer.php') ?>


</body>

    <script src="../../assets/scripts/script.js?v=1.2"></script>
</html>