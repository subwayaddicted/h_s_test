# h_s_test

API with auth and friends invite and management systems

## Basic setup
Enter the folder with project

`cp .env.example .env`

`composer install`

`docker-compose up -d`

`docker-compose exec app php artisan key:generate`

`docker-compose exec app php artisan passport:install`

### Test data
DB data and tables are provided via docker-compose/mysql/init_db.sql file
Test users passwords: `testtest`
Users with access tokens: `id:1 and id:2`


Basic url: `localhost:8000`

## API documentation
Available at `localhost:8000/docs`

There are options for export into OpenAPI or Postman formats

### Generate documentation
`docker-compose exec app php artisan scribe:generate`

## docker-compose
### With provided data

`docker-compose up -d`

### Without provided data

`docker-compose up -d`

`docker-compose exec app php artisan migrate`

`docker-compose exec app php artisan passport:install`

Additionally, you have to sign up several users and get access tokens in order to test the API

## Used packages

`"laravel/passport": "~9.0"`

`"knuckleswtf/scribe": "^2.0"` - for API documentation auto generation
