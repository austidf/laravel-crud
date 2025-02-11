# Laravel Product CRUD (Create, Read, Update, Delete)

This repository contains my notes of getting familiar with **Laravel**
Requirements:
- Install composer

## 1. Create laravel 9 project
create the project by typing this
```
composer create-project laravel/laravel:^9.0 PROJECT_NAME
```

## 2. Change directory to new project
access the project in terminal. Don't forget to open folder in IDE like VS Code
```
cd PROJECT_NAME
```

## 3. Edit environtment (.env)
Edit env file to suite your system. For MS SQL Server default should look like this
```
DB_CONNECTION=sqlsrv
DB_HOST=127.0.0.1
DB_PORT=1433
DB_DATABASE=database name
DB_USERNAME=user name
DB_PASSWORD=password
```

## 4. Make model
Create Elopquent model. 
```
php artisan make:model xxxxx -m 
```
Add properties to the model in app/Models, like `$table` or `$fillable`

## 5. Edit migration
Edit migration for database in database>migrations, add database columns and properties there. For instance in this product project,
```
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
```
after that, go to terminal to write
```
php artisan migrate
```
to make migration to exactly one migration
```
php artisan migrate make:migration xxxx --table=table-name
```

## 6. Make Controller
make controller for the project
```
php artisan make:controller xxxController.php
```

## 7. Edit and add Route to the controller
Controller handle how each function and parameters
**Controller is on app/Http/Controllers**
Edit the controller to match the needs.

**Route is on routes/web.php**

## 8. Add views to the project
views are what the website would look like
**Views are on resources/views**

## 9. Run the project
run and see how it goes
```
php artisan serve
```


