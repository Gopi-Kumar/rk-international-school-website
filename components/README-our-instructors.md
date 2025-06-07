# Our Instructors Component

## Location
`components/our-instructors.php`

## Description
This component displays the leadership team of RK International School including the Chairman, Managing Director, and Director.

## Features
- Responsive design with AOS (Animate On Scroll) animations
- Configurable instructor data array
- Proper semantic HTML structure
- Accessible image alt attributes
- Progressive animation delays for visual appeal

## Usage
```php
<?php include 'components/our-instructors.php'; ?>
```

## Data Structure
The component uses an array of instructor objects with the following structure:
```php
$instructors = [
    [
        'image' => 'path/to/image.png',
        'alt' => 'Descriptive alt text',
        'title' => 'Position title',
        'name' => 'Full name',
        'delay' => 'Animation delay in ms'
    ]
];
```

## Customization

### Adding New Instructors
To add a new instructor, add a new array element to the `$instructors` array:
```php
[
    'image' => 'assets/images/management/new-instructor.png',
    'alt' => 'Description for accessibility',
    'title' => 'Position Title',
    'name' => 'Full Name',
    'delay' => '300' // Increment delay for staggered animation
]
```

### Modifying Existing Instructors
Edit the corresponding array element in the `$instructors` array.

### Styling
The component uses CSS classes from `assets/styles/css/style.css`:
- `.our_instructor` - Main container
- `.our_instructor > h3` - Section heading
- `.our_instructor section` - Instructors grid container
- `.our_instructor section div` - Individual instructor card
- `.our_instructor section div img` - Instructor images
- `.our_instructor section div h3` - Instructor names
- `.our_instructor section div p` - Instructor titles

### Animation
Uses AOS (Animate On Scroll) library:
- `data-aos="fade-down"` - Fade down animation
- `data-aos-delay` - Staggered animation timing

## Dependencies
- AOS (Animate On Scroll) library
- CSS styling from `style.css`

## File Structure
```
components/
├── our-instructors.php
assets/
├── styles/css/style.css (contains styling)
├── images/management/
    ├── chairman sir.png
    ├── sunita mam.png
    └── akash sir.png
```

## Maintenance Notes
- Update image paths if moving image files
- Maintain consistent naming conventions
- Test accessibility features when making changes
- Ensure animation delays are properly staggered for best visual effect
