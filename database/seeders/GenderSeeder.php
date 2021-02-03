<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert(array('name' => 'Masculino', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()));
        DB::table('genders')->insert(array('name' => 'Femenino', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()));
        DB::table('genders')->insert(array('name' => 'Otro', 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now()));

    }
}
