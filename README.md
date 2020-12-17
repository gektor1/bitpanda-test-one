## PHP Technical test

### 1.

Create a new Laravel project using composer

Attached you will find a DB dump. Create a DB connection in laravel using the .env file. 

Seed the DB based on the dump

In the resulted DB you will have these 3 tables: `users`, `countries` and `user_details`.
```
* users: id, email, active
* countries: id, name, iso2, iso3 
* user_details: id, user_id, citizenship_country_id, first_name, last_name, phone_number
```

* 1. Create a call which will return all the users which are `active` (users table) and have an Austrian citizenship.
* 2. Create a call which will allow you to edit user details just if the user details are there already.
* 3. Create a call which will allow you to delete a user just if no user details exist yet.
* 4. Write a feature test for 3. with valid and invalid data

Tips:
- you can use Eloquent to simplify (eg: model binding)


### Installation

1. Clone repo

2. Change to directory

````
cd bitpanda-test-one
````   

3. Install dependencies

````
composer install
````

4. Copy .env file

```
cp .env.example .env
```

5. Modify `DB_*` value in `.env` with your database config.

6. Generate application key:

````
php artisan key:generate
````

7. Migrate
````
php artisan migrate
````

8. Run
````
php artisan serve
````

9. Visit localhost:8000 in your browser


## Database seeding

**Populate the database with seed data with relationships which includes `users`, `countries` and `user_details`.**

Run the database seeder and you're done
````
    php artisan db:seed
````
***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
````
    php artisan migrate:refresh
````

# Testing
````
    php artisan test
````

## Preview
[
App Name - - Watch Video
![](https://cdn.loom.com/sessions/thumbnails/b6af157c3ae84b2c8d410a5ee7ce6093-with-play.gif)](https://www.loom.com/share/b6af157c3ae84b2c8d410a5ee7ce6093)