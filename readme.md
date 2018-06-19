## Simple Laravel ToDo Application

- Create todo item
- View todo item
- Edit todo item
- Delete todo item
- Flash notification
- Change status or mark todo item as completed or not completed
- Set todo item duration (Start time & End time)
- Better folder architecture.
- Admin routes are separated.
- Admin controllers are separated
- Account information update from dashboard
- Account password password from dashboard

## Instructions:

- Project installation
  ```
  git clone https://github.com/theshahriars/laravel-todo.git
  cd laravel-todo
  composer install
  composer update
  cp .env.example .env
  php artisan key:generate
  ```
- Create a database
- Update .env file
- Migrate database & seed data

  ```
  php artisan migrate --seed
  ```
- Run server
  
  ```
  php artisan db:seed
  ```
  
  