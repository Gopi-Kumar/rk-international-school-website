<?php
// Load the JSON data
$jsonData = file_get_contents('./faculty.json');
$facultyData = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teaching Staff | R K International School - Narela Road, Safiabad, Sonepat</title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="description" content="<?php echo $facultyData['about']['description']; ?>">
    <meta name="keywords" content="teaching staff, faculty, rk international school, rkis">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/styles/css/style.css?v=1.5">
    <link rel="stylesheet" href="../../assets/styles/css/about.css?v=1.5">
    <link rel="stylesheet" href="../../assets/styles/css/career.css?v=1.5">
    <link rel="stylesheet" href="../../assets/styles/css/staff.css?v=1.9">

    <!-- FontAwesome & Animate.css -->
    <script src="https://kit.fontawesome.com/7ff147d778.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>

    <?php include('../../components/header.php'); ?>

    <div class="teaching_staff">
        <div class="sidebar">
            <button class="about active" onclick="show_teacher(this)">About Our Faculty</button>
            <?php foreach ($facultyData['departments'] as $department): ?>
                <button class="<?php echo $department['id']; ?>" onclick="show_teacher(this)">
                    <?php echo $department['button_text']; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="about-container">
            <!-- About Section -->
            <section class="about active">
                <div>
                    <h2><?php echo $facultyData['about']['title']; ?></h2>
                    <p><?php echo $facultyData['about']['description']; ?></p>
                </div>
            </section>

            <!-- Render each department section -->
            <?php foreach ($facultyData['departments'] as $department): ?>
                <section class="<?php echo $department['id']; ?>">
                    <?php if ($department['id'] === 'principal' || $department['id'] === 'exam_incharge' || $department['id'] === 'jac' || $department['id'] === 'ea'): ?>
                        <!-- Department with individual members handling -->
                        <?php foreach ($department['members'] as $member): ?>
                            <div>
                                <span>
                                    <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                                    <div class="text-container">
                                        <h2><?php echo $member['name']; ?></h2>
                                        <p class="designation">Designation: <b><?php echo $member['designation']; ?></b></p>
                                        <?php if (!empty($member['additional_responsibility'])): ?>
                                            <p class="designation">
                                                Additional Responsibilities:
                                                <b><?php echo $member['additional_responsibility']; ?></b>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </span>
                                <?php if (!empty($member['description'])): ?>
                                    <p class="description"><i><?php echo $member['description']; ?></i></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Department with Head and team members -->
                        <?php if (isset($department['head'])): ?>
                            <div>
                                <span>
                                    <img src="<?php echo $department['head']['image']; ?>" alt="<?php echo $department['head']['name']; ?>">
                                    <div class="text-container">
                                        <h2><?php echo $department['head']['name']; ?></h2>
                                        <p class="designation">
                                            <b>Designation:</b> <?php echo $department['head']['designation']; ?>
                                        </p>
                                    </div>
                                </span>
                                <?php if (!empty($department['head']['description'])): ?>
                                    <p class="description"><?php echo $department['head']['description']; ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($department['featured_teacher'])): ?>
                            <div>
                                <span>
                                    <img src="<?php echo $department['featured_teacher']['image']; ?>" alt="<?php echo $department['featured_teacher']['name']; ?>">
                                    <div class="text-container">
                                        <h2><?php echo $department['featured_teacher']['name']; ?></h2>
                                        <p class="designation">
                                            Designation:
                                            <b><?php echo $department['featured_teacher']['designation']; ?></b>
                                        </p>
                                    </div>
                                </span>
                                <?php if (!empty($department['featured_teacher']['description'])): ?>
                                    <p class="description"><?php echo $department['featured_teacher']['description']; ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($department['members']) && count($department['members']) > 0): ?>
                            <section>
                                <?php foreach ($department['members'] as $member): ?>
                                    <div>
                                        <span>
                                            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                                            <div class="text-container">
                                                <h2><?php echo $member['name']; ?></h2>
                                                <p class="designation">
                                                    Designation:
                                                    <b><?php echo $member['designation']; ?></b>
                                                </p>
                                                <?php if (isset($member['additional_responsibility'])): ?>
                                                    <p class="designation">
                                                        Additional Responsibilities:
                                                        <b><?php echo $member['additional_responsibility']; ?></b>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </span>
                                        <?php if (!empty($member['description'])): ?>
                                            <p class="description"><?php echo $member['description']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </section>
                        <?php endif; ?>
                    <?php endif; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include('../../components/footer.php'); ?>

    <script src="../../assets/scripts/script.js?v=1.5"></script>
    <script src="../../assets/scripts/staff.js?v=1.6"></script>
</body>
</html>
