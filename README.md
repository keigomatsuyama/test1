# laravel-docker-template
お問い合わせフォーム

環境構築 Dockerビルド 1git cloneリンク 2docker-compose up-d--build ※MysqlはOsによって起動しない場合があるのでそれぞれのPCに合わせてDocker-compose.ymlファイルを編集してうださい。 laravel環境構築

1docker-compose exec php bash 2composer install 3.env.exampleファイルから.envを作成し、環境変数を変更 4php artisan key generate 5php artisan migrate 6php artisan db:seed 使用技術 php8.0 laravel10.0 Mysql8.0 URL　http/localhost 開発環境　http/localhost:8080/お問い合わせフォーム

環境構築 Dockerビルド 1git cloneリンク 2docker-compose up-d--build ※MysqlはOsによって起動しない場合があるのでそれぞれのPCに合わせてDocker-compose.ymlファイルを編集してうださい。 laravel環境構築

1docker-compose exec php bash 2composer install 3.env.exampleファイルから.envを作成し、環境変数を変更 4php artisan key generate 5php artisan migrate 6php artisan db:seed 使用技術 php8.0 laravel10.0 Mysql8.0 URL　http/localhost 開発環境　http/localhost:8080/