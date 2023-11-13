<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

This is a simple Laravel application that tracks visits and provides a basic dashboard.

## Setup Instructions

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/your-username/your-laravel-app.git
    cd your-laravel-app
    ```

## Install Dependencies:

     composer install

## Copy the Environment File:

     .env.example .env

## Generate Application Key:

     php artisan key:generate

## Configure Database:

     php artisan migrate

## Install NPM Dependencies:

     npm install

## Compile Assets:

     npm run dev

## How to Run the Application

     php artisan serve

## APIs Overview

1. Track Visit
   Method: GET
   URL: /api/track-visit/{externalId}
   Description: Logs a visit for the unique external ID. It's idempotent.
   Response: 200 without a body.
2. Update User Stage
   Method: POST
   URL: /api/update-user-stage
   Payload:
   {
   "externalId": "string",
   "stage": "string"
   }

    Valid Stages: "visited", "viewed_page", "searched", etc.
    Description: Updates the stage of interaction for the given external ID.
    Response: 200 without a body.

    ## How to Test APIs

    php artisan test
