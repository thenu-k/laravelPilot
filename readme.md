Creating a new model:
    php artisan make:model NAME --migration
    to add fields to the model, we edit the migration file
    php artisan migrate
    enabled sqlite3 extension in php.ini
    add fillable protected property to the model