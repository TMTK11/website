Implementation
=======

This folder contains a guide on how to install this system on your own webserver.

You will find screenshots in the screenshots folder, these will be named after the step they describe.

Step 1 : Is your server ready? (and are you?)
-----------
To run this project your server needs to be capabable of the following : 
Apache/IIS
URL rewriting using .htaccess or web.config
PHP 5.5
MySQL 5.6

The project also uses a /database/ folder in the root. This needs full write permissions.
The uploaded images/videos/audio will be saved here.

If any of the requirements is not met you cannot run this project unfortunally.

Step 2 : The download and unzipping
-----------
You can find a downloadlink for this project on the righthand side of this Github's root or below : 
https://github.com/TMTK11/website/archive/master.zip

Download the zip and unzip it to a location you can easily access. 
If the contents differ from what you see on the Github page you probably downloaded an outdated version. Go back to the pageroot and press download again.

Step 3 : Moving the site to yours
-----------
Make sure the folder you want to install to is empty. 

Drag the contents of the folder you just extracted the zip to to the folder you chose to install the project in.

Check again if the content of your webserver now matches the content of the Github repo (https://github.com/TMTK11/website).

If problems keep persisting you can contact help@ict-lab.nl. Make sure to describe your problem in depth and to include some screenshots.

Step 4 : Configuration
-----------
This step will include some screenshots. It's adviced to follow the steps closely.

Step 4.1
Remove the following files from the root of the project : 
	-README.md
	-.htaccess	if you have IIS installed
	-web.config if you have Apache installed

Step 4.2
Make the following changes to controller/common/database.php and model/common/database.php

In the Database class you'll find the follwing variables :

private $host = "[hostip]";
private $dbName ="[databasename]";
private $dbUsername = "[username]";
private $dbPassword= "[password]";

Replace the variables with your host, your database name and your username and password.

Step 4.3 (Optional)
Replace the logo in /img/logos with yours. Keep the name and height though (width doesn't matter).

Step 4.4
