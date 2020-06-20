# REMS

REMS is real estate management system develop with laravel with responsive design.

### Installation

REMS requires [PHP](https://php.net/) v7.2+ to run.
create database with name rumaku-test and import database rumaku-test.sql to phpmyadmin
Install the dependencies and devDependencies and start the server.

```sh
$ git clone https://gitlab.com/rhivent/rems-laravel.git
$ cd real-estate-laravel
$ composer install && npm install
```
After installation check .env file and configuration for database credential : 
DB_DATABASE=rumaku-test
DB_USERNAME=root
DB_PASSWORD=
And run this command below : 
```sh
$ php artisan serve
```
Open project on [https://localhost:8000](https://localhost:8000)

### Guide
- frontend => url : '/f'
- Admin => url : '/admin'
  email : super@admin.com
  pass :secret123


### Package tambahan
- [bitfumes/laravel-multiauth](https://bitfumes.github.io/laravel-multiauth/tutorials.html) => multi authentikasi
- [intervention/image](http://image.intervention.io/getting_started/introduction) => management gambar dan galeri
- [laravel/ui](https://laravel.com/docs/7.x/frontend) => frontend bawaan laravel 

License
----

MIT