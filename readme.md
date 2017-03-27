```bash
    $ git clone https://github.com/ton212/itforge_laravel_course.git
    $ cd itforge_laravel_course
    $ composer install
    $ cp .env.example .env (copy .env.example -> .env)
    $ แก้ database ใน .env
    $ php artisan key:generate
    $ php artisan migrate
    $ php artisan serve --port=8001 (เปลี่ยนเลข port ได้)
```