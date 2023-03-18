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