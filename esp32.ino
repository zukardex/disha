#include "WiFi.h"
void setup()
{
    Serial.begin(115200);
    WiFi.mode(WIFI_STA);
    WiFi.disconnect();
    delay(100);
}
void loop()
{
    int n = WiFi.scanNetworks();
    if (n != 0) {
        for (int i = 0; i < n; ++i) {
            Serial.print(WiFi.SSID(i));
            Serial.print(WiFi.RSSI(i));
            delay(10);
        }
    }
    Serial.println("");

    // Wait a bit before scanning again
    delay(5000);
}
