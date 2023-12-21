<?php

use App\ModelControllers\AnswerController;
use App\ModelControllers\ChapterController;
use App\ModelControllers\SubjectController;
use App\ModelControllers\TestController;
use App\ModelControllers\TopicController;
use App\ModelControllers\QuestionController;

if( ! function_exists('subjectController')) {
    /*** @return SubjectController */
    function subjectController(): SubjectController
    {
        return app('SubjectController');
    }
}
if( ! function_exists('answerController')) {
    /*** @return AnswerController */
    function answerController(): AnswerController
    {
        return app('AnswerController');
    }
}
if( ! function_exists('topicController')) {
    /*** @return TopicController */
    function topicController(): TopicController
    {
        return app('TopicController');
    }
}
if (!function_exists('questionController')) {
    function questionController(): QuestionController
    {
        return app('QuestionController');
    }
}
if (!function_exists('testController')) {
    function testController(): TestController
    {
        return app('TestController');

    }

    if (!function_exists('chapterController')) {
        function chapterController(): ChapterController
        {
            return app('ChapterController');
        }
    }
}
