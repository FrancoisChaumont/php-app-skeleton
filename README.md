# PHP APP SKELETON - Skeleton code base for php app development
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
