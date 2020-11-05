# php-ii-nov-2020

## Homework
* For Tues 
  * Lab: Namespace
* For Fri 6 Nov 2020
  * Lab: Create a Class  
  * Lab: Create an Extensible Super Class
## Class Notes
* https://w3techs.com/
* https://packagist.org/

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
