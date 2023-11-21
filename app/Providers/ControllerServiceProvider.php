<?php

namespace App\Providers;

use App\ModelControllers\SubjectController;
use Illuminate\Support\ServiceProvider;

/**
 * Class ControllerServiceProvider
 * @package App\Providers
 */
class ControllerServiceProvider extends ServiceProvider
{
    /*** Bootstrap services. */
    public function boot(): void
    {
        $this->app->singleton(SubjectController::class);
        $this->app->alias(SubjectController::class, 'SubjectController');
    }
}
