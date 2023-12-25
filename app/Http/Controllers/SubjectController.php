<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class SubjectController
 * @package App\Http\Controllers
 */
class SubjectController extends Controller
{
	/*** @return Application|Factory|View|\Illuminate\Foundation\Application */
	public function index()
	{
		return view('subjects.subject_list', ['subjects' => subjectController()->getAll()]);
	}
}
