# もぎたて
## 環境構築
Dockerビルド
1. git@github.com:yuka619/test2.git

2.docker-compose up -d --build

Laravel環境構築

1.docker-compose exec php bash

2.composer install

3..env.exampleファイルから.envを作成し、環境変数を変更

4.php artisan key:generate

5.php artisan migrate

6.php artisan db:seed

## ER図
![test2](https://github.com/user-attachments/assets/c682b343-7806-4308-8846-bcb5f0d95170)

## 使用技術
・PHP 8.3.10

・Laravel 8.83.27

・MYSQL 8.0.26
## URL
・開発環境:http://localhost/product

・phpMyAdmin:http://localhost:80:80/
