<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Admission Enquiry | R K Internation School - Narela Road, Safiabad, Sonepat</title>
    <link rel="stylesheet" href="../assets/styles/css/style.css">
    <link rel="stylesheet" href="../assets/styles/css/gallery.css">
    <link rel="stylesheet" href="../assets/styles/css/utills.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    
</head>
<body>      

    <?php 
        // session_start();
        include('../components/header.php'); 
    ?> 

    <div class="folder_path">
        <p>Admission Enquiry</p>
        <i class="fa-solid fa-angles-right"></i>
    </div>


    <?php
        include('../database/connectdb.php');
        $stu_name =  $_POST["student_name"];
        $father_name =  $_POST["fathers_name"];
        $grade = $_POST["grade"];
        $contact_no = $_POST["contact_no"];
        $enquiry = $_POST["enquiry"];
        $address = $_POST["address"];
        $pre_school = $_POST["prev_school"];
        $time = time();


        $sql = "INSERT INTO `admission_enquiries` (`id`, `stu_name`, `father_name`, `grade`, `contact_no`, `enquiry`, `address`, `prev_school`) VALUES ('".$time."', '".$stu_name."', '".$father_name."', '".$grade."', '".$contact_no."', '".$enquiry."', '".$address."', '".$pre_school."')";

        if ($conn->query($sql) === TRUE) {
                 ?>
                <div class="form info_panel">
                    <i class="fa-solid fa-check-double"></i>
                    <h2>Thank you!</h2>
                    <p>We have received your enquiry. Someone from our team will contact you soon.</p>
                </div>
                <?php   

            } else {
    ?>
                <div class="form info_panel">
                    <i class="fa-solid fa-close"></i>
                    <h2>Sorry!</h2>
                    <p>Soomething went wrong. Try after some time</p>
                </div>
            <?php     

        }

        

    ?>




  
  
    <?php include('../components/footer.php') ?>


</body>

    <script src="../assets/scripts/script.js"></script>
</html>