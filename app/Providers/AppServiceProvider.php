<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	 
	public function compose(View $view){
		$ur = url() ->full();
		$arr = explode('/',$ur);
		$end = end($arr);
		$view ->with('end', $end);
	}
	
    public function boot()
    {
        View::composer('*','App\Providers\ViewComposers\SiteComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
