# simple-php-api

## Description

This api is capable of making various requests and adding new routes.

Also the new routes can be defined in ```app/routes.php``` file. 

## Installation

I have tested this on ```laravel/valet``` composer package and done on php 8.1. 
I advise you to do the same because once set up you can park any kind php app with database and adequate dependencies.
Should work on any kind server.

## Request Handling

There are simple functions included in ```app/helpers.php``` file which can be used anywhere.

Main one is for handling requests - ```handleRequest()``` - which uses Router class methods for adding and handling routes.
It is possible to get data through ```requestData()``` method inside any static/instance method.

## Available Routes and Request Methods

Available routes can be accessed through ```/get-routes``` OPTIONS method route.

Supported request methods are ``` GET, POST, PATCH, UPDATE, DELETE```.
