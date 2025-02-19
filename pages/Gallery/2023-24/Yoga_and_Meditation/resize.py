from PIL import Image
import os

# Get the current directory
current_directory = os.getcwd()

# Define the factor by which to resize the images (1/4 in this case)
resize_factor = 0.25

# Iterate through files in the current directory
for filename in os.listdir(current_directory):
    # Check if the file is an image (you can add more image extensions if needed)
    if filename.lower().endswith(('.png', '.jpg', '.jpeg', '.gif', '.bmp', '.tiff', '.webp')):
        # Open the image
        image_path = os.path.join(current_directory, filename)
        img = Image.open(image_path)

        # Get the original dimensions
        width, height = img.size

        # Calculate the new dimensions
        new_width = int(width * resize_factor)
        new_height = int(height * resize_factor)

        # Check the file size in bytes
        file_size = os.path.getsize(image_path)  # Get the file size in bytes
        if file_size > 1024 * 1024:  # Check if the file is larger than 1 MB
            # Resize the image
            resized_img = img.resize((new_width, new_height))

            # Save the resized image with the original filename
            resized_img.save(image_path)

            print(f"Resized and overwrote '{filename}'")
            print(f"Original size: {file_size} bytes, Resized size: {os.path.getsize(image_path)} bytes")

print("All images larger than 1 MB have been resized and overwritten by one-fourth.")
