# Workshop Service Application README

## Introduction
This README document provides an overview of the Workshop Service Application developed collaboratively by our team. The application aims to streamline the process of reserving workshop services, managing spare part stocks, and facilitating user authentication through login and registration functionalities. The backend of the application is built using Laravel, while the frontend is developed using Android Studio.

## Features
1. Reservation System: Users can book workshop services through the application. They can select the type of service required, choose a preferred date and time, and receive confirmation of their reservation.
2. User Authentication: The application allows users to create accounts by registering with their basic details. Registered users can then log in securely to access the application's features.
3. Spare Part Stock Management: Users, particularly workshop staff, can view the available stock of spare parts directly through the application. This feature helps in efficiently managing inventory and ensures that required spare parts are readily available.

## Technologies Used
- Laravel: The backend of the application is developed using the Laravel PHP framework. Laravel provides a robust foundation for building secure and scalable web applications, offering features such as routing, authentication, and database management.
- Android Studio: The frontend of the application is built using Android Studio, the official integrated development environment (IDE) for Android app development. Android Studio provides tools for designing user interfaces, writing code, and testing applications on various Android devices.
- MySQL: The application's data is stored and managed using MySQL, a popular open-source relational database management system. MySQL offers reliability, performance, and ease of use for handling large datasets.

## Installation Instructions
To set up the Immunization Application on your local environment, follow these steps:
1. Clone Repository
   ```
   git clone <repository-url>
   ```
2. Backend Setup:
   - Navigate to the backend directory (cd backend) and install dependencies using Composer:
     ```
     composer install
     ```
   - Rename the .env.example file to .env and configure your database connection details.
   - Generate a new application key
     ```
     php artisan key:generate
     ```
   - Run database migrations to create the necessary tables:
     ```
     php artisan migrate
     ```
3. Frontend Setup:
   - Open the Android project in Android Studio located in the frontend directory.
   - Configure the necessary API endpoints to communicate with the backend.
4. Run the Application:
   - Start the Laravel development server:
     ```
     php artisan serve
     ```
   - Run the Android application on an emulator or physical device from Android Studio.

## Contact
For any inquiries or support regarding the Workshop Service Application, please contact our team at gathanafrr@gmail.com.

---

This README provides a comprehensive guide for setting up, understanding, and contributing to the Workshop Service Application. If you have any further questions or need assistance, don't hesitate to reach out. Happy coding!
