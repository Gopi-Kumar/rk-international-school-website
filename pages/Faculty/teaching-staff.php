<?php
include_once '../../components/global_variable.php';

// Fetch teaching staff data from the API
$ch = curl_init($TEACHING_STAFF_API);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$apiData = json_decode($response, true);

// Organize staff by departments
$departments = [];
$about = [
    'title' => 'About Our Faculty',
    'description' => 'The faculty at R K International School consists of highly qualified, passionate educators who inspire and guide students to reach their full potential. Our teachers bring a wealth of experience, innovative teaching methods, and a commitment to holistic development. They foster a nurturing and intellectually stimulating environment, encouraging curiosity, creativity, and critical thinking. Through personalized attention and continuous professional growth, our faculty ensures that every student receives the support and motivation needed for academic success and personal growth.'
];

if ($apiData['success'] && !empty($apiData['staffs'])) {
    foreach ($apiData['staffs'] as $staff) {
        $deptName = $staff['department']['name'];
        if (!isset($departments[$deptName])) {
            // Create a safe CSS-compatible ID
            $safeId = strtolower(str_replace([' ', '&', '-', '.', ',', '(', ')', "'", '"', '/', '\\', '+', '=', '@', '#', '$', '%', '^', '*', '!', '?', '<', '>', '|', '`', '~'], '_', $deptName));
            $safeId = preg_replace('/_{2,}/', '_', $safeId); // Replace multiple underscores with single
            $safeId = trim($safeId, '_'); // Remove leading/trailing underscores
            
            $departments[$deptName] = [
                'id' => $safeId,
                'button_text' => $deptName,
                'members' => []
            ];
        }
        
        // Clean up image URL by removing gs:// if present
        $imageUrl = $staff['pic'];
        $imageUrl = str_replace('gs://', '', $imageUrl);
        
        $member = [
            'name' => $staff['name'],
            'image' => $imageUrl,
            'designation' => $staff['position'],
            'description' => $staff['description'],
            'has_description' => !empty($staff['description'])
        ];

        // Special handling for Principal
        if ($staff['position'] === 'Principal') {
            // Add principal to both their department and a special Principal section
            $departments['Principal'] = [
                'id' => 'principal',
                'button_text' => 'Principal',
                'members' => [$member]
            ];
            $departments[$deptName]['head'] = $member;
        } else {
            // For other departments, first member becomes HOD
            if (empty($departments[$deptName]['members'])) {
                $member['is_hod'] = true;
                $member['designation'] = "Head of Department - " . $member['designation'];
            }
            $departments[$deptName]['members'][] = $member;
        }
    }
}

$facultyData = [
    'about' => $about,
    'departments' => array_values($departments)
];
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
    <link rel="stylesheet" href="../../assets/styles/css/staff.css?v=2.3">

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
                    <?php foreach ($department['members'] as $index => $member): ?>
                        <div>
                            <span>
                                <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                                <div class="text-container">
                                    <h2><?php echo $member['name']; ?></h2>
                                    <p class="designation">
                                        <b><?php echo $member['designation']; ?></b>
                                    </p>
                                </div>
                            </span>
                            <?php if (!empty($member['description'])): ?>
                                <p class="description"><?php echo $member['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include('../../components/footer.php'); ?>

    <script src="../../assets/scripts/script.js?v=1.5"></script>
    <script src="../../assets/scripts/staff.js?v=1.6"></script>
</body>
</html>
