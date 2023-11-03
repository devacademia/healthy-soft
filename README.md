# HEALTHY SOFT

Healthy Soft is a bugs tracking and features suggestion system. It allows software users to report encountered bugs and to suggest new features.

It also has a credit system to reward users based on reported bugs and suggested features.

## Tech stack

The app is built with PHP 8.2 native and use the famous CSS utility Bootstrap.

## How to install and run

You will need to have PHP >= 8.2 installed, a web server (I recommend Apache) and MySQL installed.

1. Clone the source code:

```bash
git clone https://github.com/devacademia/healthy-soft.git &&
cd healthy-soft
```

2. You have to configure access to your database. For that, edit the file `config/app.php` and set correct values for following config keys:

```php
'DataSource' => [
  'host' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'leave_manager',
],
```
3. Create the database

Database schema is located in config/schema/db-script.sql. Create a database in DBMS (Database Management System) and use it to import this schema.

```bash
mysql > create database leave_manager;
mysql > source config/schema/leave_manager.sql;
```

4. Set the base URL. Edit the file `config/paths.php` and set the correct value for the constant:

```php
if (!defined('BASE_URL')) {
  define('BASE_URL', 'http://localhost:8090/');
}
```
5. Start the development server using:

```bash
php -S localhost:8090
```

Or if you're using Apache, you may use `http://localhost/healthy-soft` as `BASE_URL`. Start Apache and type `http://localhost/healthy-soft` in your web browser.
