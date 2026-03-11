"""
Convert HEIC files to JPG in the assets/images folder.
Run: python convert_heic_to_jpg.py
"""
import os

try:
    from pillow_heif import register_heif_opener
    from PIL import Image
    register_heif_opener()
except ImportError:
    print("Installing required packages...")
    os.system("pip install pillow-heif pillow --quiet")
    from pillow_heif import register_heif_opener
    from PIL import Image
    register_heif_opener()

IMAGES_DIR = os.path.join(os.path.dirname(__file__), "wordpress-theme", "proartist-theme", "assets", "images")

def convert_heic_to_jpg():
    if not os.path.exists(IMAGES_DIR):
        print(f"Folder not found: {IMAGES_DIR}")
        return
    
    converted = 0
    for filename in os.listdir(IMAGES_DIR):
        if filename.lower().endswith(".heic"):
            heic_path = os.path.join(IMAGES_DIR, filename)
            jpg_name = os.path.splitext(filename)[0] + ".jpg"
            jpg_path = os.path.join(IMAGES_DIR, jpg_name)
            try:
                img = Image.open(heic_path)
                img.convert("RGB").save(jpg_path, "JPEG", quality=95)
                print(f"Converted: {filename} -> {jpg_name}")
                converted += 1
            except Exception as e:
                print(f"Error converting {filename}: {e}")
    
    if converted == 0:
        print("No HEIC files found in", IMAGES_DIR)
    else:
        print(f"\nDone! Converted {converted} file(s).")

if __name__ == "__main__":
    convert_heic_to_jpg()
