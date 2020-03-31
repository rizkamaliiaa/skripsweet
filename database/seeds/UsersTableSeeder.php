<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Membuat sample admin
    	DB::table('users')->insert([
		  'roles' => 1,
		  'nama_depan' => 'admin',
		  'nama_belakang' => 'admin',
		  'email' => 'admin@gmail.com',
		  'no_hp' => '082250598822',
		  'alamat' => 'jl serdam',
		  'password' => bcrypt('rahasia'),
        ]);

        //Membuat sample user
        DB::table('users')->insert([
          'roles' => 2,
          'nama_depan' => 'rizka',
          'nama_belakang' => 'amalia',
          'email' => 'rizka@gmail.com',
          'no_hp' => '085705222756',
          'alamat' => 'jl serdam komp srikandi',
          'password' => bcrypt('rizka'),
        ]);
    }
}
