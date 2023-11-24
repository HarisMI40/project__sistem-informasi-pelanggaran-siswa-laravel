<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dataGuru = [];
        for($i = 2; $i <= 10; $i++){
            $guru = [
                'full_name' => "guru$i",
                'identity_number' => rand(1, 1000) * rand(1, 5000) + rand(1,100),
                'email' => "guru$i@gmail.com",
                'username' => "guru$i",
                'password' => Hash::make('123'),
                'phone_number' => rand(1, 1000) * rand(1, 5000) + rand(1,100)
            ];
            array_push($dataGuru, $guru);
        }
        Teacher::insert($dataGuru);
    }
}
