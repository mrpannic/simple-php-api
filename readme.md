# simple-php-api

## Description

This api is capable of making various requests and adding new routes.

Also the new routes can be defined in ```app/routes.php``` file. 
The blueprint for creating a route is ```Router::${REQUEST_METHOD}($ROUTE_NAME_WITH_SLASH, $HANDLER)```
Handler can be defined as ```Router::get('/route-name', [SomeController::class, 'name_of_method_inside_controller'])``` or you could pass a function instead of array with controller and method.

## Installation

I have tested this on ```laravel/valet``` composer package and done on php 8.1. 
I advise you to do the same because once set up you can park any kind php app with database and adequate dependencies.
Should work on any kind server.

## Request Handling

There are simple functions included in ```app/helpers.php``` file which can be used anywhere.

Main one is for handling requests - ```handleRequest()``` - which uses Router class methods for adding and handling routes.
It is possible to get data through ```requestData()``` method inside any static/instance method.

## Available Routes and Request Methods
```GET /get-statistics``` - returns some statistics info (dummy data).  
```POST /post-statistics```- returns just a message.   
```DELETE /delete-statistics``` - returns just a message.  
```PATCH /update-statistics``` - returns just a message.  
```OPTIONS /get-routes``` - returns this all defined routes.  

Supported request methods are ``` GET, POST, PATCH, PUT, UPDATE, DELETE```.

