# Contact Manager Web Application

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1%2B-purple?logo=php)
![MySQL](https://img.shields.io/badge/Database-MySQL-blue?logo=mySql)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![License](https://img.shields.io/badge/License-MIT-lightgrey)
![Version](https://img.shields.io/badge/Version-1.0.0-yellow)

## Overview

The Contact Manager is a simple Laravel-based web application designed for interns to learn the fundamentals of web development. The project covers key Laravel concepts such as routing, MVC architecture, authentication, CRUD operations, validation, and database management.

## Project Purpose

This project helps a beginner developer understand and practice:

- User authentication 
- Managing database records using Eloquent 
- Building CRUD features 
- Using Blade templates for UI 
- Applying validation and flash messages 
- Structuring a Laravel project properly

## Features

1. User Authentication

- Register, login, and logout 
- Each user manages their own contacts 
- Implemented using Laravel Breeze (or Laravel UI)

2. Contact Management (CRUD)

- Add new contacts 
- Edit/update contact details 
- Delete contacts 
- List all saved contacts

3. Search & Filtering

- Search contacts by name 
- Search contacts by email 
- Optional: Filter by category or tag

4. Data Validation

- Ensures all required fields are provided 
- Email validation 
- Flash messages for success/error

5. Optional Enhancements

- Pagination 
- Export contacts to CSV 
- Categories/Tags 
- Dashboard with statistics

## Requirements
Software Needed

- PHP 8.1+
- Composer
- MySQL or MariaDB
- Git
- A local server (Laravel Sail, Valet, XAMPP, WAMP, or MAMP)

## Setup Instructions

1. Fork and Clone the Repository

```bash
git clone https://github.com/your-repo/contact-manager.git
cd contact-manager
```

2. Install dependencies

```bash
composer install
```

3. Create .env file

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials:

```bash
DB_DATABASE=contact_manager
DB_USERNAME=root
DB_PASSWORD=
```
4. Generate App Key

```bash
php artisan key:generate
```
5. Run Migrations

```bash
php artisan migrate
```
6. Start Development Server

```bash
php artisan serve
```

Your app is now available at:

http://localhost:8000

## Testing the Application

1. Register a new account 
2. Log in 
3. Start adding and managing contacts 
4. Test search and edit features
