<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        DB::table('users')->insert([
            'lastname' => 'ADMIN',
            'firstname' => 'admin',
            'email' => 'admin@hotmail.fr',
            'password' => bcrypt('admin'),
            'user_type_id' => 1,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
            'lastname' => 'DUGUE',
            'firstname' => 'Paul',
            'email' => 'paul.dugue@hotmail.fr',
            'password' => bcrypt('pauldugue'),
            'user_type_id' => 2,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
            'lastname' => 'ADAMS',
            'firstname' => 'Roonui',
            'email' => 'roonui.adams@hotmail.fr',
            'password' => bcrypt('adamsroonui'),
            'user_type_id' => 3,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
            'lastname' => 'MOU',
            'firstname' => 'Sandrine',
            'email' => 'sandrine.mou@hotmail.fr',
            'password' => bcrypt('sandrinemou'),
            'user_type_id' => 3,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
         'lastname' => 'TAIE',
         'firstname' => 'Taataparea',
         'email' => 'parea.taie@hotmail.fr',
         'password' => bcrypt('pareataie'),
         'user_type_id' => 3,
         'avatar' => 'npc.png',
         'created_at' => '2018-07-05 12:03:37',
         'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
            'lastname' => 'MAUI',
            'firstname' => 'Apetahi',
            'email' => 'apetahi.maui@hotmail.fr',
            'password' => bcrypt('apetahimaui'),
            'user_type_id' => 3,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
        DB::table('users')->insert([
            'lastname' => 'TKT',
            'firstname' => 'Cedric',
            'email' => 'cedric.tkt@hotmail.fr',
            'password' => bcrypt('cedtkt'),
            'user_type_id' => 3,
            'avatar' => 'npc.png',
            'created_at' => '2018-07-05 12:03:37',
            'updated_at' => '2018-07-05 12:03:37'
        ]);
         
     }
}
