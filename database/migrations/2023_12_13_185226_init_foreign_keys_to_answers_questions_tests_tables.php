<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tests', static function (Blueprint $table) {
	        $table->unsignedBigInteger('topic_id')->change();
			$table->foreign('topic_id')->references('id')->on('topics');
        });
	    Schema::table('answers', static function (Blueprint $table) {
		    $table->unsignedBigInteger('question_id')->change();
		    $table->foreign('question_id')->references('id')->on('questions');
	    });
	    Schema::table('questions', static function (Blueprint $table) {
		    $table->unsignedBigInteger('test_id')->change();
		    $table->foreign('test_id')->references('id')->on('tests');
	    });
    }

};
