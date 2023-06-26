<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->description = "El mejor framework de php";
        $curso->category="Desarrollo Web";

        $curso->save();
    }
}
