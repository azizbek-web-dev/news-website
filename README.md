# News Website

A modern, full-featured news website built with Laravel 11, featuring user authentication, content management, and an admin panel.

## Features

### 🚀 Core Features
- **User Authentication**: Registration, login, logout with Laravel Breeze
- **Post Management**: Create, read, update, delete posts with image uploads
- **Category System**: Organize posts into categories
- **Comment System**: Users can comment on posts
- **Admin Panel**: Complete content management system
- **Responsive Design**: Mobile-first design with TailwindCSS

### 📱 Frontend
- **Modern UI**: Clean, responsive design with TailwindCSS
- **Post Listing**: Grid layout with pagination
- **Post Details**: Full post view with comments
- **Category Pages**: Browse posts by category
- **User Dashboard**: Personal dashboard for authenticated users

### 🔧 Admin Panel
- **Dashboard**: Statistics and recent activity overview
- **User Management**: View, edit, and delete users
- **Post Management**: Edit and delete posts
- **Category Management**: Create, edit, and delete categories
- **Comment Management**: View and delete comments

## Technology Stack

- **Backend**: Laravel 11
- **Frontend**: Blade templates with TailwindCSS
- **Database**: SQLite (default) / MySQL / PostgreSQL
- **Authentication**: Laravel Breeze
- **File Storage**: Local storage with image upload support
- **Styling**: TailwindCSS with responsive design

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- SQLite (default) or MySQL/PostgreSQL

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/azizbek-web-dev/news-website.git
cd news-website
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# If composer is not installed or you have an old version, use composer.phar:
# php composer.phar install

# Install Node.js dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Environment Variables

Edit the `.env` file with your configuration:

```env
APP_NAME="News Website"
APP_URL=http://localhost:8000

# Database Configuration (SQLite is default)
DB_CONNECTION=sqlite

# For MySQL/PostgreSQL, uncomment and configure:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=news_website
# DB_USERNAME=root
# DB_PASSWORD=your_password

# Mail Configuration
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### 5. Database Setup

```bash
# Run migrations
php artisan migrate

# (Optional) Seed the database with sample data
php artisan db:seed
```

### 6. Storage Setup

```bash
# Create storage link for file uploads
php artisan storage:link
```

### 7. Build Assets

```bash
# Build CSS and JavaScript assets
npm run build

# For development with hot reloading
npm run dev
```

### 8. Start the Server

```bash
# Start Laravel development server
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Usage

### First Time Setup

1. **Create Admin User**: The first registered user automatically becomes an admin
2. **Access Admin Panel**: Visit `/admin` (only accessible by the first user)
3. **Create Categories**: Set up post categories in the admin panel
4. **Create Posts**: Start creating content through the admin panel or user interface

### User Features

- **Browse Posts**: View all posts on the homepage
- **Read Full Posts**: Click on any post to read the full content
- **Leave Comments**: Register/login to comment on posts
- **View Categories**: Browse posts by category

### Admin Features

- **Dashboard**: View system statistics and recent activity
- **Manage Users**: View, edit, and delete user accounts
- **Manage Posts**: Edit and delete posts
- **Manage Categories**: Create, edit, and delete categories
- **Manage Comments**: View and delete comments

## Project Structure

```
news-website/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php      # Admin panel controller
│   │   │   ├── PostController.php       # Post management
│   │   │   ├── CategoryController.php   # Category management
│   │   │   └── CommentController.php    # Comment management
│   │   └── Middleware/
│   │       └── AdminMiddleware.php      # Admin access control
│   ├── Models/
│   │   ├── User.php                     # User model
│   │   ├── Post.php                     # Post model
│   │   ├── Category.php                 # Category model
│   │   └── Comment.php                  # Comment model
│   └── Policies/
│       └── PostPolicy.php               # Post authorization
├── database/
│   ├── migrations/                      # Database migrations
│   └── seeders/                        # Database seeders
├── resources/
│   ├── views/
│   │   ├── admin/                      # Admin panel views
│   │   ├── posts/                      # Post views
│   │   ├── categories/                 # Category views
│   │   └── layouts/                    # Layout templates
│   ├── css/
│   │   └── app.css                     # TailwindCSS styles
│   └── js/
│       └── app.js                      # JavaScript assets
├── routes/
│   └── web.php                         # Application routes
└── public/
    └── storage/                        # Public file storage
```

## API Endpoints

### Public Routes
- `GET /` - Homepage (redirects to posts)
- `GET /posts` - List all posts
- `GET /posts/{post}` - View single post
- `GET /categories` - List all categories
- `GET /categories/{category}` - View category posts

### Authenticated Routes
- `POST /posts` - Create new post
- `PUT /posts/{post}` - Update post
- `DELETE /posts/{post}` - Delete post
- `POST /comments` - Create comment
- `POST /categories` - Create category
- `PUT /categories/{category}` - Update category
- `DELETE /categories/{category}` - Delete category

### Admin Routes
- `GET /admin` - Admin dashboard
- `GET /admin/users` - Manage users
- `GET /admin/posts` - Manage posts
- `GET /admin/categories` - Manage categories
- `GET /admin/comments` - Manage comments

## Configuration

### File Uploads
- **Max File Size**: 2MB (configurable in `.env`)
- **Allowed Types**: jpg, jpeg, png, gif
- **Storage**: Local storage (configurable for AWS S3)

### Pagination
- **Posts per page**: 10 (configurable)
- **Comments per page**: 10 (configurable)
- **Admin items per page**: 10 (configurable)

### Admin Access
- Only the first registered user can access the admin panel
- Admin users can manage all content and users
- Regular users can only manage their own posts

## Development

### Running Tests
```bash
php artisan test
```

### Code Style
```bash
# Format code with Laravel Pint
./vendor/bin/pint
```

### Database Seeding
```bash
# Seed with sample data
php artisan db:seed
```

## Hosting Deployment

### Using composer.phar on Hosting

If your hosting provider has an old version of Composer or doesn't have Composer installed, you can use the included `composer.phar` file:

```bash
# Instead of: composer install
# Use: php composer.phar install

# Instead of: composer update
# Use: php composer.phar update

# Instead of: composer dump-autoload
# Use: php composer.phar dump-autoload
```

The `composer.phar` file is included in the repository and contains the latest Composer version, so it will work on any hosting provider with PHP support.

## Deployment

### Production Checklist
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure proper database credentials
4. Set up file storage (local or AWS S3)
5. Configure mail settings
6. Run `php artisan config:cache`
7. Run `php artisan route:cache`
8. Run `php artisan view:cache`

### Environment Variables for Production
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support, email support@yourdomain.com or create an issue in the repository.

## Changelog

### Version 1.0.0
- Initial release
- User authentication with Laravel Breeze
- Post and category management
- Comment system
- Admin panel
- Responsive design with TailwindCSS
