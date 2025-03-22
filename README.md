# Laravel Authentication Project

## Overview
A simple authentication system built with Laravel, featuring login, logout, registration, and a custom animated 404 page. This is my **third time** building authentication in my backend journey:
- **1st**: [Native PHP (raw and manual)](https://github.com/Menna-Baligh/Authentication-Project.git).
- **2nd**: [Native PHP MVC (self-built)](https://github.com/Menna-Baligh/AuthByMVC.git).
- **3rd**: Laravel (this project—my most efficient yet).
---
## Features
- Login with session regeneration.
- Logout with session invalidation.
- Register new users with password hashing.
- Custom 404 page with CSS animations.
- Form input persistence on failure.


---
## Installation
1. Clone: `git clone <repo-url>`
2. Install: `composer install`
3. Copy `.env.example` to `.env` and configure DB.
4. Run: `php artisan key:generate`
5. Migrate: `php artisan migrate`
6. Serve: `php artisan serve`
---
## Usage
- **Register**: `/registerForm` → Fill out form → Redirects to `/login` .
- **Login**: `/login` → Enter credentials → Redirects to `/home`.
- **Logout**: Click logout → Back to `/login`.
- **404**: Visit a bad URL (e.g., `/random`).
---
## Structure
- `AuthController.php`: Login/logout/register logic.
- `login.blade.php`: Login form.
- `register.blade.php`: Registration form.
- `home.blade.php`: Home page.
- `errors/404.blade.php`: Custom 404.

---
## Key Learnings
- Laravel’s `Auth` simplifies authentication.
- Session security with `regenerate()`/`invalidate()`.
- Blade templating rocks!
---
## Notes

This project is my first experience implementing authentication with Laravel. While there are ready-made packages like **Breeze** and **Jetstream** that many developers use, I wanted to build it from scratch first to gain a deeper understanding of how authentication works in Laravel.

By taking this approach, I was able to explore the fundamental concepts behind authentication, such as user registration, login, and session management. This hands-on experience gave me a solid foundation before working with authentication packages in the future.
---
## Templates I Used In My Views
- [404 Page](https://codepen.io/vineethtrv/pen/NRzNLz)
- [Auth Pages](https://colorlib.com/wp/template/login-form-07/)
