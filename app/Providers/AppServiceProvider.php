<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DTO;
use App\Model;
use App\Workers;
use App\Publishers;
use App\Transactors;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(DTO\Email::class, DTO\EmailDTO::class);

        // $this->app->bind(Publishers\Publisher::class, Publishers\EmailPublisher::class);

        // $this->app->bind(Workers\Worker::class, static function ($app) {
        //     return new Workers\EmailWorker([
        //         $app->make(Transactors\MailjetTransactor::class),
        //         $app->make(Transactors\SendgridTransactor::class),
        //     ]);
        // });

        // $this->app->bind(Model\Email::class, Model\EmailModel::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
