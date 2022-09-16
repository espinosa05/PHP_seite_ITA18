from RPi import GPIO
import time
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(13, GPIO.OUT)
GPIO.setup(36, GPIO.OUT)
GPIO.setup(38, GPIO.OUT)
GPIO.setup(40, GPIO.OUT)
Nummer = []
a = 43
while a >= 15:
	print("Versuch Nochmal")
	a = int(input("Wahlen Sie ein Nummer zwischen 0 und 15: "))
for i in range(0, 4):
	if a % 2 == 0:
		a=a/2
Nummer.append(0)
	else:
		a=(a-1)/2
		Nummer.append(1)
Laenge= len(Nummer)
while Laenge < 4:
	Nummer.append(0)
	Laenge = Laenge + 1
Nummer.reverse()
print(Nummer)
if Nummer[0] == 0:
	GPIO.output(13, False)
else:
	GPIO.output(13, True)
if Nummer[1] == 0:
	GPIO.output(36, False)
else:
	GPIO.output(36, True)
if Nummer[2] == 0:
	GPIO.output(38, False)
else:
	GPIO.output(38, True)
if Nummer[3] == 0:
	GPIO.output(40, False)
else:
	GPIO.output(40, True), 4);
8, False)
else:
    GPIO.output(38, True)
if Nummer[3] == 0:
    GPIO.output(40, False)
else:
    GPIO.output(40, True)
