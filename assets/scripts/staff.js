document.addEventListener('DOMContentLoaded', function() {
    // Get all sidebar buttons and sections
    const sidebarButtons = document.querySelectorAll('.sidebar button');
    const sections = document.querySelectorAll('.about-container > section');
    
    // Function to show a specific section
    function showSection(targetId) {
        // Hide all sections
        sections.forEach(section => {
            section.classList.remove('active');
        });
        
        // Remove active class from all buttons
        sidebarButtons.forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Show the target section
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.classList.add('active');
        }
        
        // Add active class to the clicked button
        const activeButton = document.querySelector(`button[onclick="showSection('${targetId}')"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }
    
    // Make showSection available globally
    window.showSection = showSection;
    
    // Show the first section by default (About)
    if (sections.length > 0) {
        sections[0].classList.add('active');
        if (sidebarButtons.length > 0) {
            sidebarButtons[0].classList.add('active');
        }
    }
});
            } else {
                buttonsContainer.style.maxHeight = '200px';
                toggleButton.innerHTML = '✕ Hide Menu';
                toggleButton.style.borderRadius = '8px 8px 0 0';
            }
        });
        
        // Update toggle button text when department is selected
        sidebarButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(() => {
                    buttonsContainer.style.maxHeight = '0px';
                    toggleButton.innerHTML = `📋 ${this.textContent}`;
                    toggleButton.style.borderRadius = '8px';
                }, 300);
            });
        });
    }
    
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
        
        // Scroll to top of content area
        const aboutContainer = document.querySelector('.about-container');
        if (aboutContainer) {
            aboutContainer.scrollTop = 0;
        }
        
        // On mobile, also scroll the page to show content and add a small delay for better UX
        if (window.innerWidth <= 768) {
            setTimeout(() => {
                aboutContainer.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
            }, 100);
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