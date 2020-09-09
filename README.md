## Laravel 7
## Plant Store 2020/07/11

== Hướng dẫn chạy source
Lưu ý: bỏ ở thư mục htdocs(xampp) hoặc www(wampserver)
1. composer install (cài package)
2. npm install (cài package)
3. phpunit (check errors)
4. cp .env.example .env (copy)
5. php artisan key:generate (tạo key)
6. php artisan migrate (tạo đồng bộ database)
7. php artisan db:seed (thêm dữ liệu vào database)
8. composer dump-autoload
7. Clear: url: /clear-cache, php artisan cache:clear, php artisan route:clear, php artisan config:clear, php artisan view:clear

-- FIX LỖI ImageMagick --
1. Download and install ImageMagick for Windows
-- https://www.imagemagick.org/script/download.php#windows
2. Download Imagick for PHP
-- https://pecl.php.net/package/imagick
3. Download required Imagick binaries
-- https://windows.php.net/downloads/pecl/deps/
4. Tham khảo tại đây: 
-- https://ourcodeworld.com/articles/read/349/how-to-install-and-enable-the-imagick-extension-in-xampp-for-windows
-- Settings email thanh toán tại file .evn
Link report: https://github.com/tachi098/PlantStore-Reports
Link video: https://www.youtube.com/watch?v=VbacO5M36aI