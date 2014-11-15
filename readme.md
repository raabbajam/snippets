[![Build Status](https://travis-ci.org/raabbajam/snippets.svg?branch=master)](https://travis-ci.org/raabbajam/snippets)
## Snippets

Snippets is a demo of basic code sharing web apps.

## Installing to local

```bash
git clone https://github.com/raabbajam/snippets &&
cd snippets &&
composer install &&
bower install &&
npm install &&
gulp &&
chmod -R 777 app/storage
```
Create some local database (default to snippets) and change app/config/local/database.php with your credentials
```bash
php artisan migrate --seed
```


