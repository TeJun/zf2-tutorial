Zend Framework 2 Tutorial Practice
=======================


Web Server Setup
----------------

### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName zf2-tutorial.localhost
        DocumentRoot /path/to/zf2-tutorial/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/zf2-tutorial/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

### MySQL Setup

To create a database(zend_framework) and user(zend / zend1234) for this project test.

    mysql -u root -p   //press enter and input mysql root passwd
    create database zend_framework;
    use zend_framework;
    create user 'zend'@'localhost' identified by 'zend1234';
    grant all on zend_framework.* to 'zend'@'localhost';
    flush privileges;

Then create table and add some data

    CREATE TABLE album ( id int(11) NOT NULL auto_increment, 
    artist varchar(100) NOT NULL, title varchar(100) NOT NULL, PRIMARY KEY (id));
    INSERT INTO album (artist, title)
    VALUES ('The Military Wives', 'In My Dreams'); INSERT INTO album (artist, title)
    VALUES ('Adele', '21'); INSERT INTO album (artist, title)
    VALUES ('Bruce Springsteen', 'Wrecking Ball (Deluxe)'); INSERT INTO album (artist, title)
    VALUES ('Lana Del Rey', 'Born To Die'); INSERT INTO album (artist, title)
    VALUES ('Gotye', 'Making Mirrors');
    exit