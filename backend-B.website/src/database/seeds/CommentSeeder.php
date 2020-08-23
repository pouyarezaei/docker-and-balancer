<?php


use App\Comment;
use App\News;
use App\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::all()->each(function ($news) {
            $news->comments()->save(factory(Comment::class)->make());
            $news->comments()->save(factory(Comment::class)->make());
            $news->comments()->save(factory(Comment::class)->make());
        });
    }
}
