<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Первый способ
        DB::insert('INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?,?,?)',
            [
            'Blog post 1',
                '<p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'pic1.jpg'

        ]);

        //Второй способ конструктор запросов
        DB::table('articles')->insert(
            [
                [
                    'name' => "Sample blog post 2",
                    'text' => "<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
                    'img' => "pic2.jpg"
                ],
                [
                    'name' => "Blog post 3",
                    'text' => "<p>Second yuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
                    'img' => "pic3.jpg"
                ]
            ]
        );

        //Третий способ - использование модели
        Article::create(
            [
                'name' => 'Blog post 4',
                'text' => "<p>Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>",
                'img' => "pic4.jpg"
            ]
        );
    }
}
