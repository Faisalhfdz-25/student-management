
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/laravel-10.x-red" alt="Laravel 10.x">
<img src="https://img.shields.io/badge/vue-3.x-brightgreen" alt="Vue.js 3.x">
<img src="https://img.shields.io/badge/inertia-0.10.0-blue" alt="Inertia.js">
<img src="https://img.shields.io/github/license/your-username/student-management" alt="License">
</p>

# Student Management System

Welcome to the **Student Management System** built using Laravel, Inertia.js, and Vue.js! This application is designed to help educational institutions manage student data seamlessly, providing a user-friendly and efficient experience for admins, teachers, and students alike.

## Features

- **Student Information Management**: Easily manage student profiles, academic records, and personal details.
- **Role-based Access Control**: Secure the system with different access levels for admins, teachers, and students.
- **Attendance Tracking**: Monitor and log student attendance in real-time.
- **Grades and Reports**: Teachers can input and track grades, generating comprehensive reports for each student.
- **Class Scheduling**: Create and manage class schedules with automatic updates for students.
- **Inertia.js-Powered SPA**: Enjoy a smooth, modern single-page application (SPA) experience with Inertia.js and Vue.js.
- **Real-Time Notifications**: Stay updated with real-time notifications on student activity and academic performance.

## Tech Stack

This project leverages the power of some of the best tools in web development:

- **Laravel 10.x**: The robust and elegant PHP framework for the backend.
- **Inertia.js**: Bridges the gap between server-side and client-side frameworks, providing a smooth SPA experience without complex frontend routing.
- **Vue.js 3.x**: The progressive JavaScript framework for building modern, reactive user interfaces.
- **Tailwind CSS**: A utility-first CSS framework for building sleek and responsive designs.

## Installation

Follow these steps to get the project up and running locally:

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/student-management.git
   cd student-management
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install
   ```

3. Configure environment variables:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update the `.env` file with your database credentials and other necessary configuration.

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Build assets and run the server:

   ```bash
   npm run dev
   php artisan serve
   ```

Now, visit [http://localhost:8000](http://localhost:8000) to explore the application.

## Screenshots

### Dashboard
![Dashboard](screenshot-dashboard.png)

### Student Management
![Student Management](screenshot-student-management.png)

## Contributing

Contributions are welcome! If you would like to improve this project, feel free to open an issue or submit a pull request. Please follow the code of conduct outlined in the [CONTRIBUTING.md](CONTRIBUTING.md).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

