#!/bin/bash

# Laravel Production Deployment Script
# Run this script AFTER performing git pull on the production server
# Usage: ./scripts/move_to_production.sh

set -e  # Exit on any error

echo "🚀 Starting Laravel production deployment..."

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# Navigate to the Laravel root directory (one level up from scripts/)
LARAVEL_ROOT="$(dirname "$SCRIPT_DIR")"
cd "$LARAVEL_ROOT"

echo "📂 Working directory: $(pwd)"

# Check if we're in the correct directory
if [ ! -f "artisan" ]; then
    echo "❌ Error: artisan file not found in $(pwd)."
    echo "   This script should be run from a Laravel project root directory."
    exit 1
fi

echo "✅ Laravel project detected"

# Step 1: Install/Update Composer dependencies for production
echo "📦 Installing Composer dependencies for production..."
composer install

# Step 2: Clear and cache configuration
echo "⚙️  Clearing and caching configuration..."
php artisan config:clear
php artisan config:cache

# Step 3: Clear and cache routes
echo "🛣️  Clearing and caching routes..."
php artisan route:clear
php artisan route:cache

# Step 4: Clear and cache views
echo "👁️  Clearing and caching views..."
php artisan view:clear
php artisan view:cache

# Step 5: Clear application cache
echo "🧹 Clearing application cache..."
php artisan cache:clear

# Step 6: Generate application key if not set
echo "🔑 Checking application key..."
if ! grep -q "APP_KEY=base64:" .env 2>/dev/null; then
    echo "⚠️  APP_KEY not found or invalid. Generating new key..."
    php artisan key:generate --force
else
    echo "✅ APP_KEY already exists and is valid"
fi

# Step 7: Clear compiled classes and services
echo "🗂️  Clearing compiled files..."
php artisan clear-compiled

# Step 8: Optimize autoloader and cache framework files
echo "⚡ Optimizing application..."
php artisan optimize

# Step 9: Create storage symlink if it doesn't exist
echo "🔗 Creating storage symlink..."
php artisan storage:link

# Step 10: Set proper ownership and permissions for Laravel directories
echo "🔒 Setting proper ownership and permissions..."

# Set ownership to apache:apache for key directories
chown -R apache:apache storage/
chown -R apache:apache bootstrap/cache/
chown -R apache:apache public/

# Set permissions for Laravel directories
chmod -R 775 storage
chmod -R 775 bootstrap/cache
chmod -R 755 public

# Ensure the entire Laravel directory is owned by apache
chown -R apache:apache .

# Set proper permissions for sensitive files
chmod 600 .env 2>/dev/null || echo "⚠️  .env file not found - make sure to create it with proper permissions"
chmod 600 *.p8 2>/dev/null || echo "ℹ️  No .p8 key files found to secure"

# Ensure executable permissions for artisan
chmod +x artisan

# Step 11: Restart queue workers (if using queues)
echo "🔄 Restarting queue workers..."
php artisan queue:restart

# Step 12: Clear and cache events (if you have event caching)
echo "📅 Clearing and caching events..."
php artisan event:clear
php artisan event:cache

# Step 13: Verify critical configurations
echo "🔍 Verifying configuration..."

# Check if APP_ENV is set to production
if ! grep -q "APP_ENV=production" .env 2>/dev/null; then
    echo "⚠️  WARNING: APP_ENV is not set to 'production' in .env file"
fi

# Check if APP_DEBUG is false
if ! grep -q "APP_DEBUG=false" .env 2>/dev/null; then
    echo "⚠️  WARNING: APP_DEBUG should be set to 'false' in production"
fi

# Step 14: Run a quick health check
echo "🏥 Running application health check..."
if php artisan --version > /dev/null 2>&1; then
    echo "✅ Laravel application is responding correctly"
else
    echo "❌ Error: Laravel application is not responding correctly"
    exit 1
fi

