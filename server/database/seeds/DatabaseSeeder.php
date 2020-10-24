<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // ItemTableSeeder（シーダークラス）の呼び出し
        $this->call(ItemTableSeeder::class);
    }
}
