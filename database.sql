CREATE DATABASE student_db;
USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    enrollment_no VARCHAR(50) UNIQUE NOT NULL,
    student_name VARCHAR(100) NOT NULL,
    contact_no VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    course VARCHAR(50) NOT NULL
);
