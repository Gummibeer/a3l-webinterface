# Arma 3 Altis Life Database Webinterface

## Inhalt

* Installation
* Rechte
* Lizenz

## Installation

Um das Webinterface nutzen zu können muss die ```database.sample.php``` angepasst - *Host*, *Datenbank*, *Benutzer*, *Passwort* etc. - und als ```database.php``` gespeichert werden. Des Weiteren können die *Coplevel*, *Mediclevel*, *ADAC-Level*, *Lizenzen*, *Skilllevel* und *Fahrzeuge* in den entsprechenden JSON-Dateien unter ```app/views/jsons/``` angepasst werden. Alle weiteren Änderungen müssen derzeit noch direkt im Code gemacht werden.

In jeder A3L Tabelle müssen die Spalten ```updated_at``` und ```created_at``` als Timestamp hinzugefügt werden. Des Weiteren müssen die Tabellen ```users```, ```logs``` und es kann die ```statistics``` Tabelle angelegt werden z.B. durch [newtables.sql](https://github.com/Gummibeer/a3l-webinterface/blob/master/newtables.sql). Für die Statistiken wäre noch ein Cronjob nötig welcher die [cronjob.php](https://github.com/Gummibeer/a3l-webinterface/blob/master/cronjob.php) Datei regelmäßig ausführt (zum Server-Restart).
 
 Um das Statistik-Modul vollständig nutzen zu können müsste noch das Startdatum und Interval der aufgezeichneten Daten in der [statistics.blade.php](https://github.com/Gummibeer/a3l-webinterface/blob/master/app/views/statistics.blade.php) geändert werden. ```pointInterval: 4 * 60 * 60 * 1000, pointStart: Date.UTC(2015, 2, 26, 16)```.

## Rechte

|                            | Super-Admin                                                                                | Admin                                                                                      | Support III                                                                                  | Support II                                                                                   | Support I                                                                                    | Mitglied                                                                                     |
|----------------------------|--------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------|
| **Rechte-Level verändern** | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Spieler Level**          | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Spieler Lizenzen**       | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Spieler Geld**           | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Spieler Donator**        | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Spieler Admin**          | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Fahrzeuge**              | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Gang Mitglieder**        | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Gang Konto**             | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Gang deaktivieren**      | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Gang Eigentümer**        | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |
| **Logs ansehen**           | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png) | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![ja](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/check.png)   | ![nein](https://raw.githubusercontent.com/Gummibeer/a3l-webinterface/master/icons/error.png) |

## Lizenz

The [MIT License](http://opensource.org/licenses/MIT) (MIT)

Copyright (c) 2015 [Tom Witkowski](https://github.com/Gummibeer)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.