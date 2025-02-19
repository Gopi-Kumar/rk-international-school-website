<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="images/x-icon">
    <title>Register for Admission || R K International School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="assets/styles/css/style.css">
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


 


    <form action="./forms/enquiry_form.php" method="post" class="registration_form">
            <h3>Admission Enquiry Form</h3>

            <section>
                <label for="student_name">Student's Name</label>
                <input type="text" id="student_name" name="student_name" placeholder="Enter Name" required>
            </section>
            <section>
                <label for="father_name">Father's Name</label>
                <input type="text" id="father_name" name="fathers_name" placeholder="Enter Father's Name" required>
            </section>
            <section>
                <label for="student_name">Grade</label>
                <select  id="grade" name="grade"  required>
                    <option value="not-selected" default>Select Grade</option>
                    <option value="nur">Nursery</option>
                    <option value="lkg">LKG</option>
                    <option value="ukg">UKG</option>
                    <option value="i">I</option>
                    <option value="ii">II</option>
                    <option value="iii">III</option>
                    <option value="iv">IV</option>
                    <option value="v">V</option>
                    <option value="vi">VI</option>
                    <option value="vii">VII</option>
                    <option value="viii">VIII</option>
                    <option value="ix">IX</option>
                    <option value="x">X</option>
                    <option value="xi">XI</option>
                    <option value="xii">XII</option>
                </select>
            </section>
            <section>
                <label for="prev_school">Current School</label>
                <input name="prev_school" type="text" id="prev_school" placeholder="Previous School Name." required>
            </section>
            <section>
                <label for="address">Address</label>
                <input name="address" type="text" id="address" placeholder="Enter your address" required>
            </section>

            <section>
                <label for="contact_no">Contact No.</label>
                <input name="contact_no" type="text" id="contact_no" placeholder="Enter Contact No." required>
            </section>

            <section>
                <label for="enquiry">Your Enquiry</label>
                <textarea type="text" name="enquiry" id="enquiry" placeholder="Enter your enquiry" required></textarea>
            </section>
            
            <center><button>Submit</button></center>
        </form>  

    <?php include('components/footer.php') ?>   
</body>

    <script src="assets/scripts/script.js"></script>
    <script src="assets/scripts/animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>