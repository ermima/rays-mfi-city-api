# Rays MicroFinance (S.C) - Technical Assessment
## Full-Stack PHP Laravel Developer: City Resource REST API

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.md)

---

## 📌 Project Overview
This repository contains a professional demonstration of a **RESTful CRUD API** built for the **Rays MicroFinance** recruitment process. 

Per the assessment requirements, the application manages a **City** resource. While the system is built using the robust Laravel framework, it utilizes an **In-Memory Array** for data persistence to showcase architectural handling without the immediate need for a database engine.

---

## 🚀 Key Technical Features

- **RESTful Architecture:** Adheres to standard HTTP methods (GET, POST, PUT, DELETE).
- **Strict Data Validation:** Utilizes Laravel `FormRequest` classes to ensure data integrity and security.
- **In-Memory Storage Logic:** Implements static array management to simulate persistence across a single application lifecycle.
- **Standardized API Responses:** Returns consistent JSON structures with appropriate HTTP status codes (200, 201, 404, etc.).
- **PSR-12 Compliant:** Code is written following modern PHP FIG standards for readability and maintainability.

---

## 🛠 Tech Stack
- **Framework:** Laravel 12.x
- **Language:** PHP 8.2+
- **Tooling:** Composer, Artisan CLI

---

## 🛣 API Documentation

### Base URL: `/api/cities`

| Method | Endpoint | Description | Payload (JSON) |
| :--- | :--- | :--- | :--- |
| **GET** | `/` | Retrieve all cities | N/A |
| **GET** | `/{id}` | Retrieve a specific city | N/A |
| **POST** | `/` | Create a new city | `{ "name": "...", "country": "...", "population": 0 }` |
| **PUT** | `/{id}` | Update an existing city | `{ "name": "...", "country": "...", "population": 0 }` |
| **DELETE** | `/{id}` | Remove a city | N/A |

---

## ⚙️ Installation & Setup

To run this project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/ermima/rays-mfi-city-api.git
   cd rays-mfi-city-api