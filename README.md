Goutte Laravel4 package 
=======================

more info:
----------
https://github.com/fabpot/Goutte

# Installation

Open up the Laravel 4 `composer.json` file and add my repository fork

~~~json
"repositories": [
    {
      "url": "https://github.com/everlaat/laravel4-goutte.git",
      "type": "git"
    }
  ],
~~~

add the `elvedia/goutte` package to the `require` section:

~~~json
{
  "require": {
    "laravel/framework": "4.0.*",
    ...
    "elvedia/goutte": "1.0.*"
  }
  ...
}
~~~

Run the composer `install` or `update` task, which will make composer download requested packages and setup initial environment:

~~~sh
$ composer update
~~~

By default, composer will autoload the required classes. If you encounter any error, run the following command to force composer re-generate the autoload file:

~~~sh
$ composer dump-autoload
~~~

Next, we need to install the package in your Laravel 4 application. Open up the the `app/config/app.php` file and append the following code to the `providers` array:

~~~php
'Elvedia\Goutte\Providers\GoutteServiceProvider',
~~~

The `providers` section should look like the following snippet:

~~~php
'providers' => array(
    ...
    'Elvedia\Goutte\Providers\GoutteServiceProvider',
),
~~~

Next, add the following code to the `aliases` array in the `app/config/app.php` file:

~~~php
'Goutte' => 'Elvedia\Goutte\Facades\GoutteFacade',
~~~

The `aliases` array should now look like the snippet below:

~~~php
'aliases' => array(
    ...
  'Goutte' => 'Elvedia\Goutte\Facades\Laravel\GoutteFacade',
),
~~~

Goutte Laravel 4 is now ready to be used in your web application!
