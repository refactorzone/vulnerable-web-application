# Purposely broken web application

This application is built to practice security testing. It contains all sorts of security vulnerabilities. Can you find them all?

## How to use

### Method 1: using the PHP dev server

- Set up a MySQL database and import `scripts/create.sql`. Change `lib/db.php` to match your database.
- Run `php -S 127.0.0.1:8000` and open http://127.0.0.1:8000 in your browser.

### Method 2: using Docker

- Run `docker-compose up`
- Import `create.sql` into the database (running on 127.0.0.1:3007, root:asdfasdf)
- Open http://127.0.0.1 in your browser
