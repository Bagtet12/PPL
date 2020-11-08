<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'nama_role' =>'admin',
        ]);

        DB::table('role')->insert([
            'nama_role' =>'user',
        ]);
    }
}
