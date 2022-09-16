<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!--Site header-->
    <div class="terminal_window">
      <h1>
        Raspberry Pi Website-interface
      </h1>
    </div> 
    <div>
      <h1>
        <?php
          $val = $_POST["input_buffer"];
          $program_path = "./code/bin_leds.PHP_py";
          shell_exec("touch output.py");
          if (!($source_file_descriptor = fopen("output.py", "r+")))
          {
            echo "error in opening files";
          }
        
          $fmt_source_code =  
            "from RPi import GPIO\n".
            "import time\n".
            "GPIO.setwarnings(False)\n".
            "GPIO.setmode(GPIO.BOARD)\n".
            "GPIO.setup(13, GPIO.OUT)\n".
            "GPIO.setup(36, GPIO.OUT)\n".
            "GPIO.setup(38, GPIO.OUT)\n".
            "GPIO.setup(40, GPIO.OUT)\nNummer = []\na = %s\n".
            "while a >= 15:\n".
            "\tprint(\"Versuch Nochmal\")\n".
                "\ta = int(input(\"Wahlen Sie ein Nummer zwischen 0 und 15: \"))\n".
            #while 4 > a:

            "for i in range(0, 4):\n".
                "\tif a %% 2 == 0:\n".
                    "\t\ta=a/2\n".
                    "Nummer.append(0)\n".
                "\telse:\n".
                    "\t\ta=(a-1)/2\n".
                    "\t\tNummer.append(1)\n".

            "Laenge= len(Nummer)\n".
            "while Laenge < 4:\n".
                "\tNummer.append(0)\n".
                "\tLaenge = Laenge + 1\n".

            "Nummer.reverse()\n".
            "print(Nummer)\n".
            "if Nummer[0] == 0:\n".
                "\tGPIO.output(13, False)\n".
            "else:\n".
                "\tGPIO.output(13, True)\n".
            "if Nummer[1] == 0:\n".
                "\tGPIO.output(36, False)\n".
            "else:\n".
                "\tGPIO.output(36, True)\n".
            "if Nummer[2] == 0:\n".
                "\tGPIO.output(38, False)\n".
            "else:\n".
                "\tGPIO.output(38, True)\n".
            "if Nummer[3] == 0:\n".
                "\tGPIO.output(40, False)\n".
            "else:\n".
                "\tGPIO.output(40, True), 4);\n";
          $source_file_descriptor = fopen($program_path, "w+");
          
          shell_exec("cat p.py > output.py");
          
          fprintf(($out =fopen("output.py", "r+")),  $fmt_source_code,
    $val);
          fclose($source_file_descriptor);
          fclose($out);
          echo "Raspberry Pi führt das Programm aus";
          #shell_exec("rm output.py");
?>
      </h1>
    </div>  
  </body>
</html>
