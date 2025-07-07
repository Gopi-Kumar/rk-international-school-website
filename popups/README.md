# Popup Images

This folder contains images that will be displayed in the popup system.

## How it works:
- The popup system automatically reads all image files from this folder
- Supported formats: JPG, JPEG, PNG, GIF, WEBP
- Images are displayed one by one with a 10-second timer for each image
- Users can navigate between images using the arrow buttons
- If no images are found in this folder, it falls back to `assets/popup/popup.jpeg`

## To add images:
1. Simply place your image files in this folder
2. The popup will automatically detect and display them
3. Images will be shown in the order they appear in the folder

## Controls:
- **Close button (X)**: Closes the popup immediately
- **Left arrow**: Go to previous image
- **Right arrow**: Go to next image
- **Auto-advance**: Each image displays for 10 seconds before moving to the next
- **Auto-close**: After the last image, the popup closes automatically
