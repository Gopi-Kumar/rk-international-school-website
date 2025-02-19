<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Admin Dashboard | R K Internation School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../../assets/styles/css/style.css">
    <link rel="stylesheet" href="../../assets/styles/css/gallery.css">
    <link rel="stylesheet" href="../../assets/styles/css/admin-dashboard.css">


    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
      
        table{
            margin:5px;
            width:100%;
            font-size:14px;
        }

        table tr td{
            padding:5px 10px;
            background-color: white;
            border-radius: 3px;
            max-width:300px;
            text-align: center;
        }

        table tr td:last-child(){
            width: 200px; 
        }

        table tr td:nth-child(1){
            width:200px;
        }

        .job_applications{
            display: none; 
        }
    </style>


</head>
<body>      

    <?php include('../../components/header.php') ?> 


    <div class="folder_path">
        <p>Admin Dashboard</p>
        <!-- <i class="fa-solid fa-angles-right"></i> -->
    </div>


    <div class="admin-dashboard">
    <?php 
    if(isset($_POST["admin_username"]) && isset($_POST["admin_password"]) && ($_POST["admin_username"] == "rkis9065") && ($_POST["admin_password"] == "gkkaushik9065")){
        ?>
            <section class="sidebar">
                <button onclick="showTable('enquiries')">Admission Enquiries</button>
                <!-- <button onclick="showTable('job_applictions')">Job Applications</button> -->
            </section>
            <section class="table">
                <table class="enquiries">
                    <caption>Admission Enquiry</caption>
                    <tr>
                        <th>Time</th>
                        <th>Student's Name</th>
                        <th>Father's Name</th>
                        <th>Grade</th>
                        <th>Contact No.</th>
                        <th>Address.</th>
                        <th>Your Enquiry</th>
                    </tr>

                    <?php
                        include('../../database/connectdb.php');
                          $query = "SELECT * FROM `admission_enquiries` ORDER BY `id` DESC";
  
                          // FETCHING DATA FROM DATABASE
                          $result = $conn->query($query);
                          
                            if ($result->num_rows > 0) 
                            {
                                // OUTPUT DATA OF EACH ROW
                                while($row = $result->fetch_assoc())
                                {
                                    $time = date('d/m/Y H:i:s', $row['id']); 
                                    echo "  <tr><td>".$time."</td><td>".$row['stu_name']."</td>
                                    <td>".$row['father_name']."</td>
                                    <td>".$row['grade']."</td>
                                    <td>".$row['contact_no']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['enquiry']."</td></tr>";
                                }
                            } 
                            else {
                                echo "0 results";
                            }
                    ?>

                  

                </table>


            
                
                
                
                <table class="job_applications">
                    <caption>Admission Enquiry</caption>

                    <tr>
                        <th>Student's Name</th>
                        <th>Father's Name</th>
                        <th>Grade</th>
                        <th>Contact No.</th>
                        <th>Your Enquiry</th>
                    </tr>
                    

                </table>
            </section>
           </div>
        <?php
        
    }else{
    
    
        echo "You are not a authorised Person";
    }



    ?>
    </div>
    <?php include('../../components/footer.php') ?>


</body>

    <script src="../../assets/scripts/script.js"></script>
</html>