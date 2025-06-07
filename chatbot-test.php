<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK International School - Chatbot Test</title>
    <link rel="stylesheet" href="assets/styles/css/chatbot.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .test-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #45070e;
            margin-bottom: 10px;
        }
        .header p {
            color: #666;
            font-size: 16px;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .feature {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #d3b143;
        }
        .feature h3 {
            color: #45070e;
            margin-bottom: 10px;
        }
        .feature ul {
            list-style: none;
            padding: 0;
        }
        .feature li {
            padding: 5px 0;
            color: #666;
        }
        .feature li::before {
            content: "✓ ";
            color: #d3b143;
            font-weight: bold;
        }
        .instructions {
            background: #e8f5e8;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #4caf50;
        }
        .instructions h3 {
            color: #2e7d32;
            margin-bottom: 15px;
        }
        .instructions ol {
            color: #2e7d32;
        }
        .instructions li {
            margin-bottom: 10px;
        }
        .scss-commands {
            background: #fff3cd;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ffc107;
            margin-top: 20px;
        }
        .scss-commands h3 {
            color: #856404;
            margin-bottom: 15px;
        }
        .scss-commands code {
            background: #f8f9fa;
            padding: 5px 10px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            color: #495057;
            display: block;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="test-container">
        <div class="header">
            <h1>🤖 Enhanced Chatbot for RK International School</h1>
            <p>Your AI-powered virtual assistant is ready! Click the floating button to start chatting.</p>
        </div>

        <div class="features">
            <div class="feature">
                <h3>🎯 Enhanced Features</h3>
                <ul>
                    <li>40+ contextual responses</li>
                    <li>Fuzzy matching for better understanding</li>
                    <li>Typing indicators</li>
                    <li>Message animations</li>
                    <li>Timestamp tracking</li>
                    <li>Responsive design</li>
                </ul>
            </div>

            <div class="feature">
                <h3>🎨 Modern UI/UX</h3>
                <ul>
                    <li>School brand colors</li>
                    <li>Smooth animations</li>
                    <li>Mobile-first design</li>
                    <li>Accessibility features</li>
                    <li>Custom scrollbars</li>
                    <li>High contrast support</li>
                </ul>
            </div>

            <div class="feature">
                <h3>🔧 SCSS Development</h3>
                <ul>
                    <li>Variables for easy theming</li>
                    <li>Mixins for reusable styles</li>
                    <li>Nested selectors</li>
                    <li>Modern CSS compilation</li>
                    <li>Development watch mode</li>
                    <li>Production optimization</li>
                </ul>
            </div>
        </div>

        <div class="instructions">
            <h3>🚀 How to Use</h3>
            <ol>
                <li><strong>Click the floating chatbot button</strong> in the bottom-right corner</li>
                <li><strong>Try these sample questions:</strong>
                    <ul style="margin-top: 10px;">
                        <li>"Hello" or "Hi" - Get a warm greeting</li>
                        <li>"What are the fees?" - Get fee information</li>
                        <li>"School timings" - Learn about school hours</li>
                        <li>"Facilities" - Discover school amenities</li>
                        <li>"Contact details" - Get contact information</li>
                        <li>"How are you?" - Friendly conversation</li>
                    </ul>
                </li>
                <li><strong>Development Mode:</strong> SCSS is being watched for changes</li>
                <li><strong>Mobile Testing:</strong> Try resizing your browser window</li>
            </ol>
        </div>

        <div class="scss-commands">
            <h3>💻 SCSS Development Commands</h3>
            <p><strong>Watch chatbot SCSS for changes:</strong></p>
            <code>npm run chatbot:dev</code>
            
            <p><strong>Build for production:</strong></p>
            <code>npm run chatbot:build</code>
            
            <p><strong>Watch all SCSS files:</strong></p>
            <code>npm run scss:dev</code>
            
            <p><strong>Start full development server:</strong></p>
            <code>npm run dev</code>
        </div>
    </div>

    <?php include 'components/chat-bot.php'; ?>
</body>
</html>
