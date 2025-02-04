
# Team Roles Test Documentation

## Features

- Add responses to questions.
- View a list of all questions.
- Explore different team roles.
- User-friendly URL routing.
- Built-in testing with PHPUnit.

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository:**

   git clone [https://github.com/yourusername/my-cakephp-app.git](https://github.com/MolebohengMakhapha/teamrolestest)
2. **Navigate to the project directory:**

cd my-cakephp-app

Install dependencies:

3. **Make sure you have Composer installed, then run:**

composer install

4. **Set up the environment:**

Copy the .env.example file to .env and configure your environment variables.

cp .env.example .env
## Run migrations:

If your project uses a database, run the migrations to set up the database schema:

- bin/cake migrations migrate
Seed the database (optional):

- If you want to populate the database with sample data, run:

bin/cake migrations seed
### Start the server:

 - You can start the built-in CakePHP server:

- bin/cake server
- Access your application at http://localhost:8765.

## Usage
Accessing the application:

Navigate to http://localhost:8765 in your web browser.
Key functionalities:

- To take a test, go to /responses/add.
- To view all questions, navigate to /questions.
- To explore team roles, visit /team-roles.
## Routes

- Home Page: / - Displays the home page.
- Test: /responses/add - Form to take the test.
- View Questions: /questions - Displays a list of all questions.
- View Team Roles: /team-roles - Displays a list of all team roles.
## Testing
### Run PHPUnit tests:

vendor/bin/phpunit
Run specific test files:

vendor/bin/phpunit tests/TestCase/Model/Entity/UserTest.php
## Contributing
If you would like to contribute to this project, please follow these steps:

### Fork the repository.
Create a new branch for your feature or bug fix.
Make your changes and commit them.
Push your branch to your forked repository.
Create a pull request.
