<?php

namespace Database\Seeders;

use App\Models\RolModel;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fRol = database_path('json/rol.json');
        $jRol = file_get_contents($fRol);

        foreach (json_decode($jRol) as $value) {
            RolModel::create([
                'name' => $value->name
            ]);
        }
    }
}
