Creating a new model:
    php artisan make:model NAME --migration
    to add fields to the model, we edit the migration file
    php artisan migrate
    enabled sqlite3 extension in php.ini
    add fillable protected property to the model

Creating a controller for the model:
    php artisan make:controller NAMEController --api
    to add a route for the controller, we edit the routes/web.php file
    to add a view for the controller, we edit the resources/views/NAME folder
    when adding data into a controller we need to use
    the 'Accept' : 'application/json' header
    to automatically create multiple routes for the controller we use create a resource route
    to view the routes we use php artisan route:list
    when using the update route, the request must be a form, and not a json request

Adding sanctum:
    composer reequire laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
    we'll be using sanctum middleware as we're only using this for an api
    add this to kernel.php
    "api" => [
        \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        'throttle:api',
    ],
    in the user model we add 'use Lavarel\Sanctum\HasApiTokens'
