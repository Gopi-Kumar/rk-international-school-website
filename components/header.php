<?php 
    session_start();
    //  $_SERVER["root_directory"] = "";
    $_SERVER["root_directory"] = "/School Website";


    $root_directory = $_SERVER["root_directory"];
    
?>

<header id='header'>
        
        <div class='header'>

            <div class='social_media animate__animated animate__bounceIn'>
                <?php
                    echo "  <a target='_new' href='https://m.facebook.com/rkinternationalschoolnarela/'><img src='".$root_directory."/assets/icons/facebook.webp' alt=''></a>
                    <a target='_new' href='https://www.instagram.com/rkinternational_school/'><img src='".$root_directory."/assets/icons/insta.webp' alt=''></a>
                    <a target='_new' href='https://www.youtube.com/channel/UCtScjinZheGMl1GhGaRKiKA'><img src='".$root_directory."/assets/icons/youtube.png  ' alt=''></a>"
                ?>
            </div>

            <!-- Drop down button  -->
            <i class='fa-solid fa-bars'><sup class='red_alert'>New</sup></i>

            <div class='links'>
                <?php
                    echo "
                     <a target='_new' href='".$root_directory."/mandatory_disclosure.php'> Mandatory Public Disclosure </a>
                     <a target='_new' href='".$root_directory."/slc-issued'> SLC Issued </a>
                    <a target='_new' href='https://online.fliphtml5.com/sldiv/agjw/'>Annual Magazine </a>
                    <a target='_new' href='".$root_directory."/pages/contact-us.php'>Contact Us<i class='fa-solid fa-angles-right'></i></a>
                    <a target='_new' href='".$root_directory."/pages/exam-corner'>Exam Corner<i class='fa-solid fa-angles-right'></i>  <sup class='red_alert'>New</sup></a>
                    <a target='_new' href='".$root_directory."/pages/career.php'>Recruitment <i class='fa-solid fa-angles-right'></i></a>
                    <a target='_new' href='".$root_directory."/pages/admin'>Admin Login<i class='fa-solid fa-angles-right'></i></a>"
                ?>
            </div>
            <!--<a target='_new' href='".$root_directory."/pages/mandatory_disclosure'>Mandatory Public Disclosure <i class='fa-solid fa-angles-right'></i></a>-->
        
        </div>

        <div class='navbar '>
            <div class='name_and_logo animate__animated animate__headShake'>
               <?php 
                    echo " <img style='margin-right:10px' src='".$root_directory."/assets/images/LOGO.png' alt=''>"
               ?>
                <div>
                    <h1> R K International School </h1>
                    <p>Narela Road, Safiabad, Sonepat</p>
                </div>
            </div>

            <!-- Drop down button  -->
            <i class='fa-solid fa-bars'></i>


            <nav>
                <?php echo "<a target='_new' href='".$root_directory."/'><i class='fa-solid fa-house'></i></a>"; ?>

                <div>
                    <p>About <i class='fa-solid fa-angle-down'></i></p>
                    <div class='dropdown'>
                        <?php 
                        echo "
                        <a target='_new' href='".$root_directory."/pages/About/history.php'>History</a>
                
                        <a target='_new' href='".$root_directory."/pages/About/our-vision.php'>Our Vision</a>
                        <a target='_new' href='".$root_directory."/pages/About/our-commitment.php'>Our Commitment</a>
                        <a target='_new' href='".$root_directory."/pages/About/school-motto.php'>School Motto</a>
                        
                        <a target='_new' href='".$root_directory."/pages/About/chairmans-message.php'>Chairman's Message</a>
                        <a target='_new' href='".$root_directory."/pages/About/managing-directors-message.php'>Managing Director's Message</a>
                        <a target='_new' href='".$root_directory."/pages/About/directors-message.php'>Director's Message</a>
                        <a target='_new' href='".$root_directory."/pages/About/principals-message.php'>Principal's Message</a> ";?>
                    </div>
                </div>
                 
                 
                <div>
                    <p>Mandatory Disclosure <i class='fa-solid fa-angle-down'></i></p>
                    <div class='dropdown'>
                        <?php 
                        echo "
                        <a target='_new' href='".$root_directory."/assets/pdfs/mandatory_disclosure.pdf?v2.0'>Pdf of Mandatory Disclosure</a>
                       <a target='_new' href='".$root_directory."/assets/pdfs/Extention of affiliation.pdf'>Affiliation Letter/ recent Extension</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Society Registration.pdf'>Society Registration </a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Noc State Board.pdf'>No Objection Certificate issued by State </a>
                         <a target='_new' href='".$root_directory."/assets/pdfs/Recognition Letter.pdf'>Recognition Certificate under RTE, 2009</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/pta.pdf'>Parents Teachers Association (PTA)</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Building Safety Certificate.pdf'>Building Safety Certificate</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Fire Safety Certificate.pdf'>Fire Safety Certificate</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Self Certiification.pdf'>Self Certification</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Health and Hygeine Certificate.pdf'>Water, Health and Sanitation Certificate</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Fee Structure.pdf'>Fee Structure of School</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Annual Academic Planner.pdf'>Annual Academic Calendar</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/School Management Committee.pdf'>School Management Committee</a>
                        <!--<a target='_new' href='".$root_directory."/under-maintainance.php'>Parents Teacher Association</a>-->
                        <a target='_new' href='".$root_directory."/assets/pdfs/Last Year Board Result.pdf'>Board Examination Result for last three Years</a>
                        <a target='_new' href='".$root_directory."/assets/pdfs/Land Certificate.pdf'>Land Certificate</a>
                        <a target='_new' href='https://rkinternationalschool.net/Inspection%20Video.mp4'>School Inspection Video</a>
                        
                                                ";?>
                    </div>
                </div> 
                
                <div>
                    <p>Adminstration <i class='fa-solid fa-angle-down'></i></p>
                    <div class='dropdown'>
    
                        <?php echo"<a target='_new' href='".$root_directory."/pages/Academics/general-rules.php'>General Rules</a>
                        <a target='_new' href='".$root_directory."/pages/Academics/fee-deposit-schedule.php'>Fee Deposit Schedule</a>
                        <a target='_new' href='".$root_directory."/pages/Academics/school-rules.php'>School Rules</a>
                        <a target='_new' href='".$root_directory."/pages/Academics/school-timing.php'>School Timing</a>
                        <!-- <a target='_new' href='/pages/Academics/school-uniform.php'>School Uniform</a> -->
                        <a target='_new' href='".$root_directory."/pages/Academics/admission-info.php'>Admission Info.</a>
                        <!-- <a target='_new' href='/pages/Academics/list-of-holidays'>List Of Holiday</a> -->
                       "; ?>
                    </div>
                </div>

                

                 <div>
                    <p>Faculty <i class='fa-solid fa-angle-down'></i></p>
                    <div class='dropdown'>
<!--     
                            <a target='_new' href='".$root_directory."/pages/Gallery/before-2022'>
                                Before 2022
                            </a> -->
                            <?php echo"<a target='_new' href='".$root_directory."/pages/Faculty/teaching-staff.php'>Teaching Staff</a>
                            <a target='_new' href='".$root_directory."/pages/Faculty/adminstrative-staff.php'>Administrative Staff</a>

                         ";?>
                    </div>
                </div>
                <div>
                    <p>Gallery <i class='fa-solid fa-angle-down'></i></p>
                    <div class='dropdown'>
<!--     
                            <a target='_new' href='".$root_directory."/pages/Gallery/before-2022'>
                                Before 2022
                            </a> -->
                            <?php echo "<a target='_new' href='".$root_directory."/pages/Gallery'>Image Gallery</a>
                                        <a target='_new' href='".$root_directory."/pages/VideoGallery'>Video Gallery</a>
                                        <a target='_new' href='".$root_directory."/pages/PressGallery'>Press Gallery</a>";?>
                    </div>
                </div>

            
            </nav>

        </div>
</header>



<script>
    window.addEventListener('keydown', (e) => {
        console.log(e);
        if(e.key == 'Control'){
            e.preventDefault();
            return;
        }
    })
</script>
