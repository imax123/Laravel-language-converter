# Laravel-language-converter

Note Install fresh laravel 5.3 

# Step 1. Add code to web.php  (Path routes/web.php)

Route::post('/language', array(
    'Middleware' => 'languageSwitcher',
    'uses' => 'LanguageController@index'
));

# Step 2. Create your own language file (path resources/lang) 
example i have created :- es folder / messages.php

# Step 3. Create a middleware languageSwitcher 
command : php artisan make:middleware languageSwitcher

Check path (app/Http/Middleware/languageSwitcher.php)
copy languageSwitcher.php code and paste it into your languageSwitcher.php

# Step 4. Create Controller LanguageController.php
Command : php artisan make:controller languageController

Check path (app/Http/Controllers)
copy LanguageController.php code and paste it into your LanguageController.php 

# Step 5. Add following line into your Kernel.php 
/* Laravel multilanguage Switcher */
Add in protected $middleware :

\Illuminate\Session\Middleware\StartSession::class,
\App\Http\Middleware\languageSwitcher::class,

# Step 6. Check welcome.blade.php 
path(resources/views/welcome.blade.php) 

Update your wecome with my welcome.blade.php 

## Thanks done (If not then download or clone this laravel app)
