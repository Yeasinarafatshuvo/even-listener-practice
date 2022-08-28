<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

In this simple project i show how to use event listener for specefic task using mail trap demo mail.<br>

step 1: At first you have to create a controller for write logic part your application.<br>
Example: php artisan make:controller NewsLetterController.<br>
step 2: create a event for subscribed use email.<br>
Example: php artisan make:event UserSubscribed.<br>
step 2: create a listener for UserSubscribed event.<br>
php artisan make:listener EmailOwnerAboutSubscription --event=UserSubscribed<br>

step 3: Than register this event listener at EventServiceProvider<br>
Example: <br>
 protected $listen = [<br>
        Registered::class => [<br>
            SendEmailVerificationNotification::class,<br>
        ],<br>
        UserSubscribed::class => [<br>
            EmailOwnerAboutSubscription::class,<br>
        ],<br>
    ];<br>
    
 step 4: Than write code as per your need and requirements. You can see the example of this projects code.<br>

