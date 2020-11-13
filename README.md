# php-ii-nov-2020

## Homework
* For Sun 15 Nov 2020
  * Lab: Prepared Statements
  * Lab: Stored Procedure
  * Lab: Transaction
* For Thu 12 Nov 2020
  * Lab: Traits
  * Review the OrderApp
* For Wed 11 Nov 2020
  * Lab: Interfaces
  * Lab: Type Hinting
  * Lab: Build Custom Exception Class
* For Tues 
  * Lab: Namespace
* For Mon 9 Nov 2020
  * Lab: Create a Class  
  * Lab: Create an Extensible Super Class (eventually will be an Abstract class)
  * Lab: Magic Methods
  * Lab: Abstract Classes
## TODO
* RE: http://localhost:8888/#/2/38: why was a warning not issued for the override?
* Find an example of using Doctrine
* Get example of populating database from geonames.org project using prepared statements

## Class Notes
* https://w3techs.com/
* https://packagist.org/
* Skeleton app for Laminas: example of code that calls classes in namespaces
  * https://github.com/laminas/laminas-mvc-skeleton
  * First need to install Composer: https://getcomposer.org
  * Skeleton app installer: https://docs.laminas.dev/tutorials/getting-started/skeleton-application/
* Doctrine Object Relational Mapping (ORM): https://www.doctrine-project.org/projects/orm.html

## Github Account
* Creating a repository for class:
  * Login to your account
  * Click the plus sign ("+") link top right
  * Click on "initialize the repository with a README"
* After creation
  * Click on the link "Code" and copy the URL to clone
* From inside the VM
  * Open a terminal window
  * Clone your repository from github:
```
git clone <CLONE URL>
```
  * Add your github username and email to the repository under the `[user]` section
```
git config --global --edit
```
## Storing Changes to Github
* After you're done editing, testing and debugging code
* Change to the directory containing your cloned repository
* Do the following:
```
git add *
git status
git commit -m 'Some message to describe the changes you made'
git push
```

## Namespaces
* Good example: https://github.com/laminas/laminas-db/tree/master/src/Adapter/Driver/IbmDb2

## Interfaces / Etc.
* To search an entire directory structure for classes that extend or implement:
```
grep -rn DIR_PATH -e " implements "
grep -rn DIR_PATH -e " extends "
```
* Also, from inside PHP code:
  * `get_parent_class()`: https://www.php.net/manual/en/function.get-parent-class.php
  * `get_declared_interfaces()`: https://www.php.net/manual/en/function.get-declared-interfaces.php
  
## Exceptions
* https://www.php.net/manual/en/class.exception.php

## PDO
* To get the "dsn" syntax go to the specific driver class (https://www.php.net/manual/en/pdo.drivers.php)
  * E.g. for MySQL: https://www.php.net/manual/en/ref.pdo-mysql.connection.php
  * E.g. for DB2  : https://www.php.net/manual/en/ref.pdo-ibm.connection.php

## Errata
* http://localhost:8888/#/4/19: "Currency Value Object" :
  *  `$this->amount = $symbol;`
  * s/be  `$this->symbol = $symbol;`
