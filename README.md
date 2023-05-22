# Parking App API

## Description

The Parking App API is a Laravel-based RESTful API that provides endpoints for managing parking-related operations. It serves as the backend for a parking app, allowing users to perform actions such as booking parking slots, checking availability, and retrieving parking information.

The API is designed to be efficient, scalable, and secure, providing a seamless experience for both the app users and administrators. It follows industry best practices and includes unit tests to ensure the reliability and stability of the codebase.

## Table of Contents

- [Installation](#installation)
- [API Documentation](#api-documentation)
- [License](#license)

## Installation

To get the Parking App API up and running on your local machine, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/parking-app-api.git
   ```
2. Navigate to the project directory:

   ```bash
   cd parking-app-api
   ```
3. Install the dependencies using Composer:

   ```bash
   composer install 
   ```
4. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary environment variables, such as the database configuration.
5. Generate an application key:

   ```bash
   php artisan key:generate
   ```
6. Run the database migrations:

   ```bash
   php artisan migrate
   ```
7. Optionally, you can seed the database with sample data:

   ```bash
   php artisan db:seed
   ```
8. Start the development server:

   ```bash
   php artisan serve
   ```

## API Documentation

To generate the API documentation, you can use the Scribe package. Follow the steps below to generate and view the documentation:

1. Ensure that you have the necessary dependencies installed. Run composer install, if haven't yet.
2. Once the dependencies are installed, you can generate the documentation by running the following command:

   ```bash
   php artisan scribe:generate
   ```
3. By default, the documentation files are stored in the `public/docs` directory. However, to prevent the documentation files from being committed to the repository, the `docs` folder is included in the `.gitignore` file. This is done to avoid duplicating the documentation when you have multiple instances of the project.
   To access the generated documentation, you can run the project and navigate to the `/docs` endpoint in your browser. For example, if you're running the project locally, the URL would be `http://localhost:8000/docs`.
   **Note:** Remember to generate the documentation whenever there are changes to your API endpoints or their documentation.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use and modify it as per the terms of the license.
