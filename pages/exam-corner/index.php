<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Corner | R K International School</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Visit the Exam Corner at R K International School for exam updates, downloadable resources, and more. Stay up to date with the latest information.">
    <meta name="keywords" content="R K International School, Exam Corner, Downloadable Resources, Exams, Student Portal, Exam Updates">
    <meta name="author" content="R K International School">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="Exam Corner | R K International School">
    <meta property="og:description" content="Explore the Exam Corner at R K International School for updates and downloadable exam resources.">
    <meta property="og:image" content="/assets/images/LOGO.png">
    <meta property="og:url" content="https://www.rkinternationalschool.net/pages/exam-corner/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Exam Corner | R K International School">
    <meta name="twitter:description" content="Explore the Exam Corner at R K International School for updates and downloadable exam resources.">
    <meta name="twitter:image" content="/assets/images/LOGO.png">
    <meta name="twitter:url" content="https://www.rkinternationalschool.net/pages/exam-corner/">

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/LOGO.png" type="image/png">

    <!-- External CSS and JS -->
    <link rel="stylesheet" href="../../assets/styles/css/style.css?v=1.2">
    <link rel="stylesheet" href="../../assets/styles/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <?php include('../../components/header.php') ?>
    
    <div class="folder_path">       
        <p>Exam Corner</p>
    </div>
   
    <div class="download_links">
    <?php
    $directory = "./";
    $files = array_diff(scandir($directory), array("..", ".", "index.php", "style.css"));
    $fileDates = array();
    
    foreach ($files as $value) {
        $src = $value;
        // Using filemtime instead of filectime to get last modified time
        $lastModified = filemtime($src);
        $name = explode(".", $value)[0];
        $displayName = str_replace("_", " ", $name);
        $fileExtension = pathinfo($value, PATHINFO_EXTENSION);
        
        // Store file information
        $fileDates[$value] = array(
            'displayName' => $displayName,
            'lastModified' => $lastModified,
            'fileExtension' => $fileExtension
        );
    }
    
    // Sort by last modified date
    uasort($fileDates, function($a, $b) {
        return $b['lastModified'] - $a['lastModified'];
    });
    
    foreach ($fileDates as $filename => $fileInfo) {
        $displayName = $fileInfo['displayName'];
        $fileExtension = strtolower($fileInfo['fileExtension']);
        echo "<a href='javascript:void(0)' onclick='openModal(\"$filename\", \"$fileExtension\")'>
                $displayName
                <i class='fa-solid fa-eye'></i>
              </a>";
    }
    ?>
    </div>

    <!-- Modal -->
    <div id="fileModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modalTitle"></h3>
                <div class="btn-group">
                    <button class="btn btn-download" onclick="downloadFile()">
                        <i class="fa-solid fa-download"></i> Download
                    </button>
                    <button class="btn btn-close" onclick="closeModal()">
                        <i class="fa-solid fa-times"></i> Close
                    </button>
                </div>
            </div>
            <div class="modal-body" id="modalBody">
            </div>
        </div>
    </div>

    <?php include('../../components/footer.php') ?>

    <script>
        let currentFile = '';

        function openModal(filename, fileType) {
            currentFile = filename;
            const modal = document.getElementById('fileModal');
            const modalBody = document.getElementById('modalBody');
            const modalTitle = document.getElementById('modalTitle');
            
            modalTitle.textContent = filename;
            modalBody.innerHTML = '';

            if (['jpg', 'jpeg', 'png', 'gif'].includes(fileType)) {
                const img = document.createElement('img');
                img.src = `./${filename}`;
                modalBody.appendChild(img);
            } else if (fileType === 'pdf') {
                const iframe = document.createElement('iframe');
                iframe.src = `./${filename}`;
                modalBody.appendChild(iframe);
            } else {
                modalBody.innerHTML = '<p>This file type cannot be previewed. Please download to view.</p>';
            }

            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('fileModal');
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }

        function downloadFile() {
            if (currentFile) {
                const link = document.createElement('a');
                link.href = `./${currentFile}`;
                link.download = currentFile;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('fileModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
