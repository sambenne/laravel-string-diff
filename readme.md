## A Laravel 5 friendly wrapper around iamkate string diff

---

# Installation

Require this package in your `composer.json` and update composer. Run/add either of the below two commands
```php
"sambenne/laravel-string-diff": "dev-master"
```
or
```php
composer require sambenne/laravel-string-diff=dev-master
```

After updating composer, add the ServiceProvider to the providers array in `app/config/app.php`

```php
'SamBenne\LaravelStringDiff\Providers\StringDiffServiceProvider',
```

---

# How to use

