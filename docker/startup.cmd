docker-compose -f docker\compose.yaml up -d
timeout /t 5 /nobreak >nul
docker exec laravel_quotes php artisan migrate
docker exec laravel_quotes php artisan db:seed UserSeeder
rem docker exec laravel_quotes npm run build

