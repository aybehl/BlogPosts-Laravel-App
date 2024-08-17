# Blogging Platform

Welcome to the Blogging Platform! This application allows users to manage authors and their blog posts. It provides a clean and intuitive interface for adding, viewing, and editing authors and posts.

## Database Schema

### Authors Table

- **id** (Primary Key, Auto Increment, Integer)
- **name** (String, 255 characters)
- **email** (String, 255 characters, Unique)
- **created_at** (Timestamp)
- **updated_at** (Timestamp)

### Posts Table

- **id** (Primary Key, Auto Increment, Integer)
- **title** (String, 255 characters)
- **body** (Text)
- **author_id** (Foreign Key, Integer, References `authors(id)`)
- **created_at** (Timestamp)
- **updated_at** (Timestamp)

## Directory Structure

- `app/Http/Controllers`: Contains controllers for handling requests.
- `resources/views`: Contains Blade templates for the frontend.
- `routes/web.php`: Defines the application routes.

## Technologies Used

- **Laravel**: PHP framework for building the application.
- **Bootstrap**: CSS framework for styling and responsive design.
- **Tailwind CSS**: Utility-first CSS framework for custom styling.
- **Toastr.js**: JavaScript library for displaying notifications.
