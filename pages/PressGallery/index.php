<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Press Gallery | R K Internation School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../../assets/styles/css/style.css?v=1.1">
    <link rel="stylesheet" href="../../assets/styles/css/gallery.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    
  />

  <style>
    .press_gallery_images{
       display:flex;
       flex-wrap: wrap;
       align-items: center;
       justify-content: center;
    }

    .press_gallery_images img{
        width:600px;
        max-width: 98vw;
        margin:5px;

        border:1px solid black;
    }
  </style>
    
</head>
<body>      

    <?php include('../../components/header.php') ?> 

    <div class="folder_path">
        <p>Gallery</p>
        <i class="fa-solid fa-angles-right"></i>
        <p>Press Gallery</p>
    </div>

    <div class="press_gallery_images">
    <?php
          $directory = './';
          //scanning directory for images
          $scanned_directory = array_diff(scandir($directory), array('..', '.'));
          // removing last index page
          array_pop($scanned_directory);
  
  
          $number_of_directory =  count($scanned_directory);
          
          foreach ($scanned_directory as $key => $value) {
              $source = urlencode($value);
              $directory_name = str_replace("_", " ", $source);
  
              echo "<a><img src='".$value."'></a>";
          }
    ?>
  
    </div>
   
    <?php include('../../components/footer.php') ?>


</body>

    <script src="../../assets/scripts/script.js?v=1.2"></script>
</html>