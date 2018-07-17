# Kata 
**Kata** is a **ToDo List** based on Laravel and Vue.js.
## Requirements

* Git
* Composer
* Serveur web (Xampp, Laragon ...)
* Node
* npm
 

## Installation 

1. Clone the project : 
`git clone git@gitlab.webqam.fr:webqam/kata-titouan.git`
2. Go to the folder application : `cd kata-titouan`
3. Run : `composer install --no-dev` to install composer dependence.
4. Copy `.env.example` file to `.env` : `cp .env.example .env`.
5. Open `.env` file and edit the host name `DB_HOST` database name `DB_DATABASE`, username `DB_USERNAME` and password `DB_PASSWORD` field correspond to your configuration.
6. Run : `php artisan key:generate` to generate a new application key.
8. Run : `php artisan migrate` to create tables in your database.

## Development
1. Run : `composer install` to install all composer dependence.
2. Run : `npm install` to install node packages.
3. Run : `php artisan serve`
4. Go to [localhost:8000](localhost:8000).