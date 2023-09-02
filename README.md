# Personal Portfolio Website

## Description

This is a personal portfolio website project built using the Laravel framework. The website showcases information about yourself and the projects you have completed. You can add, edit, and delete data for the "About" section and the projects.

## Features

-   Display information about yourself in the "About" section.
-   Showcase a list of completed projects with descriptions and images.
-   Add new data for the "About" section by filling out the provided form.
-   Edit existing data for the "About" section.
-   Delete data from the "About" section if no longer needed.
-   Add new projects by filling out the provided form.
-   Edit existing project data.
-   Delete projects that are completed or no longer relevant.

## Prerequisites

Before running this project, make sure you have the following prerequisites:

-   PHP >= 8.2
-   Composer
-   Laravel
-   MySQL or other database
-   Web server (e.g., Apache, Nginx)

## Installation

1. Clone this repository to your local directory:

    ```
    git clone https://github.com/snc99/app-portofolio.git
    ```

2. Navigate to the project directory:

    ```
    cd projectname
    ```

3. Install all required dependencies:

    ```
    composer install
    ```

4. Create a new `.env` file by copying `.env.example`:

    ```
    cp .env.example .env
    ```

5. Generate a new application key:

    ```
    php artisan key:generate
    ```

6. Configure the database in the `.env` file. Make sure you have created a new database for this project.

7. Migrate the database tables and seed initial data:

    ```
    php artisan migrate --seed
    ```

8. Run the local development server:

    ```
    php artisan serve
    ```

9. Open your browser and access `http://localhost:8000` to view the website.

## Usage

-   About Page: On this page, you can view information about yourself. If there is no "About" data yet, you can add new data by clicking the "Add About" button and filling out the provided form. If there is existing "About" data, you can edit or delete it by clicking the corresponding "Edit" or "Delete" buttons.
-   Project Page: On this page, you can view a list of projects you have completed. If there are no projects yet, you can add new projects by clicking the "Add Project" button and filling out the provided form. If there are existing projects, you can edit or delete them by clicking the corresponding "Edit" or "Delete" buttons.

## Contribution

If you encounter any issues or would like to contribute to the development of this project, please open an issue or submit a pull request on this repository.

## License

This project is licensed under the [MIT License](LICENSE). You are free to use, copy, modify, and distribute this project with the condition of including the license and original author.
