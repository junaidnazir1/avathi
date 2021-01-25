# avathi

## Installation

Clone the repository

git clone https://github.com/junaidnazir1/avathi.git
Switch to the repo folder

cd avathi
Install all the dependencies using composer

## composer install


Copy the example env file and make the required configuration changes in the .env file

cp .env.example .env
Generate a new application key

php artisan key:generate


Run the database migrations (Set the database connection in .env before migrating)

php artisan migrate
Start the local development server


php artisan serve
You can now access the server at http://localhost:8000


## Folders

app - Contains all the Eloquent models
app/Http/Controllers- Contains all the api controllers
database/migrations - Contains all the database migrations
database/seeds - Contains the database seeder
routes - Contains all the  routes 

