<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'topic_id' => '1',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Какое небесное тело в астрологии «отвечает» за понедельник',
                'answer' => 'Луна'
            ],
            [
                'topic_id' => '1',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Какой знак зодиака приходится на лето',
                'answer' => 'Рак'
            ],
            [
                'topic_id' => '1',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Как называется яркая звезда - альфа Скорпиона',
                'answer' => 'Антарес'
            ],
            [
                'topic_id' => '2',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'В каком южноамериканском городе стоит 38-метровая статуя Иисуса Христа',
                'answer' => 'Рио де жанейро'
            ],
            [
                'topic_id' => '2',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'В каком городе находилось одно из семи чудес света Сады Семирамиды',
                'answer' => 'Вавилон'
            ],
            [
                'topic_id' => '2',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Какой город являлся целью всех крестовых походов',
                'answer' => 'Иерусалим'
            ],

            [
                'topic_id' => '3',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Мехом какого животного отделана шапка Мономаха',
                'answer' => 'Соболь'
            ],

            [
                'topic_id' => '3',
                'status' => '1',
                'author_name' => 'author',
                'text' => '',
                'answer' => ''
            ],

            [
                'topic_id' => '3',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Как называется русская охотничья порода собак',
                'answer' => 'Борзая'
            ],

            [
                'topic_id' => '3',
                'status' => '1',
                'author_name' => 'author',
                'text' => 'Как звали любимую лошадь Петра I',
                'answer' => 'Лизетта'
            ],


            [
                'topic_id' => '3',
                'status' => '0',
                'author_name' => 'author',
                'text' => 'Кого в русских сказках называют Топтыгин',
                'answer' => NULL
            ],
        ]);
    }
}
