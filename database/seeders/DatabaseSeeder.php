<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder cũ (dữ liệu cho Category & Product)
        \App\Models\Category::factory()
            ->count(5)
            ->hasProducts(10)
            ->create();

        // ✅ Thêm dòng này để seed thêm dữ liệu cho Bài 4 (Student – Course)
        $this->call(StudentCourseSeeder::class);

        // gọi thêm ProfileSeeder:
        $this->call(ProfileSeeder::class);
    }
}
