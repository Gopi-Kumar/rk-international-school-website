<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="images/x-icon">
    <title>SLC Issued|| R K International School - Narela Road, Safiabad, Sonepat</title>

    <link rel="stylesheet" href="../assets/styles/css/style.css">
    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>




</head>
<body>
    <?php 
        include('../components/header.php') 
    ?>

    <section>

    <style>
        table{
            border-radius: 20px;
            overflow: hidden;
            text-align: center;
        }
        table tr:first-child{
            background-color: maroon !important;
            color:white;
            font-size:12px;

        }

        table tr:nth-child(odd){
            background-color: seashell;

        }
        table tr:nth-child(even){
            background-color: white;

        }
        table tr td{
            border:none;
            padding:10px;
            font-size:13px;
        }

        table tr td a{
            background-color: maroon;
            color:white;
            font-size:12px;
            padding:5px;
            border-radius: 10px;

        }
    </style>

    <table style="margin:10px auto" border="1">
    <tr>
        <th>Student Name & Grade</th>
        <th>SLC</th>
    </tr>

    <?php
    // Get a list of all files in the current directory
    $files = glob("*.{pdf,rtf,docx}", GLOB_BRACE);

    // Sort the files in alphabetical order
    sort($files);
    
    foreach ($files as $file) {
        $fileNameWithoutExtension = pathinfo($file, PATHINFO_FILENAME);
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        $filePath = urlencode($file);
    
        echo "<tr>";
        echo "<td>$fileNameWithoutExtension</td>";
        echo "<td><a href='$file' target='_blank'>View/Download</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
    </section>
    <?php  include('../components/footer.php') ?>
    
    

</body>



</html>