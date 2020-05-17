<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Admin::create([
            'name'      =>  'Daniel Porfiriadis',
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('123pass'),
        ]);
    }
}
