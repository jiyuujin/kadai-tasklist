# メッセージボード

## Build Step

~~~
# First Only
~$ bash init.sh

~$ homestead up --provision
~$ homestead ssh
vagrant@homestead:~$ cd Code/*****
vagrant@homestead:~$ npm run watch-poll

# composer update
vagrant@homestead:~$ composer update
~~~

~~~
# In Cloud9, use this command
~$ php artisan serve --host=$IP --port=$PORT
~~~
