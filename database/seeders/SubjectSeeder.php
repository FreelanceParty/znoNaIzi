<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

/**
 * Class SubjectSeeder
 * @package Database\Seeders
 */
class SubjectSeeder extends Seeder
{
    /*** Run the database seeds.*/
    public function run(): void
    {
        Subject::factory()->count(10)->create();
    }
}
