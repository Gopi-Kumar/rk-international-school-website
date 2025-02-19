<?php

    

    function renderAlbumsForGallery(){
        $directory = './';
        //scanning directory for folder
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
        // removing last index page
        array_pop($scanned_directory);
        $number_of_directory =  count($scanned_directory);

        foreach ($scanned_directory as $key => $value) {
            $source = urlencode($value);
            $directory_name = str_replace("_", " ", $value);

            echo "<a class='album' href=./".$value."><img src='".$value."/z-thumbnail.jpg'><p><i class='fa-solid fa-image'></i>".$directory_name."</p></a>";
        }
    }
?>