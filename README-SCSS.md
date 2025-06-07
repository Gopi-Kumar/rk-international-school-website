# SCSS Development Setup for RK International School Website

## Prerequisites
Make sure you have Node.js installed on your system.

## Installation
Run the following command to install dependencies:
```bash
npm install
```

## Development Commands

### Watch all SCSS files (Development mode)
```bash
npm run scss:dev
```
This will:
- Watch all SCSS files in `assets/styles/scss/`
- Compile them to `assets/styles/css/`
- Generate source maps
- Use expanded CSS output for easier debugging

### Watch only chatbot SCSS (Development mode)
```bash
npm run chatbot:dev
```
This will:
- Watch only `chatbot-enhanced.scss`
- Compile to `chatbot.css`
- Generate source maps
- Use expanded CSS output

### Build for production
```bash
npm run build
```
This will:
- Compile all SCSS files
- Generate compressed CSS
- Remove source maps

### Start development server with SCSS watching
```bash
npm run dev
```
This will:
- Start PHP development server on localhost:8000
- Watch and compile SCSS files automatically

## File Structure
```
assets/
├── styles/
│   ├── scss/           # Source SCSS files
│   │   ├── chatbot-enhanced.scss
│   │   ├── style.scss
│   │   └── ...
│   └── css/            # Compiled CSS files
│       ├── chatbot.css
│       ├── style.css
│       └── ...
```

## SCSS Features Used
- Variables for colors and measurements
- Mixins for reusable styles
- Nested selectors
- Functions (darken, lighten)
- Control directives (@if, @for)
- Media queries
- Animations and keyframes

## Development Workflow
1. Edit SCSS files in `assets/styles/scss/`
2. Run `npm run scss:dev` to watch for changes
3. CSS files will be automatically compiled to `assets/styles/css/`
4. Refresh your browser to see changes

## Production Deployment
1. Run `npm run build` to compile optimized CSS
2. Deploy the generated CSS files along with your PHP application
