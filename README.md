# CoffeeZee

A coffee recipes library.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Features implemented 
* Implementation of a fully customed theme from scratch
* **Search** functionality
* **Comments** functionality
* Implementation of **Custom Posts** - Here Coffee is considered as a completely independant entity having its properties
* Addition of **Taxonomies** to the Custom Posts
* Creation of a Coffee **Archive**
* Division of sections using **partial templates**
* Integration of Bootstrap

## Prerequisites

### Get the environment ready
* First you will need to install an Apache,PHP,MySQL Server on your computer:</br>
  **Wamp** or **Xamp** for Windows </br>
  **Mamp** for MacOS </br>
  **Lamp** for Linux

* The next step is to: </br> Create a new database in **phpMyAdmin** to store the applications's data.
* Then create a new folder inside your **www** directory:</br>
  For example: wwww/wordpress
* Clone the project inside the newly created project directory  

### Installation
To launch the installation, go to your preferred browser and access the project root folder. </br>
Then follow the wordpress **installation wizard** or change the MySQL settings according to your computer configuration:

In the wp-config.php file
```
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
```

You are now ready to navigate through your local site and manipulate the **admin Dashboard**

## This project was Built With

* [Wordpress](https://wordpress.com/)
Plugins used includes: 

* [Force Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/) - For a consistent image size display through the application
* [ACF - Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) - For implementing custom fields to Custom Posts 

## Author

**Zohary Andrianome**
