# Local set up.

This project uses DDEV for local development.

[https://docs.ddev.com/en/stable/users/install/] (DDEV Install instructions here)

After installing DDEV locally, the project can be started using the following command:

```
ddev init
```

For first time set up run the following from the project root:

```
ddev composer install

ddev npm i

cp .env-example .env

ddev php artisan key:generate

ddev php artisan migrate

ddev npm run build

```

This will:

- Install composer dependencies
- Install node dependencies
- Copy the .env file
- Generate the site key
- Set up initial database tables
- Build front end dependencies