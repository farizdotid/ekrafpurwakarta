## Tech Stack

- [Laravel 11](https://laravel.com/docs/)
- [Filament](https://filamentphp.com/)

## Database Diagram
[dbdiagram.io Ekraf Purwakarta](https://dbdiagram.io/d/ekrafpurwakarta-6674f92a5a764b3c720a0735)

## Feature

### Backend Dashboard
- [ ] Dashboard Analytic
- [x] CRUD Subsektor
- [ ] CRUD Events
- [ ] CRUD News
- [ ] CRUD Banner Information
- [ ] CRUD Static Variable ( Email, phone number, dll )
- [ ] CRUD User
- [ ] CRUD Store
- [ ] CRUD Product

### Backend API
- [ ] API Subsektor
- [ ] API Events
- [ ] API News
- [ ] API Banner Information
- [ ] API Static Variable ( Email, phone number, dll )
- [ ] API User
- [ ] API Store by User
- [ ] API Product by store
- [ ] API All Product

## How to contribute ?

### Create Feature

You need create a branch based on the name feature. Example, You want a create feature `CRUD Events`, Then you create branch called `feat_crud_events`.

> [!WARNING]
> Jika branch feature udah dibuat oleh orang lain, Kalau bisa jangan buat lagi yak :v:. Nanti jika sudah mengerjakan fiturnya, Kabarin saya (fariz) aja, Nanti saya merge ke branch development terlebih dahulu.

### Installation

- Clone this project
- Run composer install
```bash
  composer install
```
- Copy .env.example file to .env on the root folder
```bash
  copy .env.example .env
```
- Run key generate
```bash
  php artisan key:generate
```
- Run artisan migrate
```bash
  php artisan migrate
```
- Run artisan serve
```bash
  php artisan serve
```