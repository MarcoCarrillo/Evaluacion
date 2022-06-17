<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RegistradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $keyName => $name){
            DB::table('groups')->insert([
                'key_name' => $keyName,
                'name' => $name
            ]);
        }
    }

    private function getData(){
        return [
            "regist" => "Registrados"
        ];
    }
}
