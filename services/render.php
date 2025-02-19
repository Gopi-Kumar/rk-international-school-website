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
    
    
    
    function renderAlbumsForGallery(){
       
        
        $directory = './';
        $scanned_directory = array_diff(scandir($directory), array('..', '.'));
        array_pop($scanned_directory);
        $number_of_directory =  count($scanned_directory);


        $albums = array();

        foreach ($scanned_directory as $key => $value) {

            $ctime = stat($value)["ctime"];
            $source = urlencode($value);
            $directory_name = str_replace("_", " ", $source);
            array_push($albums,  array("ctime" => $ctime, "source"=>$source, "directory"=>$directory_name));             
        }
        
        usort($albums, function($a, $b) {                                                          
            return $a['ctime'] < $b['ctime'];                                                         
        });     

        foreach($albums as $key => $value){

            $s = $value["source"];
            $d = $value["directory"];
            
            echo "<a class='album' href=./".$s."><img src='".$s."/z-thumbnail.jpg'><p><i class='fa-solid fa-image'></i>".$d."</p></a>";
        }
    }
?>