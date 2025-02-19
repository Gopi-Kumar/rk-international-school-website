<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Admin Login Panel | R K Internation School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../../assets/styles/css/style.css">
    <link rel="stylesheet" href="../../assets/styles/css/gallery.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
</head>
<body>      

    <?php include('../../components/header.php') ?> 

    <div class="folder_path">
        <p>Admin Login Panel</p>
        <!-- <i class="fa-solid fa-angles-right"></i> -->
    </div>
  
    <form action="./admin-dashboard.php" method="post" class="registration_form">
            <h3>Admin Login Panel</h3>
            <section>
                <label for="admin_username">Username</label>
                <input type="text" id="admin_username" name="admin_username" placeholder="Enter Username" require>
            </section>
            <section>
                <label for="admin_password">Password</label>
                <input type="password" id="admin_password" name="admin_password" placeholder="Enter password" require>
            </section>
           
            
            <center><button>Login</button></center>
        </form>  
   
    <?php include('../../components/footer.php') ?>


</body>

    <script src="../../assets/scripts/script.js"></script>
</html>