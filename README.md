# Disha

Disha is an indoor localized navigation system which can be used inside Hospital enivornments where accessing the hospital facilities is not that easy. It solves the problem that the GPS System can't even address; that is, an accurate indoor navigation systen.
It works based on RSSI Multilatering technology, in which the Hardware we build continuously searches for available WiFi networks and finds the distance to the fixed AP points.

For reference: https://www.mdpi.com/2079-9292/11/2/289

## Hardware
ESP32 Microcontroller is used to continuously scan for WiFi signals and maps the RSSI to each network available. "esp32.ino" returns the Signal Strength.


## Software
Using the data delivered by the hardware part, the current location of the patient is found out. The same procedure can be repeated to navigate towards the required room.



## Files index
**submitLoc.php** processes the location and finds the room required. 

**test.php** handles the data to test submitLoc.php

**esp32.ino** on uploading to the esp32 will return the available wifi networks and theircorresponding signal strengths, which is then feeded to the backend (submitLoc.php) for further processing.


## Range Signal Strength Indicator
![image](https://github.com/zukardex/disha/assets/27881577/3d79d3c3-8df4-4d16-bdd8-461bf5397dec)

The less negative the value of RSSI is, the more strength it has at the point of scanning. But that doesn't mean the station of scanning is the closest to the WiFi AP with the least negative RSSI, since the AP may or may not be of the same kind, there may be problem with penetration of signals through various objects and this may cause unexpected results.
