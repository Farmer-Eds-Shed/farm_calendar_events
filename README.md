<!---
Full module name and description.
-->
# farm_calendar_events
This module is a Google Calendar add-on for the [farmOS](http://drupal.org/project/farm)
distribution.

It creates Calendar events on creation/update of logs in farmOS


<!---
Geting started.
-->
## Getting started

<!---
Document installation steps.
-->
### Installation

Module is dependant on Drupal Google API PHP Client https://www.drupal.org/project/google_api_client for Google Oath2 Authentication.

#### Install Google API Client: 
1. `$ composer require 'drupal/google_api_client:^4.2'` 
2. `$ drush en google_api_client`

See Also:

1. https://www.drupal.org/docs/contributed-modules/google-api-php-client/google-api-console-configurations
1. https://www.drupal.org/docs/contributed-modules/google-api-php-client/installation-and-configuration

#### Install Farm Calendar Module:

1. Download the repo, either by cloning it or by using the "Download as Zip" function from GitHub. 
1. Copy the folder (farm_calendar_events) (!not the zip) into `/www/web/sites/all/modules/farm/`.
1. Open your farmOS instance online. Go to `Administration -> Extend`. 
1. Search for "calendar".
1. Select it by clicking the checkbox and scroll down to the bottom of the page and hit `Install`
1. Finished


<!---
Document any special configuration the module requires. For example:
- API Keys
- Additional settings options
- External (client) configuration
-->

## Configuration

Calandar details need to be added to farm calendar `/farm/settings/farm_calendar_events`

Google API Credentials need to be added Google API Client `/admin/config/services/google_api_client`
#### Note: Credentials must be authenticated
![image](https://user-images.githubusercontent.com/63633329/189284684-6968c7c2-1242-4df9-84bd-eae01961838b.png)

<!---
Document features the module provides.
-->
## Features

<!---
Document features related to different entity types. For example:
- Assets, logs, taxonomies, quantity types, data streams
  - Base fields (added to all bundles)
  - Bundle fields (added to single bundles)
- Quick Forms
- Field modules
- Special logic
- Other special features as needed
-->

Module creates Google Calendar events from logs, including:
1. Log Date
1. Log Name
1. Log Notes
1. Location
1. Color Coding, green = done, orange = pending
1. Calendar event ID based on log UUID


### Logs
Adds Radio butons to all log types:
1. On Add/Update - Updates calendar on save regardless of status 
1. If Pending - Updates calendar only if saved with status "Pending"
1. If Done - Updates calendar only if saved with status "Done"
1. Remove - Removes any calendar entries on save

### Settings Menu
Adds Calendar Settings menu with fields for
1. Calendar ID
1. Calendar URL

### Menu Toolbar
Adds an iFrame to menu toolbar to display Calendar


## Screenshots

Calendar iframe on Toolbar
![image](https://user-images.githubusercontent.com/63633329/181729337-a0237376-8267-44fa-b33f-f9f6b4162e44.png)

Calendar ID field added to settings menu.

![image](https://user-images.githubusercontent.com/63633329/169897971-9135347c-1d28-4e10-a800-537332a6621e.png)

Radio buttons added to logs to select if logs should be added to calendar based on status.

![image](https://user-images.githubusercontent.com/63633329/169898173-060fbe5e-ccf8-4b48-9233-acb34cfeb08c.png)

![image](https://user-images.githubusercontent.com/63633329/181728656-84d751b6-45db-49f5-9aae-0c7d2af8efbb.gif)


<!---
It might be nice to include a FAQ.
-->
## FAQ

<!---
Include maintainers.
-->
## Maintainers

Current maintainers:
- Farmer ED - (https://github.com/Farmer-Eds-Shed)


