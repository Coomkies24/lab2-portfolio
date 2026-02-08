
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

### Requirements

Make sure the following are installed before starting:

* GitHub Desktop
* Visual Studio Code
* PHP
* Composer
* Laravel (via Composer)

---

### Step 1: Open the GitHub Repository

1. Open your browser and go to:
   👉 [https://github.com/Coomkies24/lab2-portfolio](https://github.com/Coomkies24/lab2-portfolio)
2. Click the green **`<> Code`** button.
3. Select **Open with GitHub Desktop**.
4. If prompted, allow the browser to open GitHub Desktop.

---

### Step 2: Clone the Repository Using GitHub Desktop

1. GitHub Desktop will show a **“Clone a Repository”** window.
2. Click **Choose…** to select where the project will be saved.
3. Select or create a folder inside your local disk, for example:

   ```
   C:\GitHub
   ```
4. Make sure the full path looks like:

   ```
   C:\GitHub\lab2-portfolio
   ```
5. Click **Clone**.

---

### Step 3: Open the Project in Visual Studio Code

1. After cloning, click **Open in Visual Studio Code** in GitHub Desktop.
2. Visual Studio Code will open the project automatically.

---

### Step 4: Open the Terminal in VS Code

1. In Visual Studio Code, open the terminal by:

   * Pressing **Ctrl + Shift + `**, or
   * Clicking the **three dots (⋯)** in the top-left → **Terminal** → **New Terminal**
2. Make sure the terminal path is correct:

   ```
   C:\GitHub\lab2-portfolio
   ```
3. If it’s not correct, type:

   ```bash
   cd C:\GitHub\lab2-portfolio
   ```

   Then press **Enter**.

---

### Step 5: Run the Laravel Development Server

In the terminal, type:

```bash
php artisan serve
```

You should see this message:

```
Server running on [http://127.0.0.1:8000].
```

---

### Step 6: Open the Web Application

1. Hold the **Ctrl** key.
2. Click on the link:

   ```
   http://127.0.0.1:8000
   ```
3. The portfolio web application should now open in your browser.
