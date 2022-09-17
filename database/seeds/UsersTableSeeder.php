<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'id'        => 1,
                    'email'     => 'admin@app.local',
                    'name'      => 'admin',
                    'password'  => '$2y$10$il0CQKXy/N5b1CUwXUh3I.Nnfx5xW2Ppxo4MDti7FDsZGm7ZDYbyW'
                ]
        ]
        );
    }
}
