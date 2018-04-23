## Running the Project Locally

First, create the database (and database user if necessary).
Copy from `.env.example` and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate

1. `composer install`
2. `php artisan migrate`
3. `php artisan serve`

The Submit Form will be running on `localhost:8000`.

API of all user profiles can be called from `localhost:8000/api/userProfiles` endpoint.

Endpoints can be called by with some parameters.

## Getting data from API
### Get User Profiles by name
`/api/userProfiles?name={name}`

### Get User Profiles by gender
`/api/userProfiles?gender={gender}`

### Get User Profiles by marital status
`/api/userProfiles?marital_status={marital_status}`

### Get User Profiles by address
`/api/userProfiles?address={address}`

### Get User Profiles by birthday
`/api/userProfiles?birthday={birthday}`

### Get User Profiles with two or parameters
`/api/userProfiles?name={name}&gender={gender}&address={address}`