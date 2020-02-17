<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        for ($i = 0; $i <= 5; $i++) {
            Employee::create([
                'nama_employee' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->shuffleString(24)),
                'hp' => $faker->phoneNumber,
                'position' => $faker->randomElement(['cashier', 'admin', 'chef'])
            ]);
        }

        for ($a = 0; $a <= 5; $a++) {
            \App\Menu::create([
                'nama_menu' => $faker->name,
                'harga' => $faker->numberBetween(10000, 100000)
            ]);
        }
        for ($b = 0; $b <= 5; $b++) {
            \App\User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'hp' => $faker->phoneNumber,
                'password' => bcrypt($faker->shuffleString(24)),
                'position' => $faker->randomElement(['cashier', 'admin', 'chef', 'guest'])
            ]);
        }
    }
}
