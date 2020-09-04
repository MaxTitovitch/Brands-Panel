<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

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
        Voyager::addAction(\App\Actions\AffiliateProgramAction::class);
        Voyager::addAction(\App\Actions\ProgramValueAction::class);
        Voyager::addAction(\App\Actions\ContactsAction::class);
        Voyager::addAction(\App\Actions\RatingsAction::class);
        Voyager::addAction(\App\Actions\FaqsAction::class);
        Voyager::addAction(\App\Actions\ScorecardsAction::class);
        Voyager::addAction(\App\Actions\StatisticsAction::class);
        Voyager::addAction(\App\Actions\StrengthsAction::class);
    }
}
