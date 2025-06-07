<?php
// Our Instructors Component
// Displays the leadership team of RK International School

// Load configuration
$config = include 'components/config/instructors-config.php';
$section_title = $config['section_title'];
$instructors = $config['instructors'];
?>

<section class="our_instructor">
    <h3><?php echo $section_title; ?></h3>
    <section>   
        <?php foreach ($instructors as $instructor): ?>
        <div data-aos="fade-down" data-aos-delay="<?php echo $instructor['delay']; ?>">
            <img src="<?php echo $instructor['image']; ?>" alt="<?php echo $instructor['alt']; ?>">
            <p><?php echo $instructor['title']; ?></p>
            <h3><?php echo $instructor['name']; ?></h3>   
        </div>
        <?php endforeach; ?>
    </section>
</section>
