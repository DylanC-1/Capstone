# Retro Shop

Welcome to the Retro Shop project! This is a dynamic website built with PHP that connects to a MySQL database and includes user authentication features.

## Project Structure

The project is organized as follows:

```
retro-shop
├── public
│   ├── index.php          # Entry point of the application
│   ├── .htaccess          # URL rewriting and server configuration
│   ├── css
│   │   └── app.css        # Styles for the application
│   └── js
│       └── app.js         # JavaScript for the application
├── app
│   ├── Controllers
│   │   ├── AuthController.php   # Handles user authentication
│   │   ├── ProductController.php # Manages product-related actions
│   │   └── HomeController.php    # Handles home page navigation
│   ├── Models
│   │   ├── User.php        # Represents the user entity
│   │   └── Product.php     # Represents the product entity
│   ├── Views
│   │   ├── auth
│   │   │   ├── login.php   # User login form
│   │   │   └── register.php # User registration form
│   │   ├── products
│   │   │   ├── index.php   # List of products
│   │   │   └── show.php    # Details of a single product
│   │   └── layouts
│   │       └── main.php    # Main layout template
│   ├── Middleware
│   │   └── AuthMiddleware.php # Checks user authentication
│   └── Helpers
│       └── helpers.php     # Helper functions
├── config
│   └── config.php          # Configuration settings
├── routes
│   └── web.php             # Application routes
├── database
│   ├── migrations
│   │   ├── 20260101_create_users.sql  # Migration for users table
│   │   └── 20260101_create_products.sql # Migration for products table
│   └── seeds
│       └── seed_products.sql # SQL commands to seed products
├── storage
│   ├── logs
│   │   └── app.log         # Application logs
│   └── sessions             # Session data storage
├── tests
│   ├── AuthTest.php        # Tests for authentication
│   └── ProductTest.php     # Tests for product functionality
├── composer.json            # Composer configuration
├── phpunit.xml             # PHPUnit configuration
├── .env.example             # Example environment variables
└── README.md                # Project documentation
```

## Features

- User authentication (login and registration)
- Product management (listing and viewing products)
- MVC architecture for better organization
- Database migrations and seeding for easy setup

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   ```

2. Navigate to the project directory:
   ```
   cd retro-shop
   ```

3. Install dependencies using Composer:
   ```
   composer install
   ```

4. Set up your `.env` file based on `.env.example`.

5. Run the database migrations:
   ```
   mysql -u username -p < database/migrations/20260101_create_users.sql
   mysql -u username -p < database/migrations/20260101_create_products.sql
   ```

6. Seed the database:
   ```
   mysql -u username -p < database/seeds/seed_products.sql
   ```

7. Start the server and navigate to `http://localhost/retro-shop/public`.

## Contributing

Feel free to submit issues or pull requests for any improvements or bug fixes.

## License

This project is licensed under the MIT License.