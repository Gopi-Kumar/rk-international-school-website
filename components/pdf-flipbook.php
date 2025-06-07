<?php
/**
 * PDF Flipbook Component
 * Displays the school's PDF flipbook with responsive design
 */
?>

<div class="pdf-flipbook-container">
    <iframe 
        src="https://pdf2flipbook.desync.in/view/b1db3a7d-060a-47d4-9315-59a66a28136e" 
        width="100%" 
        height="600"
        frameborder="0" 
        allowfullscreen
        title="R K International School Flipbook"
        loading="lazy">
    </iframe>
</div>

<style>
/* PDF Flipbook Component Styles */
.pdf-flipbook-container {
    width: 100%;
    max-width: 100%;
    margin: 20px 0;
    padding: 0;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background: #f8f9fa;
}

.pdf-flipbook-container iframe {
    width: 100%;
    min-height: 600px;
    border: none;
    display: block;
    background: white;
}

/* Mobile responsive adjustments */
@media (max-width: 768px) {
    .pdf-flipbook-container {
        margin: 15px 0;
        border-radius: 4px;
    }
    
    .pdf-flipbook-container iframe {
        min-height: 400px;
    }
}

@media (max-width: 480px) {
    .pdf-flipbook-container iframe {
        min-height: 350px;
    }
}

/* Loading state */
.pdf-flipbook-container::before {
    content: "Loading flipbook...";
    display: block;
    text-align: center;
    padding: 50px 0;
    color: #666;
    font-size: 16px;
    position: absolute;
    width: 100%;
    z-index: -1;
}
</style>
