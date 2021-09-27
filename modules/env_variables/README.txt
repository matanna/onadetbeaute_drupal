CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers

INTRODUCTION
------------

It provides an interface to view the user defined environment variables from the .env file.
It will read the .env file using third party library called 'PHP dotenv'.
This module creates a service to read the user defined environment variables
from any other custom module by injecting to constructor.

More info:

 * For a full description of the module, visit [the project page]
   (https://www.drupal.org/project/env_variables).  

REQUIREMENTS
------------

This module requires dependency of PHP library "vlucas/phpdotenv".

INSTALLATION
------------

 * Since this module depends on third party PHP library, Use composer to install this module.

 * Install this module as you would normally install a 
   contributed Drupal module. Visit https://www.drupal.org/node/1897420 
   for further information. 
      

CONFIGURATION
-------------

* Configure the Settings in 
  Administration » Configuration » Environment Variables:

1. After install this module, we can see the menu 'Environment Variables' in the
   admin configuration menu.
2. By default, administrator role can access this url. If we want to access
   this url to different role, go to permission page and find the word
   'Access Environment Variables' to set the permission for different role.

MAINTAINERS
-----------

Current maintainers:
  Elavarasan R - https://www.drupal.org/user/1902634
