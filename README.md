# Laravel Livewire Datatable with TALL Stack

## Overview

This project is a Laravel-based web application that incorporates the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) to create a dynamic and responsive datatable. The datatable includes features such as filtering, searching, sorting, and pagination, providing a seamless and user-friendly experience for managing and viewing large datasets.

![Alt text](https://cdn-images-1.medium.com/max/800/1*FeeCvFHjtvQuBPkiP1s49w.png "Title or hover text")

## Features

1. **Filtering:** Easily filter data based on specific criteria, allowing users to focus on the information that matters most to them.

2. **Search:** Empower users to quickly find specific records by implementing a robust search functionality within the datatable.

3. **Sorting:** Enable users to sort data columns in ascending or descending order, enhancing data organization and accessibility.

4. **Pagination:** Manage large datasets efficiently by implementing paginated views, improving overall performance and user experience.

## Requirements

Ensure that you have the following prerequisites installed on your development environment:

- PHP >= 8.1
- Composer
- NPM or Yarn
- MySQL or any other compatible database

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/mohasin-dev/laravel-livewire-datatable.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd laravel-livewire-datatable
    ```

3. **Install PHP dependencies:**

    ```bash
    composer install
    ```

4. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

5. **Copy the `.env.example` file to create a `.env` file:**

    ```bash
    cp .env.example .env
    ```

6. **Configure your database connection in the `.env` file:**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

7. **Run database migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

8. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

9. **Compile assets:**

    ```bash
    npm run dev
    ```

10. **Serve the application:**

    ```bash
    php artisan serve
    ```

Visit [http://localhost:8000](http://localhost:8000) in your browser to view the datatable in action.

## Usage

Explore the datatable by interacting with the provided interface. You can customize and extend the functionality to meet your specific requirements.

## Credits

This project utilizes the power of the TALL stack, including Tailwind CSS, Alpine.js, Laravel, and Livewire.