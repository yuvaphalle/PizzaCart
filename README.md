>Laravel based pizza cart

# How to use:

- ` ` Clone Rpository

```javascript
git clone https://github.com/yuvaphalle/PizzaCart.git

```

- ` ` Install the composer dependencies


```javascript
composer install

```
- ` ` Save .env.example as .env and put your database credentials




- ` ` Set application key


```javascript
php artisan key:generate
```
- ` ` Migrate key

```javascript
php artisan migrate

```

- ` ` Install node dependencies


```javascript
npm install

```
- ` ` Run watcher / php serve

```javascript
npm run watcher / php artisan serve

```

>Shopping cart used:- bumbummen99/shoppingcart
```javascript
composer require bumbummen99/shoppingcart

```

>Test
```javascript
vendor\bin\phpunit --filter testBasicExample    
vendor\bin\phpunit --filter testBasicTest 
vendor\bin\phpunit --filter testAdmin 
vendor\bin\phpunit --filter testRedirect
```



