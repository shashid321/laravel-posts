<h1 align="center">laravel-posts</h1>

## About

laravel-posts is a Laravel demo clone project using TALL stack

> **Note**
> Work in Progress

-   [Requirements](#requirements)
-   [Installation](#installation)

<a name="requirements"></a>

## Requirements

| Package                              | Version   |
| ------------------------------------ | --------- |
| [Node](https://nodejs.org/en/)       | V14.19.1+ |
| [Npm](https://nodejs.org/en/)        | V6.14.16+ |
| [Composer](https://getcomposer.org/) | V2.2.6+   |
| [Php](https://www.php.net/)          | V8.0.17+  |
| [Mysql](https://www.mysql.com/)      | V 8.0.27+ |

<a name="installation"></a>

## Installation

> **Warning**
> Make sure to follow the requirements first.

Here is how you can run the project locally:

1. Clone this repo

    ```sh
    git clone https://github.com/shashid321/laravel-posts.git
    ```

1. Go into the project root directory

    ```sh
    cd laravel-posts
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```
1. Create database `demo_project` (you can change database name)

1. Install PHP dependencies

    ```sh
    composer install
    ```

1. Generate key

    ```sh
    php artisan key:generate
    ```

1. install front-end dependencies

    ```sh
    npm install && npm run dev
    ```

1. Run migration

    ```
    php artisan migrate
    ```

1. Run server

    ```sh
    php artisan serve
    ```

1. Visit `localhost:8000` in your favorite browser.

    > Make sure to follow your Laravel local Development Environment.
