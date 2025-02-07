<h1>お問い合わせフォーム</h1>

<h2>環境構築</h2>

<h3>Dockerビルド</h3>

<p>1.git clone git@github.com:coachtech-material/laravel-docker-template.git</p>
<p>docker-compose up -d -build</p>

<h3>Laravel環境構築</h3>

<p>1.docker-compose exec php bash</p>
<p>2.composer install</p>
<p>3..env.exampleファイルから.envをs作成し、環境変数を変更</p>
<p>4.php artisan key:generate</p>
<p>5.php artisan migrate</p>
<p>6.php artisan db:seed</p>

<h2>使用技術</h2>

<p>・PHP8.0</p>
<p>・Laravel 10.0</p>
<p>・MySQL8.0</p>

<h2>URL</h2>

<p>・開発環境: http://localhost/</p>
<p>・phpMyAdmin: http://localhost:8080/</p>
