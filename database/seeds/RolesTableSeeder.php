<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * If you wish to truncate the entire table
         * , which will remove all rows and reset the auto-incrementing ID to zero,
         * you may use the truncate method:
         * */
     Role::truncate();
     Role::create(['name'=>'admin']);
     Role::create(['name'=>'author']);
     Role::create(['name'=>'user']);
    }
}
