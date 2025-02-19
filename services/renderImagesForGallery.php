<?php
function renderImagesForGallery(){
    $directory = './';
    //scanning directory for images
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    // removing last index page
    array_pop($scanned_directory);
    array_pop($scanned_directory);


    $number_of_directory =  count($scanned_directory);
    
    foreach ($scanned_directory as $key => $value) {
        $source = urlencode($value);
        $directory_name = str_replace("_", " ", $source);

        echo "<a><img src='".$value."'></a>";
    }
}
?>