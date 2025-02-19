<!-- <div class="folder_path">
        <a href="../">Gallery</a>
        <i class="fa-solid fa-angles-right"></i>
        <p>Session 2022-23</p>
        <i class="fa-solid fa-angles-right"></i>
        <p>Save Tree</p>
</div> -->


<?php
    $directory = './';
    //scanning directory for folder
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    $parent_directory = dirname("../");
    echo $parent_directory;
?>