<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
    <title>Session 2023-24 Gallery Images  | R K Internation School - Narela Road, Safiabad, Sonepat</title>

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
        
        <p>Session 2023-24</p>
    </div>

    
    <div class="albums">
        <?php

           
            $directory = [
                "Luv_Kush_Play",
                "Dussehra_Activity",
                "Paratapgarh_Trip",
                "Roundabout_Creations",
                "Paper_Folding_Activity",
                "Transport_Day_Celebration",
                "Gandhi_Jayanti", 
                "Health_Checkup_Camp",
                "Principal_Mam_Birthday",
                "Traffic_Rules_Nursery",
                "Fun_and_Sports_Pre_Primary",
                "Krishna_Janamashtami",
                "Teachers_Day",
                "MD_Mam_Birthday",
                "Rakshabandhan",
                "MUN",
                "Baishakhi_Celebration",
                "Devi_Lal_Park_Trip",
                "Inter_House_Dance_Competition",
                "Earth_Day",
                "Labour_s_Day",
                "Mojo_Land",
                "Mother_s_Day",
                "Pool_Party",
                "Skating_Competition",
                "Special_Assembly",
                "Yoga_and_Meditation",
                "First_Day_Of_The_Session", 
            ];


            foreach($directory as $dir){
                $d = str_replace("_", " ", $dir);
                echo "<a class='album' href=./".$dir."><img src='".$dir."/z-thumbnail.jpg'><p><i class='fa-solid fa-image'></i>".$d."</p></a>";
            }
            // array_pop($scanned_directory);
            // $number_of_directory =  count($scanned_directory);


            // $albums = array();

            // foreach ($scanned_directory as $key => $value) {
            //     $ctime = stat($value)["ctime"];
            //     $source = urlencode($value);
            //     $directory_name = str_replace("_", " ", $source);
            //     array_push($albums,  array("ctime" => $ctime, "source"=>$source, "directory"=>$directory_name));             
            // }

            // usort($albums, function($a, $b) {                                                          
            //     return $a['ctime'] < $b['ctime'];                                                         
            // });     

            // foreach($albums as $key => $value){

            //     $s = $value["source"];
            //     $d = $value["directory"];
                
            //     echo "<a class='album' href=./".$s."><img src='".$s."/z-thumbnail.jpg'><p><i class='fa-solid fa-image'></i>".$d."</p></a>";
            // }
        
        ?>
    </div>  
   
    
    <?php include('../../../components/footer.php') ?>


</body>

    <script src="../../../assets/scripts/script.js"></script>
</html>