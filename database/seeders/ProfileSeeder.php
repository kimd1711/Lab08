<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Nếu không có user nào, tạo 5 user thử nghiệm
        if (User::count() == 0) {
            \App\Models\User::factory()->count(5)->create();
        }

        User::all()->each(function ($user) use ($faker) {
            // Nếu user đã có profile thì bỏ qua
            if ($user->profile) {
                return;
            }

            $user->profile()->create([
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
            ]);
        });
    }
}
