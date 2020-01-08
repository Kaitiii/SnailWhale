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
        DB::table('comics')->delete();
        DB::table('comics')->insert([
            [
                'name' => 'Bi Thighs',
                'file' => 'BiThighs',
            ],
            [
                'name' => 'Gay Gripes',
                'file' => 'GayGripes',
            ],
        ]);

        DB::table('animations')->delete();
        DB::table('animations')->insert([
            [
                'name' => 'Elk Play',
                'file' => 'ElkPlay',
            ],
            [
                'name' => 'Master Baiter',
                'file' => 'MasterBaiter',
            ],
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
