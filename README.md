# Tabler + CodeIgniter 4 + Shield Auth Starter

A starter template that integrates:

* **CodeIgniter 4** (backend framework)
* **Shield Auth** (authentication system)
* **Tabler UI** (premium admin dashboard UI)
* **Feather Icons** (lightweight icons)
* Asset management using **npm** + custom copy scripts

This project helps you kickstart modern CI4 development with a clean UI and a complete authentication setup.

---

## Features

✔ CodeIgniter 4 latest version
✔ Shield authentication (login, register, password reset)
✔ Tabler UI integrated locally (no CDN)
✔ Feather icons ready to use
✔ Local asset build using **npm** (node_modules → public/assets)
✔ Clean folder structure for easy customization

---

## Requirements

Make sure you have installed:

* **PHP 8.1+**
* **Composer**
* **Node.js + npm**
* (optional) **cpx** installed via npm scripts

---

## Installation

Clone the repo:

```bash
git clone https://github.com/anggitpy/tabler-shield.git
cd tabler-shield
```

### Install PHP dependencies

```bash
composer update
```

### Install Node dependencies

```bash
npm install
```

### Copy frontend assets to `public/assets`

```bash
npm run copy:all
```

This command will copy:

* Tabler assets from `node_modules/@tabler/core/dist/`
* Feather icons from `node_modules/feather-icons/dist/`

Into:

```
public/assets/tabler/
public/assets/feather/
```

---

## Configuration

Copy the environment file:

```bash
cp env .env
```

Then edit `.env` and set:

```
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080'
```

Configure your database:

```
database.default.hostname = localhost
database.default.database = your_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

Run migrations:

```bash
php spark migrate
php spark db:seed
```

(If Shield needs seeding)

---

## Running the App

Start the development server:

```bash
php spark serve
```

Access the site:

👉 [http://localhost:8080](http://localhost:8080)

---

## 🧩 Folder Structure

```
app/
public/
  assets/
    tabler/
    feather/
node_modules/
```

Your editable UI pages are inside:

```
app/Views/
```

---

## UI Components

* All layout templates use **Tabler HTML structure**
* Icons use **Feather** via:

```html
<i data-feather="user"></i>
<script> feather.replace(); </script>
```

---

## Notes

* Do NOT commit `node_modules`
* The project uses npm copy scripts instead of bundlers for simplicity
* You can customize Tabler by editing files inside `/public/assets/tabler`