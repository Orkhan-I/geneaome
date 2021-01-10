<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\User;
use App\Models\lang;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
		
		view()->share('locales',lang::get());
		
		view()->share('count',Contact::where('hit',0)->get()->count());
		
		
	
       
       
    }
}
