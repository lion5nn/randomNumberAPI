# Random number API application

It is a simple REST API written in Laravel 8.


## Run the app

    php artisan serve

# Rest API

It let the user create and get the random number.

## Authorization (with Basic Auth)

    Username: admin
    Password: admin

## Create the random number

This method creates the random number and returns its ID

### Request

    GET http://127.0.0.1:8000/api/

### Response

    HTTP/1.1 200 OK
    Host: 127.0.0.1:8000
    Status: 200 OK
    Connection: close
    Content-Type: text/html; charset=UTF-8

    82

## Get the number by ID

This method returns numbers by $id

### Request

    POST
    Content-Type: application/json;
    id: $id

### Response

    HTTP/1.1 200 OK
    Host: 127.0.0.1:8000
    Status: 200 OK
    Connection: close
    Content-Type: text/html; charset=UTF-8

    812209

# Console commands

The application includes console commands.

## Create the random number

Create the random number and return ID

### Command

    php artisan number:set

### Output

    83

## Get the number by ID

Return number by $id

### Command

    php artisan number:get($id)

### Output

    705297

## Create report

To re-create report.txt in the root directory with a list of all
numbers.

### Command

    php artisan number:report

### Output

    File report.txt created

## Mail report

To send mail on email with a list of all numbers.

### Command

    php artisan mail:send

### Output

    The report was sent to admin mail

# Doing tasks on schedule

## Run it

    php artisan schedule:work

## Create report task

It launches console command [number:report]() once a day 
every day

## Mail report task

It launches console command [mail:send]() once a day
every day
