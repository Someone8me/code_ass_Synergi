## Project Overview

This project uses the Laravel framework to store user information into a MySQL database.
The project only consists of 2 x pages which is the User Create page and the Thankyou message page which displays right after a successfull user creation.

## Technical Details

The project follows the MVC (Model-View-Controller) architecture typical of Laravel applications.
The Create User form interacts with a database table named 'synergi_users', which uses the following structure:
 - username [varcgar/255]
 - email [varchar/255]
 - comments [medium/text]
 - created_at [datetime]
 - updated_at [datetime]

## Validation Rules
 - username: Required, string, maximum length of 255 characters.
 - email: Required, valid email format, unique in the synergi_users table.
 - comments: Optional, string, maximum length of 2000 characters.

## Running the Code
To run this project locally, follow these steps:

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Install PHP and NPM dependencies:
```
composer install
npm install
```

4. Copy the .env.example file and rename it to .env. Update the database connection details.
5. Run database migrations and seeders:
```
php artisan migrate --seed
```

6. Serve the application:
```
php artisan serve
```

7. Access the application in your web browser at http://localhost:8000

## Testing
For testing, this project utilizes PHPUnit. To run the tests, execute the following command:
```
php artisan test
```
> This command will run all the test cases in the tests directory and verify the functionality of the application.
