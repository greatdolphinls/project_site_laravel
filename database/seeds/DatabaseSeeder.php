<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Model::unguard();

        App\User::truncate();
        factory(App\User::class)->create([
            'username' => 'aaa',
            'email' => 'aaa@aaa.com',
            'password' => bcrypt('aaaaaa'),
        ]);
        factory(App\User::class)->create([
            'username' => 'bbb',
            'email' => 'bbb@bbb.com',
            'password' => bcrypt('bbbbbb'),
        ]);
        factory(App\User::class, 10)->create();
        $this->command->info('users table seeded');

        App\Models\Project::truncate();
        factory(App\Models\Project::class, 15)->create();
        $this->command->info('projects table seeded');
    }
}