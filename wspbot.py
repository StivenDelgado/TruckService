import pyautogui , webbrowser
from  time  import sleep
 
webbrowser.open("https://web.whatsapp.com/send?phone=+573242815979")
sleep(5)

with open ("mensajes.txt",  "r") as file: 
    for line in file: 
        
                                            pyautogui.typewrite(line)
                                            pyautogui.press("enter")