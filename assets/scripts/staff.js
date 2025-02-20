document.addEventListener('DOMContentLoaded', function() {
    // Get all sidebar buttons and sections
    const sidebarButtons = document.querySelectorAll('.sidebar button');
    const sections = document.querySelectorAll('.about-container > section');
    
    // Function to show selected section
    window.show_teacher = function(element) {
        // Hide all sections
        sections.forEach(section => {
            section.style.display = 'none';
            section.classList.remove('active');
        });
        
        // Show selected section
        const sectionClass = element.className.split(' ')[0]; // Get first class
        const sectionToShow = document.querySelector(`.about-container > section.${sectionClass}`);
        if (sectionToShow) {
            sectionToShow.style.display = 'block';
            sectionToShow.classList.add('active');
        }
        
        // Update active button state
        sidebarButtons.forEach(btn => {
            btn.classList.remove('active');
        });
        element.classList.add('active');
        
        // Scroll to top of content on mobile
        if (window.innerWidth <= 650) {
            const aboutContainer = document.querySelector('.about-container');
            aboutContainer.scrollTop = 0;
        }
    };
    
    // Add lazy loading for images
    const staffImages = document.querySelectorAll('.teaching_staff img, .non_teaching_staff img');
    staffImages.forEach(img => {
        img.setAttribute('loading', 'lazy');
        
        // Add placeholder while image loads
        const originalSrc = img.getAttribute('src');
        img.setAttribute('src', 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 200" fill="%23f5f5f5"%3E%3Crect width="300" height="200" /%3E%3C/svg%3E');
        
        const newImg = new Image();
        newImg.onload = function() {
            img.setAttribute('src', originalSrc);
        };
        newImg.src = originalSrc;
        
        // Add click to view larger image
        img.addEventListener('click', function() {
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0,0,0,0.8)';
            modal.style.display = 'flex';
            modal.style.alignItems = 'center';
            modal.style.justifyContent = 'center';
            modal.style.zIndex = '9999';
            
            const modalImg = document.createElement('img');
            modalImg.setAttribute('src', this.getAttribute('src'));
            modalImg.style.maxHeight = '80vh';
            modalImg.style.maxWidth = '90vw';
            modalImg.style.borderRadius = '5px';
            modalImg.style.border = '5px solid #FFD700';
            
            modal.appendChild(modalImg);
            document.body.appendChild(modal);
            
            modal.addEventListener('click', function() {
                document.body.removeChild(modal);
            });
        });
    });
    
    // Set first button as active by default (About section)
    const aboutButton = document.querySelector('.sidebar button.about');
    if (aboutButton) {
        aboutButton.classList.add('active');
    }
    
    // Implement smooth scroll on mobile
    if (window.innerWidth <= 650) {
        const aboutContainer = document.querySelector('.about-container');
        aboutContainer.style.scrollBehavior = 'smooth';
    }
});