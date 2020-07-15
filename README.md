#Censornet PHP coding test
This project has been produced in response to the Censornet coding test.

It uses a docker-compose file and associated Docker file and configuraion files to create an environment that comprises 
php 7.4 fpm, nginx postgresql server and composer containers. The simplest way to get a working environment is to use 
docker-compose up, assuming you have both docker and docker-compose installed. This will run composer update to obtain
all required packages as well as create a web server on localhost:80.
If you are not using the docker option, then the project has a dependency on PHP 7.4

To create the vegetables table run:

`vendor/bin/phinx migrate`

then to seed the table:

`vendor/bin/phinx seed:run`

To run the command line option, navigate to `app/public` and run

`php index.php --list-veg`

to access the api, navigate to `localhost/vegetables`
