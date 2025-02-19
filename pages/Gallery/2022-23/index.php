<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <title>Session 2022-23 Gallery Images  | R K Internation School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../../../assets/styles/css/style.css">
    <link rel="stylesheet" href="../../../assets/styles/css/gallery.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
</head>
<body>

    <?php include('../../../components/header.php') ?>
    <div class="folder_path">
        <a href="../">Gallery</a>
        <i class="fa-solid fa-angles-right"></i>
        
        <p>Session 2022-23</p>
    </div>

    
    <div class="albums">
    <?php

       require("../../../services/render.php");
       renderAlbumsForGallery();
        
    ?>
    </div>  

   

    
   
    
    <?php include('../../../components/footer.php') ?>


</body>

    <script src="../../../assets/scripts/script.js"></script>
</html>