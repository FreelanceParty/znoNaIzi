<?php

namespace App\Providers;

use App\ModelControllers\AnswerController;
use App\ModelControllers\ChapterController;
use App\ModelControllers\QuestionController;
use App\ModelControllers\SubjectController;
use App\ModelControllers\TestController;
use App\ModelControllers\TopicController;
use App\Models\Question;
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
        $this->app->singleton(TopicController::class);
        $this->app->alias(TopicController::class, 'TopicController');
        $this->app->singleton(QuestionController::class, 'QuestionController');
        $this->app->alias(QuestionController::class, 'QuestionController');
        $this->app->singleton(TestController::class, 'TestController');
        $this->app->alias(TestController::class, 'TestController');
        $this->app->singleton(ChapterController::class, 'ChapterController');
        $this->app->alias(ChapterController::class, 'ChapterController');
    }
}
