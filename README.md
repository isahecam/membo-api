# Membo API - A personal membership and subscription management

This is a **RESTful API** built with **Laravel 12** and **MySQL** that acts as the backend for the "Membo" web application. Its purpose is to serve as a robust data layer for users to personally manage their service subscriptions. The API provides an **all-in-one** solution to register, view, and organize memberships efficiently.

---

## Technical Information 🛠️

### Technology Stack

- **Framework:** Laravel 12
- **Database:** MySQL
- **Authentication:** JWT (JSON Web Tokens)

### Key Features

- **Secure Authentication:** Uses JWT to protect all endpoints, ensuring that only authenticated users can access their information.
- **Core Entities:** The project focuses on two key models: **Users** and **Memberships**, allowing each user to manage their own subscriptions.
- **Data Validation:** All incoming requests are validated using Laravel's `Form Request` classes to ensure data integrity.

---

## How to Run the Project 🚀

Follow these steps to set up and run the API in your local environment.

### Prerequisites

- **PHP >= 8.2**
- **Composer**
- **MySQL**

### Installation

1.  Clone the repository:
    ```bash
    git clone [https://github.com/](https://github.com/)[your-username]/membo.git
    cd membo
    ```
2.  Install Composer dependencies:
    ```bash
    composer install
    ```
3.  Copy the configuration file and generate the application key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4.  Configure your database credentials in the `.env` file and run migrations:
    ```bash
    php artisan migrate
    ```
5.  Start the development server:
    ```bash
    php artisan serve
    ```
    The API will be available at `http://127.0.0.1:8000`.

---

## API Endpoints 📖

### Authentication & Accounts

- `POST /api/v1/register`: Registers a new user.
- `POST /api/v1/login`: Authenticates a user and returns a JWT token.
- `POST /api/v1/logout`: Logs the user out by invalidating the token.
- `POST /api/v1/refresh`: Refreshes an expired JWT token.
- `POST /api/v1/password/email`: Sends a password recovery link to the user's email.
- `POST /api/v1/password/reset`: Resets the password using the recovery token.
- `POST /api/v1/email/verification-notification`: Resends the email verification link.

### Membership Management

- `GET /api/v1/memberships`: Retrieves all memberships for the authenticated user.
- `POST /api/v1/memberships`: Creates a new membership record.
- `GET /api/v1/memberships/{id}`: Retrieves a membership by ID.
- `PUT /api/v1/memberships/{id}`: Updates an existing membership.
- `DELETE /api/v1/memberships/{id}`: Deletes a membership.

## Collaboration Guidelines 🤝

To contribute to this project, please follow the workflow below.

1.  **Create a new branch** with a descriptive name for your feature or bug fix.
    - **Naming Convention:** Prefer `feature/your-feature-name` or `fix/bug-description`.
2.  **Make your changes** and create atomic commits with clear and concise messages.
    - **Commit Messages:** Should start with an infinitive verb (e.g., `feat: Add user authentication` or `fix: Correct password validation`).
3.  **Open a Pull Request** to the `main` or `develop` branch.
    - **PR Description:** Include a summary of the changes, the reasoning behind them, and any necessary instructions for review.
4.  **Await code review** and approval before your branch is merged.
