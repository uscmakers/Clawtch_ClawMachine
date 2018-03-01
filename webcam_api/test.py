from camera import VideoCamera
import time
from PIL import Image
import io

def main():
	c = VideoCamera()
	while(1):
		im = Image.open(io.BytesIO(c.get_frame()))
		im.show()
		time.sleep(1)


if __name__ == "__main__":
	main()
