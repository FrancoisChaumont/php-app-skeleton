# DEPRECATED
[![No Maintenance Intended](http://unmaintained.tech/badge.svg)](http://unmaintained.tech/) 

PHP APP SKELETON - Skeleton code base for php app development

![GitHub release](https://img.shields.io/github/release/FrancoisChaumont/php-app-skeleton.svg)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/FrancoisChaumont/php-app-skeleton/issues)
[![GitHub issues](https://img.shields.io/github/issues/FrancoisChaumont/db.svg)](https://github.com/FrancoisChaumont/php-app-skeleton/issues)
[![GitHub stars](https://img.shields.io/github/stars/FrancoisChaumont/db.svg)](https://github.com/FrancoisChaumont/php-app-skeleton/stargazers)
![Github All Releases](https://img.shields.io/github/downloads/FrancoisChaumont/php-app-skeleton/total.svg)

PHP package to serve as a code base to start new project development.

## Getting started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Requirements
PHP 7.1+

### Installation
Simply copy the repository and build your app upon it.

### Configuration
Modify the *config.php* file to tune your app according to production environment or other preferences.

The file *config.local.php* contains development configuration options.  
These options prevail on the production ones from the *config.php*, thus the *config.local.php* should remain in your development environment and never be used in production.

### Example of use
Code example is provided with the file example.php.

### Customization
Replace the namespace *FC\Skeleton* by any of your choice inside the following files:
* composer.json
* example.php
* src/Exceptions/*.php

## Dependencies
* [Config](https://github.com/hassankhan/config) by Hassan Khan
* [Log](https://github.com/FrancoisChaumont/log) by Francois Chaumont, based on [Monolog](https://github.com/Seldaek/monolog) by Seldaek
* [Dependency Injector](https://github.com/FrancoisChaumont/dependency-injector) by Francois Chaumont

See those repositories for more info on their usage.

## Testing
No tests available.

## Built with
* Visual Studio Code
* XAMPP
* Windows 10

## Authors
* **Francois Chaumont** - *Initial work* - [FrancoisChaumont](https://github.com/FrancoisChaumont)

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Notes
Todo: 
