# REST API WebApiPostmetria

## About

System developed during the backend programming project for Postmetria company. The purpose of the system was to consume data from an API, save it in the database and later make it available in a REST API interface.

- Public API used: 'http://www.omdbapi.com'
- Title of the chosen film: 'Spider-Man'

-------------------------------------------------
## Requirements

* First check that you have the following requirements:
    * PHP 8.1+
    * Composer 2.3.5
    * Laravel 9
    * Mysql 8.0

-------------------------------------------------

## Install

* Download Project or clone using command
     ```bash
    git clone <https://github.com/caiorabelo/WebApiPostmetria.git>
    ```

* Start your MYSQL

* Create a database with the name "db_movies", if you want to customize it, also inform it in the .env file
(note: create this .env file if you don't have it and paste everything inside the .env-example file).

* From the terminal go to the project root and run:
     ```bash
     composer install
     ```

* Done it! Run the following command:
     ```bash
     php artisan migrate
     ```
-------------------------------------------------
## Run the app

    php artisan serve

-------------------------------------------------
## Consume

### Consume data from public API and popular database (Choose one of the options)

#### Run Schedule
```bash
php artisan schedule:run
```
#### Request URL (GET)
```bash
http://localhost:8000/pullmovies
```

#### Request (CURL)
```bash
curl http://localhost:8000/pullmovies
```

-------------------------------------------------

## Rest API

### Get list of Movies

#### Request

`GET /api/movies/`

```bash
http://localhost:8000/api/movies
```
### Create a new Movie

#### Request

`POST /api/movies/`

```bash
http://localhost:8000/api/movies
```
### Get a specific Movie

#### Request

`GET /api/movies/:id`

```bash
http://localhost:8000/api/movies/1
```
### Update a Movie

#### Request

`PUT /api/movies/:id`

```bash
http://localhost:8000/api/movies/1
```
### Delete a Movie

#### Request

`DELETE /api/movies/:id`

```bash
http://localhost:8000/api/movies/1
```