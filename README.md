# Groupify - Contact & Group Management System

<p align="center">
  <img src="images/Groupify-removebg.png" alt="Groupify Logo" width="200"/>
</p>

<p align="center">
  A modern contact and group management application built with Laravel and Tailwind CSS
</p>

---

## 📋 Table of Contents

- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Database](#-database)
- [Usage](#-usage)
- [API Endpoints](#-api-endpoints)
- [Screenshots](#-screenshots)
- [Contributing](#-contributing)
- [License](#-license)

---

## ✨ Features

### Contact Management
- 📇 Create, read, update, and delete contacts
- 🔍 Search and filter contacts
- 📱 Store multiple contact details (name, email, phone, etc.)
- 🏷️ Organize contacts into groups

### Group Management
- 👥 Create and manage user groups
- 📊 View group statistics
- 🔄 Assign contacts to multiple groups
- 📝 Edit and delete groups

### User Interface
- 🎨 Modern, responsive design with Tailwind CSS
- 🌙 Clean and intuitive interface
- 📱 Mobile-friendly layout
- ⚡ Fast and responsive interactions

---

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** MySQL/SQLite
- **Server:** Apache/Nginx with PHP
- **Build Tool:** Vite
- **Version Control:** Git

---

## 📁 Project Structure

```
Groupify/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ContactController.php
│   │       └── GroupController.php
│   └── Models/
│       ├── Contact.php
│       ├── Group.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── 2025_01_29_151235_create_groups_table.php
│   │   └── 2025_01_29_151247_create_contacts_table.php
│   └── seeders/
├── resources/
│   └── views/
│       ├── contacts/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   └── form.blade.php
│       ├── groups/
│       │   ├── index.blade.php
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   └── form.blade.php
│       └── layouts/
│           └── app.blade.php
├── routes/
│   └── web.php
├── public/
│   ├── images/
│   └── css/
├── docs/
│   └── diagrams.puml
└── config/
```

---

## 🚀 Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or SQLite
- Laravel Herd / XAMPP / MAMP

### Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd Groupify
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database** in `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=groupify
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start the server**
   ```bash
   php artisan serve
   ```

---

## ⚙️ Configuration

### Database Configuration

Edit the `.env` file to match your database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=groupify
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Mail Configuration

```env
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

---

## 📊 Database Schema

### Groups Table
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | string | Group name |
| description | text | Group description |
| created_at | timestamp | Creation date |
| updated_at | timestamp | Last update |

### Contacts Table
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | string | Contact name |
| email | string | Contact email |
| phone | string | Contact phone |
| group_id | bigint | Foreign key to groups |
| created_at | timestamp | Creation date |
| updated_at | timestamp | Last update |

---

## 📖 Usage

### Accessing the Application

1. Open your browser and navigate to `http://localhost:8000`
2. You'll see the welcome page

### Managing Contacts

1. Navigate to Contacts section
2. Click "Add Contact" to create a new contact
3. Fill in the contact details and save
4. Use the search bar to find contacts
5. Click edit/delete icons to modify or remove contacts

### Managing Groups

1. Navigate to Groups section
2. Click "Create Group" to add a new group
3. Enter group name and description
4. Assign contacts to groups when creating/editing

---

## 🔗 API Endpoints

### Contacts
| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /contacts | List all contacts |
| GET | /contacts/create | Show create form |
| POST | /contacts | Store new contact |
| GET | /contacts/{id} | Show contact |
| GET | /contacts/{id}/edit | Show edit form |
| PUT/PATCH | /contacts/{id} | Update contact |
| DELETE | /contacts/{id} | Delete contact |

### Groups
| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /groups | List all groups |
| GET | /groups/create | Show create form |
| POST | /groups | Store new group |
| GET | /groups/{id} | Show group |
| GET | /groups/{id}/edit | Show edit form |
| PUT/PATCH | /groups/{id} | Update group |
| DELETE | /groups/{id} | Delete group |

---

## 📸 Screenshots

### Welcome Page
![Welcome Page](images/Groupify.jpg)

### Contacts Management
![Contacts](images/telephone.png)

### Groups Management
![Groups](images/groupe-dutilisateurs.png)

---

## 📐 Architecture Diagrams

This project includes PlantUML diagrams in the `docs/diagrams.puml` file. You can generate diagrams using any PlantUML-compatible tool.

---

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Vite](https://vitejs.dev)
- [PlantUML](https://plantuml.com)

---

<p align="center">
  Groupify create by MOHAMMED KASSIR [Med-Kr]
</p>

