from PIL import Image
import os

# Set the maximum file size in bytes (300KB)
max_file_size_bytes = 300 * 1024

# Get a list of all files in the current folder
current_folder = os.getcwd()
files = os.listdir(current_folder)

# Loop through the files in the current folder
for file_name in files:
    if file_name.endswith(('.jpg', '.jpeg', '.png', '.gif')):
        file_path = os.path.join(current_folder, file_name)
        
        # Open the image
        img = Image.open(file_path)
        
        # Get the current file size
        current_file_size = os.path.getsize(file_path)
        
        # Check if the image is larger than 300KB
        if current_file_size > max_file_size_bytes:
            # Calculate the new dimensions to resize the image while maintaining aspect ratio
            width, height = img.size
            aspect_ratio = width / height
            new_width = int((max_file_size_bytes / current_file_size) ** 0.5 * width)
            new_height = int(new_width / aspect_ratio)
            
            # Resize the image
            img = img.resize((new_width, new_height), Image.ANTIALIAS)
            
            # Save the resized image over the original
            img.save(file_path)
            
            print(f"Resized '{file_name}' to {new_width}x{new_height} pixels and reduced its size to {max_file_size_bytes / 1024:.2f}KB")
