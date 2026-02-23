# IT Helpdesk / Ticketing System

A simple role-based IT Helpdesk Ticketing System built using PHP and MySQL.

This system allows users to submit IT support tickets and enables administrators to manage and update ticket statuses through a secure login system.

---

## Features

### User Side
- Submit IT support tickets
- Provide name, email, issue title, and description
- Tickets are stored in MySQL database

### Admin Side
- Secure admin login (session-based authentication)
- View all submitted tickets
- Update ticket status (Open, In Progress, Resolved)
- Logout functionality
- Admin dashboard protected from unauthorized access

---

## Technologies Used

- PHP (Core PHP)
- MySQL
- HTML5
- CSS3
- WAMP (Apache & MySQL)
- phpMyAdmin

---

## Project Structure

it-helpdesk/
- config.php
- index.php
- process_ticket.php
- login.php
- dashboard.php
- update_status.php
- logout.php
- style.css
- README.md

---

## Database Setup

1. Create a database named:

   it_helpdesk

2. Create the following tables:

### tickets table

```sql
CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    title VARCHAR(255),
    description TEXT,
    status VARCHAR(50) DEFAULT 'Open',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
);
INSERT INTO admins (username, password)
VALUES ('admin', MD5('admin123'));
