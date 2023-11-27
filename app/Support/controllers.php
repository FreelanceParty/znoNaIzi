<?php

use App\ModelControllers\AnswerController;
use App\ModelControllers\SubjectController;
use App\ModelControllers\TopicController;

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
