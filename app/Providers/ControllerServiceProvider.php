<?php

namespace App\Providers;

use App\ModelControllers\AnswerController;
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
        $this->app->singleton(AnswerController::class);
        $this->app->alias(AnswerController::class, 'AnswerController');
    }
}
