# Arme 3 Altis Life WebInterface

[![](https://img.shields.io/badge/phptrends-arma-orange.svg?style=flat-square)](http://phptrends.com/dig_in/ARMA)
[![](https://img.shields.io/codeclimate/github/Gummibeer/a3l-webinterface.svg?style=flat-square)](https://codeclimate.com/github/Gummibeer/a3l-webinterface)

## Settings

* `broadcast.*`             _Text_ - global message
* `curl.key`                _String_ - random key http://randomkeygen.com
* `email.receiver`          _Integer_ - ID of User-Account
* `email.{table}_{action}`  _Boolean_ - send email for that type
    * list all types
* `info.*`                  _String_ - dashboard "Serveradressen" uses the key as label
* `licence.{key}`           _String_ - the human translation for this licence
* `system.show`             _Boolean_ - display the system stats on the dashboard for allowed users
* `player`
    * `max_donator_level`   _Integer_ - the Donatorlevel that is used for new Donators

## Permissions

* `view_database`
* `view_donators`
* `view_gangs`
* `view_players`
* `view_users`
* `view_vehicles`
* `view_weblog`

* `add_donator`

* `edit_player`
    * `_name`
    * `_playerid`
    * `_adminlevel`
    * `_cash`
    * `_bankacc`
* `edit_gang`
* `edit_user`
* `edit_vehicle`

* `delete_donator`
* `delete_user`
* `delete_vehicle`

* `manage_permissions`
* `manage_roles`
* `manage_settings`

## ToDo

### System

* ~~use gulp - less~~
* ~~update app config - ::class~~
* seeder in migration
* ~~add permissions migration~~
* use trans function for vehicle & license names
    * ~~add transd() function~~
    * ~~vehicles~~
    * licenses
* update frontend to new theme

### Refactoring

* Routes
* Auth
* ~~Database~~
    * ~~Controller~~
    * ~~View~~
* DonatorHistory
* Gang
* ~~Home~~
    * ~~Controller~~
    * ~~View~~
* Permission
* Player
* Role
* Setting
* System
* User
* Vehicle
* Weblog
* ~~Formatter~~
    * ~~class in Libs namespace~~
    * ~~HelperServiceProvider & Facade~~
