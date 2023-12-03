<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*** @return void */
    public function up(): void
    {
        Schema::create('questions', static function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->integer('test_id');
            $table->integer('number_in_order')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp(('updated_at'))->useCurrentOnUpdate();
        });
    }
};
