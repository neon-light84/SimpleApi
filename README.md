#  Факты о котах.

Простейшее API. Просто возвращает некий случайный факт о котах.

## Требования

- PHP 8.0

## Установка
```
composer require pavel-goroshnikov/simple-api
```

## Использование
```php
use PavelGoroshnikov\SimpleApi\Cat;
$cat = new Cat();
$fact = $cat->getFact();
```

## Благодарности
Сервису https://catfact.ninja/ , чей API был использован.
