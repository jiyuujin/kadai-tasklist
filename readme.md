## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravelプロジェクト作成など、[基本的な操作はこちらをチェック](https://jiyuujin.github.io/laravel-training/)

成果物は、[jiyuujin-message-board](http://jiyuujin-message-board.herokuapp.com)

~~~
# プロジェクトを作成する
~$ mkdirmessage-board
~$ composer create-project laravel/laravel message-board "5.1.*"
~~~

### 日報を登録する

~~~
# messagesテーブルを作成する
~$ php artisan make:migration create_messages_table --create=messages
~$ php artisan migrate
~~~

