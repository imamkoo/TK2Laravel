# Installation & use

```bash
git clone https://github.com/imamkoo/TK2Laravel.git
cd TK2Laravel/
composer install
mv .env.example .env
# Now, configure your file .env with your DATABASE
php artisan migrate:refresh --seed
php artisan key:generate
php artisan config:cache
php artisan serve
```
