<?php
include_once '../../components/global_variable.php';

// Fetch administrative staff data from the API
$ch = curl_init($ADMINISTRATIVE_STAFF_API);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$apiData = json_decode($response, true);

// Debug: Add error handling
if (!$response || $httpCode !== 200) {
    error_log("API Error: HTTP $httpCode - Response: " . $response);
}

// Organize staff by departments
$departments = [];
$about = [
    'title' => 'About Our Administrative Staff',
    'description' => 'The administrative staff at R K International School are the backbone of our institution, ensuring seamless operations and a supportive environment for students, faculty, and parents. Their dedication to excellence in school management, communication, and student services helps create a safe, efficient, and welcoming atmosphere. From admissions and records to technology, finance, and daily logistics, our administrative professionals work tirelessly behind the scenes to uphold the school’s values and mission.'
];

if ($apiData && isset($apiData['success']) && $apiData['success'] && !empty($apiData['staffs'])) {
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
        
        // Handle empty position field - use department name as fallback
        $position = !empty($staff['position']) ? $staff['position'] : $staff['department']['name'] . ' Staff';
        
        $member = [
            'name' => $staff['name'],
            'image' => $imageUrl,
            'designation' => $position,
            'description' => $staff['description'],
            'has_description' => !empty($staff['description'])
        ];

        $departments[$deptName]['members'][] = $member;
    }
} else {
    // Fallback when API fails or returns no data
    error_log("Administrative Staff API failed or returned no data. Response: " . json_encode($apiData));
    $departments['general'] = [
        'id' => 'general',
        'button_text' => 'Administrative Staff',
        'members' => []
    ];
}

$facultyData = [
    'about' => $about,
    'departments' => array_values($departments)
];

// Debug: Temporarily show API response (remove this in production)
if (isset($_GET['debug'])) {
    echo "<pre>";
    echo "API URL: " . $ADMINISTRATIVE_STAFF_API . "\n";
    echo "HTTP Code: " . $httpCode . "\n";
    echo "Raw Response: " . $response . "\n";
    echo "Parsed Data: " . json_encode($apiData, JSON_PRETTY_PRINT) . "\n";
    echo "Faculty Data: " . json_encode($facultyData, JSON_PRETTY_PRINT) . "\n";
    echo "</pre>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrative Staff | R K International School - Narela Road, Safiabad, Sonepat</title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="description" content="<?php echo $facultyData['about']['description']; ?>">
    <meta name="keywords" content="administrative staff, admin staff, rk international school, rkis">

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
    <?php include('../../components/header.php') ?>
    <div class="non_teaching_staff">
        <div class="sidebar">
            <button class="about active" onclick="show_teacher(this)">About Administrative Staff</button>
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
            <?php if (!empty($facultyData['departments'])): ?>
                <?php foreach ($facultyData['departments'] as $department): ?>
                    <section class="<?php echo $department['id']; ?>">
                        <?php if (!empty($department['members'])): ?>
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
                        <?php else: ?>
                            <div>
                                <p>No staff members found in this department.</p>
                            </div>
                        <?php endif; ?>
                    </section>
                <?php endforeach; ?>
            <?php else: ?>
                <section class="no-data">
                    <div>
                        <h2>Administrative Staff Information</h2>
                        <p>Administrative staff information is currently being updated. Please check back later.</p>
                        <p style="margin-top: 10px;"><small>Debug: Add ?debug=1 to the URL to see API response details.</small></p>
                    </div>
                </section>
            <?php endif; ?>
        </div>
    </div>

    <?php include('../../components/footer.php') ?>

    <script src="../../assets/scripts/script.js?v=1.5"></script>
    <script src="../../assets/scripts/staff.js?v=1.6"></script>
</body>
</html>