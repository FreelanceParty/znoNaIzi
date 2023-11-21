<?php

use App\ModelControllers\SubjectController;

if( ! function_exists('subjectController')) {
    /*** @return SubjectController */
    function subjectController(): SubjectController
    {
        return app('SubjectController');
    }
}