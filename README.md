API-Authentication

A Laravel 11 RESTful API Authentication System built using Laravel Sanctum.
This project provides a secure and modern API-based authentication structure for web and mobile applications, featuring registration, login, logout, password reset, and email verification.

About the Project

This project serves as a practical implementation of a complete authentication system using Laravel 11 and Laravel Sanctum.
It follows clean architecture principles and aims to help developers quickly set up a secure and scalable API for user authentication and access management.

Key Features

User registration and login

Secure token-based authentication with Laravel Sanctum

Logout and token revocation

Password reset via email

Email verification system

Protected routes for authenticated users only

Standardized JSON response format

Easily integrated with any front-end (React, Vue, Angular, or mobile apps)

Requirements

Before running this project, make sure you have the following installed:

PHP 8.1 or higher

Laravel 11

Composer

MySQL or any supported database

Node.js (optional, if front-end assets are included)

Setup and Installation

Clone the repository from GitHub.

Install all required dependencies using Composer.

Copy the example environment file and configure your database and mail settings.

Generate the application key.

Run database migrations to create the required tables.

(Optional) Seed the database if sample data is provided.

Start the local development server.

The API will be accessible on your local URL, usually at http://127.0.0.1:8000
.

Project Structure

The project follows the standard Laravel architecture:

The app folder contains core application logic such as models, controllers, and middleware.

The routes folder defines the web and API routes.

The database folder includes migrations, factories, and seeders.

The resources folder contains templates and other assets.

The public folder holds public files accessible by users.

API Endpoints

The API provides a complete authentication flow including:

Register new users

Login and receive a personal access token

Logout and revoke tokens

Forgot password and reset password

Email verification handling

Get authenticated user information

All protected routes require a valid Sanctum token for access.

Usage

This API can be easily connected to any front-end framework or mobile app.
Once a user logs in successfully, the API returns a token that must be included in future requests for authorization.
This makes the system ideal for use in single-page applications and mobile back-ends.

Security

Token-based authentication using Laravel Sanctum

Hashed passwords using bcrypt

Email verification for user identity validation

Middleware protection for restricted routes

Clean validation and error handling for all API responses

Contribution Guidelines

Contributions are welcome to improve and extend the project.
To contribute:

Fork this repository.

Create a new branch for your feature or fix.

Make your updates and keep the code clean and readable.

Submit a pull request with a clear explanation of the changes.

License

This project is open-source and released under the MIT License.
You are free to use, modify, and distribute it with proper credit to the original author.

Developer Information

Name: Mahmoud Ebrahim
Email: mahmoud.backend.laravel@gmail.com

GitHub Repository: https://github.com/MahmoudEbrahimmm/API-Authentcation
