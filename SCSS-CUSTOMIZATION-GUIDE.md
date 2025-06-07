# SCSS Customization Guide for RK International School Chatbot

## 🎨 Quick Customization Variables

You can easily customize the chatbot appearance by modifying these variables in `assets/styles/scss/chatbot-enhanced.scss`:

### Color Scheme
```scss
$primary-color: #45070e;      // Main brand color (red)
$secondary-color: #d3b143;    // Accent color (gold)
$bot-bg: #fff;                // Bot message background
$user-bg: #e3f2fd;           // User message background (not used currently)
```

### Dimensions
```scss
$border-radius: 12px;         // Global border radius
$shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  // Shadow effects
```

### Typography
```scss
$font-family: "Poppins", sans-serif;     // Main font
$transition-smooth: all 0.3s ease;       // Smooth transitions
```

## 🛠️ Common Customizations

### 1. Change Chatbot Colors
```scss
// To change the floating button color
.chatbot-handler {
    @include gradient-gold;  // Change this mixin
    border: 3px solid $primary-color;  // Change border color
}

// To change message bubble colors
.chatbox .texts .usr_txt .msg {
    @include gradient-red;  // User message color
}

.chatbox .texts .chatbot_txt .msg {
    background: $bot-bg;    // Bot message color
}
```

### 2. Adjust Sizes
```scss
// Chatbot floating button size
.chatbot-handler {
    width: 70px;   // Change to desired width
    height: 70px;  // Change to desired height
}

// Chatbox dimensions
.chatbox {
    height: 500px;  // Change chatbox height
    width: 350px;   // Change chatbox width
}
```

### 3. Modify Animations
```scss
// Bounce animation speed
.chatbot-handler {
    animation: bounce 2s infinite;  // Change "2s" to adjust speed
}

// Message slide-in effect
@keyframes messageSlideIn {
    from {
        opacity: 0;
        transform: translateY(10px);  // Change "10px" for different effect
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
```

### 4. Typography Changes
```scss
// Message font sizes
.chatbox .texts .chatbot_txt .msg,
.chatbox .texts .usr_txt .msg {
    font-size: 14px;     // Change message text size
    line-height: 1.4;    // Change line spacing
}

// Header text
.chatbox .heading section h2 {
    font-size: 16px;     // Change header size
    font-weight: 600;    // Change header weight
}
```

## 🔄 Development Workflow

### 1. Edit SCSS Files
- Make changes to `assets/styles/scss/chatbot-enhanced.scss`
- The watch process will automatically compile to CSS

### 2. Available NPM Scripts
```bash
# Watch for changes (recommended for development)
npm run chatbot:dev

# Build for production (minified)
npm run chatbot:build

# Watch all SCSS files
npm run scss:dev

# Full development server with SCSS watching
npm run dev
```

### 3. File Structure
```
assets/
├── styles/
│   ├── scss/
│   │   └── chatbot-enhanced.scss  (Edit this file)
│   └── css/
│       └── chatbot.css           (Auto-generated - don't edit)
```

## 🎯 Advanced Customizations

### 1. Add New Color Themes
```scss
// Dark theme variables
$dark-primary: #1a1a1a;
$dark-secondary: #333;
$dark-accent: #ffd700;

// Light theme (current)
$light-primary: #45070e;
$light-secondary: #d3b143;
$light-accent: #fff;

// Use CSS custom properties for dynamic theming
:root {
    --primary: #{$light-primary};
    --secondary: #{$light-secondary};
    --accent: #{$light-accent};
}

// Dark mode media query
@media (prefers-color-scheme: dark) {
    :root {
        --primary: #{$dark-primary};
        --secondary: #{$dark-secondary};
        --accent: #{$dark-accent};
    }
}
```

### 2. Custom Mixins for Consistency
```scss
// Create reusable button styles
@mixin chat-button($bg-color: $secondary-color, $text-color: $primary-color) {
    background: $bg-color;
    color: $text-color;
    padding: 10px 15px;
    border-radius: 20px;
    transition: $transition-smooth;
    
    &:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba($bg-color, 0.3);
    }
}

// Usage
.custom-button {
    @include chat-button(#ff6b6b, white);
}
```

### 3. Responsive Breakpoints
```scss
// Custom breakpoint mixins
@mixin mobile {
    @media screen and (max-width: 480px) {
        @content;
    }
}

@mixin tablet {
    @media screen and (max-width: 768px) {
        @content;
    }
}

// Usage
.chatbox {
    width: 350px;
    
    @include tablet {
        width: calc(100vw - 20px);
    }
    
    @include mobile {
        width: calc(100vw - 10px);
    }
}
```

## 🚀 Tips for Best Practices

1. **Use Variables**: Always use SCSS variables for colors, sizes, and fonts
2. **Organize Code**: Group related styles together
3. **Comment Your Code**: Add comments for complex calculations or unusual styles
4. **Test Responsiveness**: Always test on different screen sizes
5. **Use Mixins**: Create reusable mixins for common patterns
6. **Follow BEM**: Use consistent naming conventions
7. **Optimize for Performance**: Use efficient selectors and minimize nesting

## 🐛 Troubleshooting

### SCSS Not Compiling?
1. Check if `npm run chatbot:dev` is running
2. Look for syntax errors in the SCSS file
3. Restart the watch process if needed

### Styles Not Updating?
1. Hard refresh the browser (Ctrl+F5)
2. Check browser developer tools for cached files
3. Verify the CSS file was actually updated

### Build Errors?
1. Check SCSS syntax (missing semicolons, brackets)
2. Verify all imported files exist
3. Look at the terminal output for specific error messages

## 📱 Mobile Optimization

The chatbot is already mobile-optimized, but you can further customize:

```scss
// Custom mobile adjustments
@media screen and (max-width: 480px) {
    .chatbox {
        height: 400px;          // Shorter on mobile
        border-radius: 0;       // Remove border radius on mobile
        
        .texts {
            padding: 10px;      // Less padding on mobile
        }
        
        .inputs input {
            font-size: 16px;    // Prevent zoom on iOS
        }
    }
}
```

Remember: The SCSS watch process is currently running, so any changes you make will be automatically compiled!
