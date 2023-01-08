# TankosApp

TankosApp is a web-based application created to help producers to sell his product in palm oil

## Tech Stack

**Client:** HTML, CSS , js

**Server:** PHP, Blade, MySql


## Installation

Install XAMPP

https://www.apachefriends.org/download.html


Install Composer 

https://getcomposer.org/


Make new folder and CD into it


Install laravel via Composer

```bash
  composer create-project laravel/laravel (namaproject) 
```

## Run Locally

masuk ke CMD dan pilih tempat file akan diclone kemudian clone


```bash
  git clone https://github.com/faozansudrajat/TankosApp2.git
```

Go to the project directory

```bash
  cd my-project
```

Install Composer

```bash
  composer install
```

copy .env.example file to .env

```bash
  copy .env.example .env
```

Open and Run XAMPP For Apache and MySql


Open PHPMyAdmin and make a new database

Run

```bash
  php artisan key:generate
```

Set your database credentials in your .env  file

Run Migration

```bash
  php artisan migrate
```

Run Seeder

```bash
  php artisan db:seed
```
Run serve

```bash
  php artisan serve
```
and open the link

Register your account and change table user - status in database to 1 for produsen and 0 for konsumen

## Authors

- [@hermangemilang](https://github.com/hermangemilang)
- [@faozansudrajat](https://github.com/faozansudrajat)
- [@MochammadAthian](https://github.com/MochammadAthian)
- [@fadhilfaithul](https://github.com/fadilfaithula)


