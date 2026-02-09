# 📹 YouTube Search Tracker Project

Welcome to the **YouTube Search Tracker Project**! Yeh ek full-stack web application hai jo YouTube ka user interface clone karta hai aur saath hi user ki **search history** aur **activities** ko track karke database mein store karta hai.

Is project mein **Video Uploading**, **Search History Tracking**, aur **History Management** (View/Clear) jaise features shamil hain.

## 📂 Project Structure (File Guide)

Is repository mein backend aur frontend files included hain:

### Core Interface
- **`index.html` / `index.css` / `index.js`**: Project ka landing page aur main UI logic.
- **`youtube.php` / `youtube.css` / `youtube.js`**: Main YouTube clone interface jahan videos play aur list hoti hain.
- **`style.css`**: Global styling jo poore project mein use hoti hai.

### Backend & Database (PHP)
- **`db.php`**: Database connection configuration file (MySQL connectivity ke liye).
- **`history.php`**: User ki purani search history aur activity ko database se fetch karke display karta hai.
- **`clear_history.php`**: Database se user ki history delete karne ke liye logic.
- **`upload.php`**: Naye videos upload karne ka backend logic handle karta hai.

## 🌟 Features

- **YouTube Clone UI**: Responsive aur interactive interface.
- **Search Tracking**: User jo bhi search karta hai, wo database mein save hota hai.
- **Watch History**: User dwara dekhi gayi videos ki history maintain hoti hai.
- **Clear History**: Ek click mein purani history delete karne ka option.
- **Video Upload**: User nayi videos upload kar sakta hai.
- **Database Integration**: MySQL ka use karke robust data storage.

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## 🚀 How to Run (Setup Instructions)

Chunki yeh project PHP use karta hai, isliye isse run karne ke liye aapko ek Local Server (jaise **XAMPP**, **WAMP**, ya **MAMP**) ki zaroorat hogi.

1. **Install XAMPP/WAMP**: Agar installed nahi hai, to pehle install karein.
2. **Clone Repository**:
   Project folder ko apne server ke root directory mein rakhein (e.g., `C:\xampp\htdocs\youtube_tracker`).
3. **Database Setup**:
   - `phpMyAdmin` (http://localhost/phpmyadmin) open karein.
   - Ek naya database banayein (Note: `db.php` file check karke wahi naam rakhein jo wahan likha hai).
   - Tables create karein (History aur Videos store karne ke liye).
4. **Run Project**:
   - Browser mein `http://localhost/youtube_tracker/index.html` (ya `youtube.php`) open karein.

## 👤 Author

- **Aayushi**
- GitHub: [Aayushi2024](https://github.com/Aayushi2024)

---
*Created with ❤️ by Aayushi*
