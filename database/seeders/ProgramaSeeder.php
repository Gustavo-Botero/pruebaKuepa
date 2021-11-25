<?php

namespace Database\Seeders;

use App\Models\ProgramaModel;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fPrograma = database_path('json/programa.json');
        $jPrograma = file_get_contents($fPrograma);

        foreach (json_decode($jPrograma) as $value) {
            ProgramaModel::create([
                'name' => $value->name
            ]);
        }
    }
}
