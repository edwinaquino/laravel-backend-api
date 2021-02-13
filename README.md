# Laravel API With Passport Token Authentication

> This app is a Laravel API app which uses the SAIL. Laravel Sail is a light-weight terminal interface for interacting with Laravel's default Docker development environments. Sail is a great starting point for building Laravel applications using PHP, MySQL, and Redis without requiring advanced Docker experience.

Laravel Passport is a full OAuth2 server implementation for Laravel applications. Passport is built on top of the League OAuth2 server that is maintained by Andy Millington and Simon Hamp.

## App Info
This is a RESTful API App on Laravel 8 with built-tin Passport for API authentication. With this API you can implement CRUD(Create, Read, Update and Delete) processes. For the purpose of demonstration, this app will allow you to register as a user. As the user, you will have the permissions to Add a CEO, Update a CEO profile and Delete your CEO profiles.

## Requirements
* Docker
* Git
* Terminal
* Laravel 8
* Composer
* Postman or Insomnia or any other API development platform

## Getting Started
To get started follow these steps below.

1. Clone this repository<br>
```$ git clone https://github.com/edwinaquino/laravel-backend-api.git```
2. Change directory into the app.<br>
```$ cd laravel-backend-api```<br>
3. Change directory into the app.<br>
```$ composer install```<br>
3. Build the docker container in your local machine. <br>
```$ docker-compose up -d --build```

If this is the first time building this container, this make take a while to build the container. Approximately 5 minutes depending on your environment and network connection.

4. open: http://localhost

# API Testing

Use your favorite API development platform such as Postman or Insomnia to test the end points:

### Create user
Use the following settings to test the /register endpoint.
Method: POST
URl: http://localhost/api/register
body KEY and VALUE
* name: cool
* email: example@example.com
* password: password123
* password_confirmation: password123


### Login user
/create endpoint creates a user in the database, now you can log into your account.
Method: POST
URl: http://localhost/api/register
body KEY and VALUE
* email: example@example.com
* password: password123

Upon successful login, you will receive a token. Copy this token for the next steps:

### Create A CEO
Now that you are logged in, use the token provided to create a CEO profile.
Method: POST
URL: http://localhost/api/ceo
TOKEN: xxxxx
body: 
* name: Steve Jobs
* year: 2021
* company_headquarters: cupertino
* what_company_does: phones
* company_name: apple

### Show CEOs List
With the newly CEO profile created, we can now fetch a list of all the CEOs in the database.
Method: GET: 
URL: http://localhost/api/ceo
* TOKEN: xxxxx


### Show CEOs Profile
Let’s retrieve the CEO's profile for id 1 which is the first on our list that we just created:
Method: GET: 
URL: http://localhost/api/ceo/1
* TOKEN: xxxxx

### Update CEOs Profile
Using the FETCH process, we can now update the CEO's profile
Method: PATCH: 
URL: http://localhost/api/ceo/1
* TOKEN: xxxxx
body: 
* name: Jeff Besos
* year: 2021
* company_headquarters: seattle
* what_company_does: ecommerce
* company_name: AMAZON

### Show CEOs Updated Profile
Let’s retrieve the CEO's updated profile:
Method: GET: 
URL: http://localhost/api/ceo/1
* TOKEN: xxxxx

### Delete CEO
Method: DELETE: 
URL: http://localhost/api/ceo/1
* TOKEN: xxxxx

### Show CEOs Profile
Validate that the CEO's profile does not exist anymore.
Method: GET: 
URL: http://localhost/api/ceo/1
* TOKEN: xxxxx

Hope that works for you.

### Author

Edwin Aquino

### Version

1.0

### License

This project is licensed under the Apache License 2.0
