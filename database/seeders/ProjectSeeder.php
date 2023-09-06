<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $new_project = new Project();
        $new_project->title = "Laravel Comics";
        $new_project->url = "https://github.com/PasqualeDiMatteo/laravel-dc-comics";
        $new_project->description = "Copia del sito DC";
        $new_project->save();
    }
}
