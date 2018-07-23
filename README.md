**Sample Lead Collection Form**

Written using the Laravel 5.6 PHP framework (_https://laravel.com_)

_urls:_

* `/`
    * Displays lead collection form.

* `/login`
    * Displays login form.

* `/lead_collection`
    * Displays leads (requires valid user).

_Laravel artisan commands_:

* `php artisan migrate`
    * Creates basic tables.
   
* `php artisan db:seed`
    * Creates sample leads and two admin users. 
    * Admin users are created in the `users` table.
    * Password is `secret`.

* `php artisan dusk`
    * Runs tests.
    * Tests form submission.
