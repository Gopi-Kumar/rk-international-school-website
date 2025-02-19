<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="images/x-icon">



    <title>R K International School - Narela Road, Safiabad, Sonepat</title>
    <meta name="description" content="A school committed to empower the future of our nation. The expert and trained faculty of RKIS causes the transition of book literacy to experience of the existence which help in creating the multi- dimensional growth of a child. Here, the methodology of teaching is aimed at developing cognitive abilities and generating curiosity in the minds of students to learn more and more.">
    <meta name="keywords" content="r k international school, narela, safiyabad, sonepat">

    <link rel="stylesheet" href="assets/styles/css/style.css?v=123">
    <link rel="stylesheet" href="assets/styles/css/chatbot.css">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />



  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  
</head>
<body>
    <?php include("database/connectdb.php"); ?>
    <?php include('components/header.php') ?>
    <?php include('components/chat-bot.php') ?>
    <div class='float_social_media'>
     <?php
        echo "  <a target='_new' href='https://www.facebook.com/rkinternationalschoolnarela/'><img src='".$root_directory."/assets/icons/facebook.webp' alt=''></a>
        <a target='_new' href='https://www.instagram.com/rkinternational_school/'><img src='".$root_directory."/assets/icons/insta.webp' alt=''></a>
        <a target='_new' href='https://www.youtube.com/channel/UCtScjinZheGMl1GhGaRKiKA'><img src='".$root_directory."/assets/icons/youtube.png  ' alt=''></a>"
    ?>
    </div>

    <?php include('./components/hero_slider.php');?>
   

    <div class="annoucements">
        <p>Latest Happenings</p>  

        <style>
            marquee > div{
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
            }

            marquee > div a{
                margin-right: 10px;
            }
        </style>
        <marquee behavior="smooth" direction="rtl">
            <!-- Annoucement Text -->
            <div>  <p >R K INTERNATIONAL SCHOOL celebrated <a href="./pages/Gallery/2022-23/Republic_Day/">- REPUBLIC DAY.</a></p>   
            <p >R K INTERNATIONAL SCHOOL celebrated its Annual Sports Meet 2022 <a href="./pages/Gallery/2022-23/Abhyuday_2022/">- ABHIYUDAY.</a></p>
            <p  >R K INTERNATIONAL SCHOOL celebrated <a href="./pages/Gallery/2022-23/Childrens_Day/"> Children's Day.</a></p></div>
            <!-- <?php
                  $directory = './latest_news';
                  //scanning directory for images
                  $scanned_directory = array_diff(scandir($directory), array('..', '.'));
                //   print_r($scanned_directory);
                  foreach ($scanned_directory as $key => $value) {
                    echo "<img src='./latest_news/".$value."' >";
                  }
            ?> -->

        
        </marquee>
    </div>


    <div class="why_rkis">
        <h2>Why RKIS?</h2>
        <div>
            <section>
                <div>
                    <img src="./assets/icons/ethics.jpg" alt="">
                    <p>Ethics</p>
                </div>
                <div>
                    <img src="./assets/icons/group.jpg" alt="">
                    <p>Group Activities</p>
                </div>
                <div>
                <img src="./assets/icons/academics.jpg" alt="">
                <p>Academics</p>
                </div>
                    <div>
                    <img src="./assets/icons/individual_development.jpg" alt="">

                        <p>Individual Development</p>
                    </div>
            </section>
    
            <section>
                <img src="./assets/images/why_rkis.png" alt="">
            </section>
    
            <section>
                <div>
                     <i class="fa-solid fa-school"></i>
                    <p>Infrastructure</p>
                </div>
                <div>
                    <img src="./assets/icons/discipline.jpg" alt="">
                    <p>Discipline</p>
                </div>
                <div>
                    <img src="./assets/icons/holistic_development.jpg" alt="">
                    <p>Holistic Development</p>
                </div>
                <div>
                <img src="./assets/icons/innovative_curriculum.jpg" alt="">
                    <p>Innovative Curriculum</p>
                </div>
            </section>
    
        </div>

    </div>




    <div class="principal_message" >
        <div class="message_container">
            <img src="assets/images/principla.jpg" alt="R K International School Principal">
            <div class="message">
                <p>I firmly believe that Education should foster confidence, discipline, clarity in 
                    thought and decision-making ability to set and achieve goals, and above all, 
                    social responsibility as a life-long  process. <a href="./pages/About/principals-message.php">Read More <i class="fa-solid fa-angles-right"></i></a></p>
                <p>
                    Nidhi Nehra <br> Principal
                </p>
            </div>
        </div>
    </div>

    
    <section class="our_instructor">
        <h3>Our Instructors</h3>
        <section>   
          <div data-aos="fade-down">
                <img src="assets/images/management/chairman sir.png" alt="R K International School Chairman">
                <p>Honourable Chairman</p>
                <h3>Mr. Narender Krishan Sharma</h3>   
            </div>
    
            <div>
                <img src="assets/images/management/sunita mam.png" alt="R K International School Managing Director">
                <p>Honourable Managing Director</p>
                <h3>Mrs. Sunita Sharma</h3>
            </div>
    
            <div>
                <img src="assets/images/management/akash sir.png" alt="R K International School Director">
                <p> Honourable Director</p>
                <h3>Mr. Akash Sharma</h3>
            </div>
        </section>
    </section>      


    
        <?php include 'components/image-slider.php';?>


   
    <div class="dist">
        <img src="assets/images/LOGO.png" alt="R K International School Logo">
        <h2>Distinctiveness of R K International School</h2>
        <p>R K International School established in 1997 is a recognized school to C.B.S.E., governed by the rules, regulation and curriculum of C.B.S.E. and is run under the aegis of the “Shri Ram Educational & Welfare Society (Regd.)” under the brilliant guidance of the Chairman, Shri Narender Krishan Sharma

            The school aims to achieve perfection through its fundamental motive of moulding the growing generation of the nation, through impeccable training in education, as well as environment. It is his  dedication and devotion, at this hour, that shall reap for us, an illustrious future, that shall illuminate not only our hearts, but the entire nation.
            
            The R K International School logo encapsulates the vision and the mission of the school. The figure seeks to capture the way in which their experience at the School will enable students to discover for themselves the essential unity of human knowledge.
           
        </p>
    </div>

    <?php include 'components/testimonials.php';?>


    <div class="important_links"> 
        <a href="./pages/Gallery">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48z"/></svg>
            <p>Gallery</p>
        </a>
        <a href="./register.php">
            <!-- <i class="fa-sharp fa-solid fa-imagess"></i> -->

            <i class="fa-regular fa-pen-to-square"></i>
            <p>Register for Admission</p>
        </a>
        <a href="./pages/career.php">
            <svg xmlns="http://www.w3.org/2000/svg" width=75 viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
            <p>Careers</p>
        </a>
        <a href="under-maintainance.php">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="75" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
            <p>Student Zone</p>
        </a>
        <a href="under-maintainance.php">
            <i class="fa-regular fa-building"></i>
            <p>Our Campus</p>
        </a>
        <a href="./under-maintainance.php">
            <i class="fa-regular fa-credit-card"></i> 
            <p>E-Payment</p>
        </a>
       
    </div>

    <a href="./register.php" class="register_for_admission floating_element"><b>Admission <br> Enquiry  </b><i class="fa-solid fa-angles-right"></i></a>
    <!--<a href="https://forms.gle/BLhaFXg7mmgLnPG1A" class="latest_event">-->
    <!--    <img src="./pages/Latest_Event/pragyan_logo.png" alt="">-->
    <!--</a>-->
    

    <?php include('popup.php') ?>

    
    <?php include('components/footer.php') ?>
</body>

    <script src="assets/scripts/script.js?v=1.2"></script>
    <script src="assets/scripts/animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>