# Another Simple PHP API
API that returns data in JSON using PHP and ThePHPLeague plugins. It integrates DOTEnv for environmental variables, routing and dependency container.

## Installation

~~~
composer install
~~~

Rename .env.example to .env for Environmeental variables.

## Dependencies

- PHP >=7.1
- The PHP League - Route: https://route.thephpleague.com/
- The PHP League - Container: https://container.thephpleague.com/
- vlucas/phpdotenv: https://github.com/vlucas/phpdotenv
- PSR-4 for namespacing
- PSR-7 laminas/laminas-diactoros: https://github.com/laminas/laminas-diactoros

## Other information

- Route / returns a JSON directly.
- Route /version returns a JSON through a controller that receives an environmental variable

## With the invaluable help from [@delineas](https://www.danielprimo.io/)
