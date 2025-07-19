# Backend Migration Summary

## Database Schema
- **File**: `database/schema.sql` - Complete database structure
- **Setup**: `setup-database.php` - Database initialization script
- **Default Users**:
  - Admin: admin@salinashelton.com / admin123
  - Test User: user@salinashelton.com / user123

## API Routes Structure

### Authentication Routes
- `POST /api/auth/register` - User registration
- `POST /api/auth/login` - User login
- `POST /api/auth/logout` - User logout
- `GET /api/auth/current-user` - Get current user info
- `GET /api/auth/me` - Alias for current-user
- `GET /api/auth/debug` - Debug authentication

### Media Routes
- `GET /api/media` - List media
- `POST /api/media/upload` - Upload media
- `GET /api/media/tags` - Get media tags

### Booking Routes
- `GET /api/bookings` - List bookings

### Journal Routes
- `GET /api/journal` - Journal entries

### Newsletter Routes
- `POST /api/newsletter/subscribe` - Subscribe to newsletter
- `POST /api/newsletter/send` - Send newsletter
- `GET /api/newsletter/list` - List subscribers
- `GET /api/newsletter/test` - Test newsletter

### Server Routes
- `GET /api/server/status` - Server status
- `POST /api/server/update` - Server update

### AI Routes
- `POST /api/ai/chat` - AI chat
- `GET /api/ai/conversations` - AI conversations
- `GET /api/ai/status` - AI status

### Admin Routes
- `GET /api/admin/stats` - Admin statistics
- `GET /api/admin/recent-activity` - Recent activity
- `GET /api/admin/debug` - Admin debug

## Admin Panel Routes
- `GET /admin/dashboard` - Admin dashboard
- `GET /admin/media` - Media management
- `GET /admin/bookings` - Booking management
- `GET /admin/users` - User management
- `GET /admin/newsletter` - Newsletter management
- `GET /admin/ai-assistant` - AI assistant
- `GET /admin/server-status` - Server status

## Authentication Pages
- `GET /login` - Login page
- `GET /logout` - Logout (redirects to login)

## CORS Configuration
- Allowed origins: https://www.salinashelton.com, https://me.salinashelton.com
- Methods: GET, POST, PUT, DELETE, OPTIONS
- Headers: Content-Type, Authorization
- Credentials: true

## File Structure
```
backend/
├── api/                    # API endpoints
│   ├── auth/              # Authentication
│   ├── media/             # Media management
│   ├── bookings/          # Booking system
│   ├── journal/           # Journal system
│   ├── newsletter/        # Newsletter system
│   ├── server/            # Server management
│   ├── ai/                # AI assistant
│   └── admin/             # Admin API
├── admin/                 # Admin panel pages
├── classes/               # PHP classes
├── config/                # Configuration files
├── database/              # Database files
├── includes/              # Include files
├── uploads/               # Upload directory
├── index.php              # Main router
├── router.php             # Development server router
└── .htaccess              # Apache configuration
```

## Migration Notes
- All API endpoints return JSON responses
- Session-based authentication for admin panel
- File uploads handled in `/uploads/` directory
- Database uses PDO with MySQL
- CORS configured for frontend integration 