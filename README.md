# TestWork4930483
Test Laravel API (Pattern Repository)

A simple API implementation for Laravel.

## Prerequisites
PHP 7.4 <br>
Laravel Framework 8.83.7

## Installation
Switch to the repo folder

    cd laravel-realworld-example-app
Generate a new application key

    php artisan key:generate
Create database and (**Set the database connection in .env file**)

    php artisan migrate
    php artisan db:seed
Run the database migrations and seed 

    php artisan migrate
    php artisan db:seed
    

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

# Commands
- `GET` /customers - **Get the list of customers**
- `GET` /customers/{id} - **Get the customer by ID**
- `GET` /customers/region/{region} **Get the list of customers by region**
- `POST` /customers - **Create a new customer**
- `PUT` /customers/{id} - **Update the customer**
- `DELETE` /customers{id} - **Delete customer by id**

- `GET` /regions - **Get the list of regions**
- `GET` /regions/{id} - **Get the list region by id**
- `POST` /regions - **Create a region**
- `PUT` /regions/{id} - **Update the region**
- `DELETE` /regions{id} - **Delete the region by id**
