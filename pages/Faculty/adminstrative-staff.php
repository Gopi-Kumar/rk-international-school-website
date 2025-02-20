<?php
// Load the JSON data
$jsonData = file_get_contents('./administrative.json');
$adminData = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <title>Administrative Staff | R K International School - Narela Road, Safiabad, Sonepat</title>
    <link rel="stylesheet" href="../../assets/styles/css/style.css">
    <link rel="stylesheet" href="../../assets/styles/css/about.css">
    <link rel="stylesheet" href="../../assets/styles/css/career.css">
    <link rel="stylesheet" href="../../assets/styles/css/staff.css?v=2.1">

    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php include('../../components/header.php') ?>
    <div class="non_teaching_staff">
        <div class="sidebar">
            <?php foreach ($adminData['departments'] as $department): ?>
                <button class="<?php echo $department['id']; ?>" onclick="show_teacher(this)">
                    <?php echo $department['button_text']; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="about">
            <!-- About Section -->
            <section>
                <div>
                    <h2><?php echo $adminData['about']['title']; ?></h2>
                    <p><?php echo $adminData['about']['description']; ?></p>
                </div>
            </section>

            <!-- Department Sections -->
            <?php foreach ($adminData['departments'] as $department): ?>
                <section class="<?php echo $department['id']; ?>">
                    <?php foreach ($department['members'] as $member): ?>
                        <div>
                            <span>
                                <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                                <h2><?php echo $member['name']; ?></h2>
                                <p class="designation">Designation: <b><?php echo $member['designation']; ?></b></p>
                            </span>
                            
                            <?php if (isset($member['qualification'])): ?>
                                <p class="designation">(<?php echo $member['qualification']; ?>)</p>
                            <?php endif; ?>

                            <?php if (isset($member['additional_responsibility'])): ?>
                                <p class="designation">Additional Responsibility: <?php echo $member['additional_responsibility']; ?></p>
                            <?php endif; ?>

                            <?php if (isset($member['description'])): ?>
                                <p class="description"><i><?php echo $member['description']; ?></i></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include('../../components/footer.php') ?>

    <script src="../../assets/scripts/script.js"></script>
    <script src="../../assets/scripts/staff.js"></script>
</body>
</html>