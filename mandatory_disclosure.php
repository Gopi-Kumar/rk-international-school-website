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

    <link rel="stylesheet" href="assets/styles/css/style.css?v=1.5">
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

    
    <div class="folder_path">       
        <p>Mandatory Disclosure</p>
    </div>

    <style>
        .links{
            display:flex;
            flex-direction: column;
            margin-left: 115px;
        }

        .links a{
            padding:5px;
        }
    </style>

    <div class="links">
    <?php 
        echo "
        <a target='_new' href='".$root_directory."/assets/pdfs/mandatory_disclosure.pdf'>Pdf of Mandatoy Disclosure</a>
        <a target='_new' href='".$root_directory."/assets/pdfs/Extention of affiliation.pdf'>Affiliation Letter/ recent Extension</a>
        <a target='_new' href='".$root_directory."/assets/pdfs/Recognition Letter.pdf'>Recognition Certificate under RTE, 2009</a>
        <a target='_new' href='".$root_directory."/assets/pdfs/pta.pdf'>PARENTS TEACHERS ASSOCIATION (PTA)</a>
        <a target='_new' href='".$root_directory."/assets/pdfs/Society Registration.pdf'>Society Registration </a>
        <a target='_new' href='".$root_directory."/assets/pdfs/Noc State Board.pdf'>No Objection Certificate issued by State </a>
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


    <?php include('components/footer.php') ?>
</body>

    <script src="assets/scripts/script.js?v=1.2"></script>
    <script src="assets/scripts/animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>