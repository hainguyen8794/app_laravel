<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Model\TypeGame;
use Illuminate\Support\Facades\View;
use App\Model\GameModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path().DIRECTORY_SEPARATOR.'public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            Schema::defaultStringLength(191); //NEW: Increase StringLength
        $type_game = TypeGame::all();
        $game = GameModel::limit(4)->get();
        View::share('games',$game);
        View::share('type_game',$type_game);
    }
}
