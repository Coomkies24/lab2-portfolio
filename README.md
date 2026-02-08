
# Laravel Student Portfolio

## Project Description
This project is a simple multi-page portfolio web application developed using the Laravel framework.  
It was created for Laboratory 2 to demonstrate the basic use of Laravel routing, controllers, and Blade templates.  
Each page is handled by its own controller and rendered using Blade views.

---

## Pages

### Main Portfolio Page
**Route:** `/`

This page serves as the main portfolio homepage. It introduces the student (Daniel Casimiro) and provides navigation to the other pages.

<img width="1919" height="1079" alt="Screenshot 2026-02-08 135101" src="https://github.com/user-attachments/assets/829d2211-ecc5-4d41-8d6f-c68cde1697c8" />

---

### About Me Page
**Route:** `/about`

This page contains a short description about the student (Daniel Casimiro).

<img width="1919" height="1079" alt="Screenshot 2026-02-08 135108" src="https://github.com/user-attachments/assets/1c8fdaf2-d39e-423b-be7e-55bd2d3482cf" />

---

### Hobbies Page
**Route:** `/hobbies`

This page displays a list of the student’s hobbies and interests.

<img width="1919" height="1079" alt="Screenshot 2026-02-08 135116" src="https://github.com/user-attachments/assets/22ee6b77-2882-4c6a-9f3c-3533854fa683" />

---

## How to Run the Project Locally

1. Clone the repository:
   ```bash
   git clone https://github.com/Coomkies24/lab2-portfolio.git
   ```

2. Navigate to the project directory:

   ```bash
   cd your-repository-name
   ```

3. Install project dependencies:

   ```bash
   composer install
   ```

4. Create the environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Run the Laravel development server:

   ```bash
   php artisan serve
   ```

7. Open your browser and visit:

   ```
   http://127.0.0.1:8000
   ```

