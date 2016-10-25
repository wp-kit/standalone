# [WP Kit (Standalone)](http://creativelittle.uk/wpkit)

WP Kit Standalone was created for use cases where users require the installation of WP Kit in a subdirectory situated inside the root folder a Wordpress install.

The Creative Little WP Kit is a RAD (Rapid Application Framework) framework for Wordpress.

It allows fast Model creation using our Model Layer technology, allowing you to layer on top of the Post or Taxonomy Model in Wordpress to generate Post Types & Taxonomies.

## Requirements

Wordpress 4+

PHP 5.6+

WPKit Installer

Composer

## Installation (Via WPKit Installer)

  * Download the [WP Kit Installer](https://github.com/creativelittledots/WP-Kit-Installer) and install it
  * Run the following command in the root directory of your Wordpress install
  
  ```php
  wpkit new app appname
  ```
  
  * That's it, get coding!
  
## Installation (Via Download)

  * Download this repo and unzip to the the root of your Wordpress installation
  * Name the folder whatever you want your theme to be called
  * Navigate to your app folder in Terminal
  ```php
  cd /path/to/your/new/app/folder
  ```
  * [Installer Composer](https://getcomposer.org/download/)
  * Then finally run the following command to update Composer which will install WP Kit Core
  
  ```php
  composer update
  ```

## Official Documentation

Documentation for the framework can be found at our [Git Docs](http://creativelittledots.github.io/WP-Kit/).

## Security Vulnerabilities

If you discover a security vulnerability within WP Kit, please send an e-mail to tech@creativelittledots.co.uk or raise an issue on this repo. All security vulnerabilities will be promptly addressed.

## License

Creative Little WP Kit is open-sourced software licensed under the MIT License.