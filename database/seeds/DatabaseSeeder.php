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
        DB::table('sysusers')->insert([
        	'uname' => 'admin',
        	'namalengkap' => 'administrator',
        	'email' => 'admin@pbo3.com',
        	'upass' => sha1('admin'),
        ]);
    }
}