# Final message
echo ""
echo "🎉 Production deployment completed successfully!"
echo ""
echo "📋 Post-deployment checklist:"
echo "   ✅ Verify .env file has correct production values:"
echo "      - APP_ENV=production"
echo "      - APP_DEBUG=false"
echo "      - Database credentials"
echo "      - Mail settings"
echo "      - Third-party API keys (Apple OAuth, etc.)"
echo "   ✅ SSL certificate is configured"
echo "   ✅ Web server (Nginx/Apache) is properly configured"
echo "   ✅ Database connection is working"
echo "   ✅ File permissions and ownership are correct (apache:apache)"
echo "   ✅ Backup system is in place"
echo "   ✅ SELinux contexts are set (if applicable)"
echo ""
echo "🔐 Security reminder:"
echo "   - .env file is secured (600 permissions)"
echo "   - Apple OAuth .p8 keys are secured (600 permissions)"
echo "   - All Laravel files owned by apache:apache"
echo ""
echo "🚀 Your Laravel API is ready for production!"
#!/bin/bash

# Laravel Cache Clear Script
# This script clears all Laravel caches, views, logs, and temporary files

echo "🧹 Laravel Cache Clear Script"
echo "=============================="

# Check if we're in a Laravel project directory
if [ ! -f "artisan" ]; then
    echo "❌ Error: artisan file not found. Please run this script from your Laravel project root."
    exit 1
fi

echo "📁 Current directory: $(pwd)"
echo ""

# Clear Laravel caches
echo "🗑️  Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
#php artisan application:clear
php artisan event:clear
php artisan queue:clear
php artisan schedule:clear

echo "✅ Laravel caches cleared"
echo ""

# Clear compiled views
echo "🗑️  Clearing compiled views..."
if [ -d "storage/framework/views" ]; then
    rm -rf storage/framework/views/*
    echo "✅ Compiled views cleared"
else
    echo "⚠️  Views directory not found"
fi
echo ""

# Clear logs
echo "🗑️  Clearing log files..."
if [ -d "storage/logs" ]; then
    # Keep the latest log file but clear its contents
    if [ -f "storage/logs/laravel.log" ]; then
        > storage/logs/laravel.log
        echo "✅ Laravel log cleared"
    fi
    
    # Remove old log files
    find storage/logs -name "*.log" -type f -mtime +7 -delete 2>/dev/null
    echo "✅ Old log files removed"
else
    echo "⚠️  Logs directory not found"
fi
echo ""

# Clear storage cache
echo "🗑️  Clearing storage cache..."
if [ -d "storage/framework/cache" ]; then
    rm -rf storage/framework/cache/*
    echo "✅ Storage cache cleared"
else
    echo "⚠️  Storage cache directory not found"
fi
echo ""

# Clear sessions
echo "🗑️  Clearing sessions..."
if [ -d "storage/framework/sessions" ]; then
    rm -rf storage/framework/sessions/*
    echo "✅ Sessions cleared"
else
    echo "⚠️  Sessions directory not found"
fi
echo ""

# Clear temporary files
echo "🗑️  Clearing temporary files..."
if [ -d "storage/framework/testing" ]; then
    rm -rf storage/framework/testing/*
    echo "✅ Testing files cleared"
fi

# Clear any .tmp files
find . -name "*.tmp" -type f -delete 2>/dev/null
echo "✅ Temporary files cleared"
echo ""

# Clear composer cache (optional)
read -p "🗑️  Clear Composer cache as well? (y/N): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    composer clear-cache
    echo "✅ Composer cache cleared"
fi
echo ""

# Clear npm cache (optional)
read -p "🗑️  Clear npm cache as well? (y/N): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    npm cache clean --force
    echo "✅ npm cache cleared"
fi
echo ""

# Rebuild caches (optional)
read -p "🔄 Rebuild caches (config, route, view)? (y/N): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    echo "✅ Caches rebuilt"
fi
echo ""

# Check storage permissions
echo "🔧 Checking storage permissions..."
chmod -R 775 storage
chmod -R 775 bootstrap/cache
echo "✅ Storage permissions updated"
echo ""

# Final status
echo "🎉 Laravel cleanup completed!"
echo ""
echo "📊 Summary:"
echo "   • Laravel caches cleared"
echo "   • Compiled views cleared"
echo "   • Log files cleared"
echo "   • Storage cache cleared"
echo "   • Sessions cleared"
echo "   • Temporary files removed"
echo "   • Storage permissions updated"
echo ""
echo "💡 Tip: If you're still experiencing issues, try:"
echo "   • php artisan optimize:clear (Laravel 8+)"
echo "   • php artisan config:cache (for production)"
echo "   • php artisan route:cache (for production)"
echo "   • php artisan view:cache (for production)" 