@echo off
echo Resetting database...
del /f "database\database.sqlite"
type nul > "database\database.sqlite"
php artisan migrate --force
php artisan db:seed --force
echo.
echo Database reset complete!
echo Agricultural products have been loaded.
pause
