-- =============================================
-- MOVE Gym Database Setup
-- شغّل هذا الملف في phpMyAdmin
-- =============================================

-- إنشاء قاعدة البيانات (غيّر الاسم إذا لزم)
CREATE DATABASE IF NOT EXISTS move_gym CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE move_gym;

-- جدول الأعضاء
CREATE TABLE IF NOT EXISTS members (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    user        VARCHAR(50)  NOT NULL UNIQUE,
    email       VARCHAR(150) NOT NULL UNIQUE,
    pwd         VARCHAR(255) NOT NULL,
    number      VARCHAR(20)  NOT NULL,
    start_date  DATE,
    gender      CHAR(1),
    plan        VARCHAR(50),
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
