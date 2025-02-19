
    <?php 
        $root_directory = $_SERVER["root_directory"];
    ?>
    <footer>
        <section>
            <h3>CONTANCT DETAILS</h3>
            <p><b>R K INTERNATIONAL SCHOOL</b><br>
                Narela Road, Safiabad, Sonepat <br>
                Haryana, Pin  - 131103</p>


            <span><i class='fa-solid fa-phone-volume'></i><p>Reception : 8587820850/60/70</p></span>
            <span><i class='fa-solid fa-envelope'> </i>rkischool40@gmail.com</span> 
            <a href='https://www.google.com/maps/dir//Sonipat+-+Narela+Rd,+Safiabad,+Saifabad+Village,+Narela,+Sonipat,+Haryana+131103/@28.8884872,77.0538902,12.88z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390da947fbb1c259:0x650b863556e395ed!2m2!1d77.080017!2d28.8731777'><i class='fa-solid fa-location-dot'></i><p>Get Location</p></a>
        </section> 

        <section>
            <h3>EXPLORE</h3>
            <?php echo "<a href='".$root_directory."/pages/Gallery'><i class='fa-solid fa-angle-right'></i><p>Gallery</p></a>
            <a href='".$root_directory."/pages/career.php'><i class='fa-solid fa-angle-right'></i><p>Career</p></a>
            <a href='".$root_directory."/pages/Faculty/teaching-staff.php'><i class='fa-solid fa-angle-right'></i><p>Faculty</p></a>
            <a href='".$root_directory."/assets/pdfs/mandatory_disclosure.pdf'><i class='fa-solid fa-angle-right'></i><p>Mandatory Disclosure</p></a>";?>
        </section>

        <section>
            <h3>ADMINSTRATION</h3>
            <?php echo "<a href='".$root_directory."/pages/About/principals-message.php'><i class='fa-solid fa-angle-right'></i>Principal</a>
            <a href='".$root_directory."/pages/Faculty/adminstrative-staff.php'><i class='fa-solid fa-angle-right'></i>Adminstrative Staff</a>
            <a href='".$root_directory."/register.php'><i class='fa-solid fa-angle-right'></i>Admission</a>
            <!-- <a href='".$root_directory."/under-maintainance.php'><i class='fa-solid fa-angle-right'></i>Bus Routes</a> -->";?>
        </section>

        <section>
            <h3>BEYOND CURRICULUM</h3>
             <?php echo "<a href='".$root_directory."/pages/Gallery/2022-23/Abhyuday_2022'><i class='fa-solid fa-angle-right'></i>Sports</a>   

             <a href='".$root_directory."/pages/Academics/general-rules.php'><i class='fa-solid fa-angle-right'></i>General Rules</a>
             <a href='".$root_directory."/pages/Academics/school-timing.php'><i class='fa-solid fa-angle-right'></i>School Timing</a>";?>

        </section>
       
    </footer>
    <p class='last_footer'>© 2022 R K International School. All Rights Reserved.</p>                    