# CodeIgniter 4 Application Starter (with Auth)

Simple CodeIgniter 4 starter project that includes basic authentication (Sign In / Sign Up), Dashboard, and Profile features.

## Requirements

- PHP **8.2** or higher
- Composer
- CodeIgniter 4.7+

## Installation

```bash
composer install
cp env .env          # or copy your environment file
php spark key:generate
```

Then configure your database in `.env` and run migrations if needed:

```bash
php spark migrate
```

## Features included

- User authentication (Sign In / Sign Up / Logout)
- AuthGuard & HasAccess filters
- Dashboard and Profile pages
- Basic User model + migration

## Important note about upgrading

This repository has been updated to require **PHP 8.2+** and **CodeIgniter ^4.7**.

Because many configuration files and the system folder structure evolved between 4.0 → 4.7, a full upgrade from the official [appstarter](https://github.com/codeigniter4/appstarter) is still recommended for production use.

## License

MIT

## Happy Coding!
