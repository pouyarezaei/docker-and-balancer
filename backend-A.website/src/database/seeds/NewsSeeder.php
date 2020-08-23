<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::all()->each(function ($user) {
            $user->news()->save(factory(\App\News::class)->make());
            $user->news()->save(factory(\App\News::class)->make());
        });
    }
}
