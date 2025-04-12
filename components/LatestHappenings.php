<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Happenings - RK International School</title>
    <style>
        :root {
            --blue: #45070e;
            --light-blue: rgb(107, 31, 31);
            --golden-gradient: linear-gradient(90deg, rgba(177,128,25,1) 0%, rgba(239,218,102,1) 48%, rgba(177,128,25,1) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
        }

        .announcements {
            max-width: 100%;
            margin: 0px auto;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .announcements-header {
            background: var(--blue);
            color: white;
            padding: 12px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .announcements-header:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--golden-gradient);
        }

        .announcements-header h2 {
            font-size: 1.5rem;
            margin: 0;
            position: relative;
            display: inline-block;
        }

        .announcements-header h2:after {
            content: "";
            position: absolute;
            bottom: -6px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: var(--golden-gradient);
        }

        .announcements-content {
            background: white;
            padding: 5px 0;
            position: relative;
            overflow: hidden;
        }

        /* Improved marquee container */
        .marquee-container {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        /* New marquee wrapper for better scrolling */
        .marquee-wrapper {
            display: flex;
            position: relative;
            width: max-content;
        }

        /* Updated marquee to handle cloned content */
        .marquee {
            display: flex;
            padding: 10px 0;
            animation: scroll 60s linear infinite;
        }

        .marquee:hover {
            animation-play-state: paused;
        }

        .post-item {
            display: inline-block;
            vertical-align: top;
            width: 350px;
            margin: 0 15px;
            padding: 12px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: left;
            white-space: normal;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(69, 7, 14, 0.1);
            flex-shrink: 0;
        }

        .post-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .post-item:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--light-blue);
        }

        .post-date {
            font-size: 0.75rem;
            color: #777;
            margin-bottom: 5px;
            padding-left: 8px;
        }

        .post-message {
            font-size: 0.9rem;
            line-height: 1.4;
            height: 63px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 8px;
            padding-left: 8px;
        }

        .post-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 8px;
        }

        .read-more {
            display: inline-block;
            background: var(--golden-gradient);
            color: var(--blue);
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .read-more:hover {
            transform: scale(1.05);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .loading {
            text-align: center;
            padding: 20px;
            color: var(--blue);
        }

        /* New animation for smooth infinite scroll */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .announcements {
                margin: 10px;
            }

            .post-item {
                width: 300px;
                padding: 10px;
            }

            .post-message {
                height: 60px;
                -webkit-line-clamp: 3;
            }

            .post-image {
                height: 250px;
            }
        }

        @media (max-width: 480px) {
            .announcements {
                margin: 0px;
            }
            .announcements-header h2 {
                font-size: 0.8rem;
            }

            .post-item {
                width: 250px;
            }

            .post-image {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <div class="announcements">
        <div class="announcements-header">
            <h2>Latest Happenings @ RKIS</h2>
        </div>
        <div class="announcements-content">
            <div class="marquee-container">
                <div class="marquee-wrapper" id="marquee-wrapper">
                    <div class="marquee" id="posts-container">
                        <div class="loading">Loading latest updates...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to format date
        function formatDate(dateString) {
            const date = new Date(dateString);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString('en-US', options);
        }

        // Function to create a post item element
        function createPostElement(post) {
            // Limit message length
            let message = post.message || "";
            
            const postItem = document.createElement('div');
            postItem.className = 'post-item';
            
            const dateElement = document.createElement('div');
            dateElement.className = 'post-date';
            dateElement.textContent = formatDate(post.createdAt);
            
            const messageElement = document.createElement('div');
            messageElement.className = 'post-message';
            messageElement.textContent = message;
            
            postItem.appendChild(dateElement);
            postItem.appendChild(messageElement);
            
            // Add image if available
            if (post.image) {
                const imageElement = document.createElement('img');
                imageElement.src = post.image;
                imageElement.alt = "Post image";
                imageElement.className = 'post-image';
                imageElement.onerror = function() {
                    this.style.display = 'none';
                };
                postItem.appendChild(imageElement);
            }
            
            // Add read more link
            const readMoreLink = document.createElement('a');
            readMoreLink.href = post.url;
            readMoreLink.className = 'read-more';
            readMoreLink.textContent = 'Read More';
            readMoreLink.target = '_blank';
            postItem.appendChild(readMoreLink);
            
            return postItem;
        }

        // Function to create a seamless scrolling marquee
        function createSeamlessMarquee(postsElements) {
            const marqueeWrapper = document.getElementById('marquee-wrapper');
            const originalMarquee = document.getElementById('posts-container');
            originalMarquee.innerHTML = ''; // Clear loading message
            
            // Add original posts
            postsElements.forEach(element => {
                originalMarquee.appendChild(element);
            });
            
            // Clone the marquee and its posts for seamless looping
            const clonedMarquee = originalMarquee.cloneNode(true);
            marqueeWrapper.appendChild(clonedMarquee);
            
            // Calculate appropriate animation duration based on content width
            const totalWidth = originalMarquee.scrollWidth;
            const duration = Math.max(totalWidth / 150, 5); // Adjust speed based on content
            
            // Apply the calculated duration to both marquees
            originalMarquee.style.animationDuration = `${duration}s`;
            clonedMarquee.style.animationDuration = `${duration}s`;
        }

        // Function to fetch Facebook posts from the backend
        async function fetchFacebookPosts() {
            try {
                const response = await fetch('https://middleman.desync.in/public/api/facebook/posts', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username: "rkis_narela",
                        limit: 10
                    })
                });
                
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                
                const data = await response.json();
                
                if (data.success && data.posts.length > 0) {
                    const postElements = [];
                    
                    // Create post elements
                    data.posts.forEach(post => {
                        if (post.message) { // Only show posts with messages
                            const postElement = createPostElement(post);
                            postElements.push(postElement);
                        }
                    });
                    
                    // Create the seamless marquee with the post elements
                    createSeamlessMarquee(postElements);
                } else {
                    throw new Error('No posts found');
                }
            } catch (error) {
                console.error('Error fetching Facebook posts:', error);
                const postsContainer = document.getElementById('posts-container');
                postsContainer.innerHTML = '<div class="loading">Error loading posts. Please try again later.</div>';
            }
        }

        // Fetch posts when the page loads
        document.addEventListener('DOMContentLoaded', fetchFacebookPosts);
    </script>
</body>
</html>