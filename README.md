# Disha

Disha is a indoor localized navigation system which can be used inside Hospital enivornments whereaccessing the hospital facilities is not that easy. It solves the problem that the GPS System can't even address; accurate indoor navigation systen.
It works based on RSSI Multilatering technology, in which the Hardware we build continuously searches for available WiFi networks and finds the distance to the fixed AP points.

For reference: https://www.mdpi.com/2079-9292/11/2/289

## Hardware
ESP32 Microcontroller is used to continuously scan for WiFi signals and maps the RSSI to each network available. "esp32.ino" returns the Signal Strength.


## Software
Using the data delivered by the hardware part, the current location of the patient is found out. 
